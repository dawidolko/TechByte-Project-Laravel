#!/bin/bash
# TechByte - production container startup.
#
# Separate file from `entrypoint.sh`, which is for local work. That one runs
# `migrate:fresh --seed` and deletes `composer.lock` - in production this would
# mean wiping the database and re-resolving dependencies on EVERY container
# restart. Here migrations are incremental, and the seed runs only when the
# database is still empty.
set -e

cd /var/www

echo "==> Waiting for the database..."
until php -r "new PDO('mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));" >/dev/null 2>&1; do
    sleep 3
done
echo "    database is responding."

if [ ! -f /var/www/.env ]; then
    echo "==> Creating .env from .env.example..."
    cp /var/www/.env.example /var/www/.env
fi

if [ ! -d /var/www/vendor ] || [ ! -f /var/www/vendor/autoload.php ]; then
    echo "==> Installing dependencies (composer install, lockfile untouched)..."
    composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
fi

# Production values are written to `.env`, not left only in the container's
# environment variables. A `.env` copied from `.env.example` carries
# APP_ENV=local and APP_URL=http://localhost - and Laravel builds asset URLs
# from that. The result was a page without styles: CSS links went over
# `http://` and the browser blocked them as mixed content.
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
    echo "==> Generating the application key..."
    php artisan key:generate --force --ansi
fi

echo "==> Migrations (incremental)..."
php artisan migrate --force

# Seed only on an empty database. `migrate:fresh` is deliberately NOT used.
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
    echo "==> Database empty, running seeders..."
    php artisan db:seed --force || echo "    seeders reported an error, skipping"
else
    echo "==> Data already present, seeders skipped."
fi

if [ ! -L /var/www/public/storage ]; then
    php artisan storage:link || true
fi

chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Clear BEFORE building the cache. `view:cache` only adds compiled views and
# never removes stale ones - without this step, changes to .blade.php files
# can stay invisible despite a successful deployment.
echo "==> Refreshing cache..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ TechByte ready"
exec "$@"
