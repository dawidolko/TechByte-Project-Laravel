# 🐳 Docker Setup dla TechByte Laravel Project

Automatyczne uruchomienie projektu Laravel z użyciem Docker Compose.

## 📋 Wymagania

- Docker Desktop (zainstalowany i uruchomiony)
- Docker Compose (wersja 3.8+)
- Minimum 2GB wolnej pamięci RAM
- Minimum 5GB wolnego miejsca na dysku

## 🚀 Szybki Start

### 1. Przygotowanie środowiska

Przejdź do katalogu z narzędziami Docker:

```bash
cd .tools/docker
```

### 2. Stwórz plik .env dla aplikacji

Jeśli nie istnieje plik `.env` w katalogu `backend-clear-laravel`, skopiuj przykładowy:

```bash
cp ../../backend-clear-laravel/.env.example ../../backend-clear-laravel/.env
```

### 3. Uruchom projekt

```bash
docker compose up -d
```

Przy pierwszym uruchomieniu proces może potrwać 5-10 minut, ponieważ:

- Pobierane są obrazy Docker (MySQL ~200MB, PHP, Nginx)
- Instalowane są rozszerzenia PHP
- Instalowane są zależności Composer
- Uruchamiana jest baza danych MySQL
- Wykonywane są migracje bazy danych
- Ładowane są dane testowe (seedery)

### 4. Sprawdź status kontenerów

```bash
docker-compose ps
```

Wszystkie kontenery powinny mieć status `Up` lub `healthy`.

### 5. Monitoruj logi inicjalizacji

```bash
docker compose logs -f app
```

Poczekaj aż zobaczysz komunikat:

```
✅ Application initialization complete!
🌐 Application is ready at http://localhost:8080
```

### 6. Otwórz aplikację

Aplikacja jest dostępna pod adresem: **http://localhost:8080**

## 🏗️ Architektura

Projekt składa się z 3 kontenerów:

### 1. **mysql** - Baza danych MySQL

- **Obraz**: `mysql:8.0`
- **Port**: `3307` (zewnętrzny) → `3306` (wewnętrzny)
- **Baza danych**: `sklepinternetowy`
- **Użytkownik**: `sklep`
- **Hasło**: `admin`
- **Root hasło**: `admin`

### 2. **app** - Aplikacja Laravel (PHP-FPM)

- **PHP**: 8.2-fpm
- **Rozszerzenia**: PDO_MySQL, GD, BCMath, Mbstring
- **Composer**: Najnowsza wersja

### 3. **nginx** - Serwer WWW

- **Obraz**: `nginx:alpine`
- **Port**: `8080` → `80`

## 🎯 Automatyczne procesy inicjalizacyjne

Przy starcie kontenera `app` automatycznie wykonywane są:

1. ✅ Oczekiwanie na gotowość bazy danych MySQL
2. ✅ Generowanie klucza aplikacji (`APP_KEY`)
3. ✅ Czyszczenie cache'u
4. ✅ Wykonanie migracji bazy danych
5. ✅ Załadowanie danych testowych (seeders)
6. ✅ Utworzenie linku symbolicznego dla storage
7. ✅ Ustawienie odpowiednich uprawnień dla katalogów
8. ✅ Przygotowanie katalogów na zdjęcia produktów

## 📝 Przydatne komendy

### Zatrzymanie kontenerów

```bash
docker compose stop
```

### Uruchomienie zatrzymanych kontenerów

```bash
docker compose start
```

### Całkowite zatrzymanie i usunięcie kontenerów

```bash
docker compose down
```

### Usunięcie kontenerów wraz z woluminami (⚠️ usuwa dane z bazy!)

```bash
docker compose down -v
```

### Restart konkretnego kontenera

```bash
docker compose restart app
docker compose restart mysql
docker compose restart nginx
```

### Wyświetlenie logów

```bash
# Wszystkie logi
docker compose logs

# Logi konkretnego kontenera
docker compose logs app
docker compose logs mysql
docker compose logs nginx

# Podążanie za logami w czasie rzeczywistym
docker compose logs -f app
```

### Wejście do kontenera (bash)

```bash
# Aplikacja Laravel
docker compose exec app bash

# Baza danych MySQL
docker compose exec mysql bash
```

### Artisan Commands w kontenerze

```bash
# Ponowne uruchomienie migracji
docker compose exec app php artisan migrate:fresh --seed

# Wyczyszczenie cache
docker compose exec app php artisan cache:clear

# Lista routów
docker compose exec app php artisan route:list

# Tinker (interaktywna konsola)
docker compose exec app php artisan tinker
```

### Połączenie z bazą MySQL

```bash
docker compose exec mysql mysql -u sklep -padmin sklepinternetowy
```

### Rebuild obrazu (po zmianach w Dockerfile)

```bash
docker compose build --no-cache
docker compose up -d
```

## 🔧 Rozwiązywanie problemów

### Problem: MySQL nie startuje

**Rozwiązanie**:

```bash
docker compose down -v
docker compose up -d
```

### Problem: Błędy uprawnień do plików

**Rozwiązanie**:

```bash
docker compose exec app chown -R www-data:www-data /var/www/storage
docker compose exec app chmod -R 775 /var/www/storage
```

### Problem: Aplikacja zwraca 502 Bad Gateway

**Przyczyna**: PHP-FPM nie działa poprawnie

**Rozwiązanie**:

```bash
docker compose logs app
docker compose restart app
```

### Problem: Nie można połączyć się z bazą danych

**Rozwiązanie**:

**Rozwiązanie**:

1. Sprawdź czy MySQL jest healthy:

```bash
docker compose ps
```

2. Sprawdź logi MySQL:

```bash
docker compose logs mysql
```

3. Zrestartuj kontener MySQL:

```bash
docker compose restart mysql
```

### Problem: Brak danych po seedowaniu

**Rozwiązanie**:

```bash
docker compose exec app php artisan migrate:fresh --seed
```

## 📊 Konfiguracja środowiska

Plik `.env` w `backend-clear-laravel` powinien zawierać:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=sklepinternetowy
DB_USERNAME=sklep
DB_PASSWORD=admin
```

Inne zmienne środowiskowe można modyfikować według potrzeb.

## 🎨 Dostęp do aplikacji

- **Frontend/API**: http://localhost:8080
- **MySQL Database**: `localhost:3307`
- **Baza danych**: `sklepinternetowy`

## 📦 Ładowanie zdjęć produktów

Zdjęcia produktów powinny być umieszczone w:

```
backend-clear-laravel/storage/app/public/products/
```

Po umieszczeniu plików, wykonaj:

```bash
docker compose exec app php artisan storage:link
```

Zdjęcia będą dostępne pod:

```
http://localhost:8080/storage/products/nazwa_pliku.jpg
```

## 🔐 Dane dostępowe

### Baza danych MySQL

- **Host**: `localhost:3307` (z hosta) lub `mysql:3306` (z kontenera)
- **Port**: `3307` (zewnętrzny) / `3306` (wewnętrzny)
- **Baza danych**: `sklepinternetowy`
- **Username**: `sklep`
- **Password**: `admin`

### Root User MySQL (dla administracji)

- **Username**: `root`
- **Password**: `admin`

## 💡 Wskazówki

1. **Pierwsze uruchomienie jest najdłuższe** - kolejne starty będą znacznie szybsze
2. **MySQL wymaga chwili na inicjalizację** - poczekaj 30-60 sekund po uruchomieniu
3. **Woluminy Docker przechowują dane** - dane przetrwają restart kontenerów
4. **Logi są Twoim przyjacielem** - zawsze sprawdzaj logi przy problemach
5. **Composer cache** - zależności są instalowane wewnątrz obrazu, nie musisz instalować lokalnie

## 🆘 Wsparcie

W razie problemów:

1. Sprawdź logi: `docker compose logs -f`
2. Sprawdź status: `docker compose ps`
3. Zobacz dokumentację MySQL Docker: https://hub.docker.com/_/mysql
4. Zobacz dokumentację Laravel: https://laravel.com/docs

## 📝 Licencja

Ten projekt jest częścią TechByte Project i podlega tej samej licencji co projekt główny.
