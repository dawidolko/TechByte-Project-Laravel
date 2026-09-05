#!/bin/bash
#
# TechByte — start kontenera produkcyjnego.
#
# Osobny plik od `entrypoint.sh`, ktory sluzy pracy lokalnej. Tamten robi
# `migrate:fresh --seed` i kasuje `composer.lock` — na produkcji oznaczaloby to
# skasowanie bazy i przelosowanie zaleznosci przy KAZDYM restarcie kontenera.
# Tutaj migracje sa przyrostowe, a seed odpala sie tylko wtedy, gdy baza jest
# jeszcze pusta.
set -e

cd /var/www

echo "==> Oczekiwanie na baze..."
until php -r "new PDO('mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));" >/dev/null 2>&1; do
    sleep 3
done
echo "    baza odpowiada."

if [ ! -f /var/www/.env ]; then
    echo "==> Tworzenie .env z .env.example..."
    cp /var/www/.env.example /var/www/.env
fi

if [ ! -d /var/www/vendor ] || [ ! -f /var/www/vendor/autoload.php ]; then
    echo "==> Instalacja zaleznosci (composer install, bez ruszania lockfile)..."
    composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
fi

# Wartosci produkcyjne wpisujemy do `.env`, a nie zostawiamy tylko w zmiennych
# srodowiskowych kontenera. `.env` skopiowany z `.env.example` niesie
# APP_ENV=local i APP_URL=http://localhost — a z tego Laravel buduje adresy
# zasobow. Efektem byla strona bez styli: linki do CSS szly przez `http://`
# i przegladarka blokowala je jako mieszana tresc.
ustaw_env() {
    local klucz="$1" wartosc="$2"
    if grep -q "^${klucz}=" /var/www/.env; then
        sed -i "s|^${klucz}=.*|${klucz}=${wartosc}|" /var/www/.env
    else
        printf '%s=%s\n' "$klucz" "$wartosc" >> /var/www/.env
    fi
}

ustaw_env APP_ENV   "${APP_ENV:-production}"
ustaw_env APP_DEBUG "${APP_DEBUG:-false}"
ustaw_env APP_URL   "${APP_URL:-http://localhost}"
ustaw_env DB_HOST     "${DB_HOST:-mysql}"
ustaw_env DB_PORT     "${DB_PORT:-3306}"
ustaw_env DB_DATABASE "${DB_DATABASE:-techbyte}"
ustaw_env DB_USERNAME "${DB_USERNAME:-techbyte}"
ustaw_env DB_PASSWORD "${DB_PASSWORD}"

if ! grep -q "^APP_KEY=base64:" /var/www/.env; then
    echo "==> Generowanie klucza aplikacji..."
    php artisan key:generate --force --ansi
fi

echo "==> Migracje (przyrostowo)..."
php artisan migrate --force

# Seed tylko przy pustej bazie. `migrate:fresh` swiadomie NIE jest uzywane.
BRAK_DANYCH=$(php -r "
require 'vendor/autoload.php';
\$app = require 'bootstrap/app.php';
\$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
try {
    echo Illuminate\Support\Facades\DB::table('users')->count() === 0 ? 'tak' : 'nie';
} catch (Throwable \$e) {
    echo 'tak';
}
" 2>/dev/null || echo 'nie')

if [ "$BRAK_DANYCH" = "tak" ]; then
    echo "==> Baza pusta — uruchamiam seedery..."
    php artisan db:seed --force || echo "    seedery zglosily blad, pomijam"
else
    echo "==> Dane juz sa — seedery pominiete."
fi

if [ ! -L /var/www/public/storage ]; then
    php artisan storage:link || true
fi

chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Czyscimy PRZED budowaniem cache. `view:cache` tylko dopisuje skompilowane
# widoki i nigdy nie usuwa nieaktualnych — bez tego kroku zmiany w plikach
# .blade.php potrafia byc niewidoczne mimo udanego wdrozenia.
echo "==> Odswiezenie cache..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ TechByte gotowy"
exec "$@"
