#!/bin/bash

set -e

echo "🚀 TechByte Laravel Application - Starting initialization..."

# Wait for MySQL to be ready
echo "⏳ Waiting for MySQL Database to be ready..."
until php -r "
\$connection = new PDO('mysql:host=mysql;port=3306', 'sklep', 'admin');
echo 'Connected successfully';
" > /dev/null 2>&1; do
  echo "⏳ MySQL is unavailable - sleeping"
  sleep 3
done

echo "✅ MySQL Database is ready!"

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
cd /var/www
rm -f composer.lock
composer install --no-interaction --prefer-dist --optimize-autoloader

# Create .env file if it doesn't exist
if [ ! -f /var/www/.env ]; then
    echo "📝 Creating .env file from .env.example..."
    cp /var/www/.env.example /var/www/.env
fi

# Generate application key if not set
if ! grep -q "APP_KEY=base64:" /var/www/.env 2>/dev/null; then
    echo "🔑 Generating application key..."
    php artisan key:generate --ansi
fi

# Clear cache
echo "🧹 Clearing cache..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run fresh migrations with seed (like start.bat)
echo "📊 Running fresh migrations with seeders..."
php artisan migrate:fresh --seed --force

# Create storage link
echo "🔗 Creating storage link..."
if [ ! -L /var/www/public/storage ]; then
    php artisan storage:link
fi

# Ensure proper permissions for storage and bootstrap/cache
echo "🔒 Setting storage permissions..."
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Fix permissions for uploaded images
echo "🖼️  Setting image permissions..."
if [ -d "/var/www/storage/app/public/images" ]; then
    chown -R www-data:www-data /var/www/storage/app/public/images
    chmod -R 755 /var/www/storage/app/public/images
fi
if [ -d "/var/www/storage/app/public/img" ]; then
    chown -R www-data:www-data /var/www/storage/app/public/img  
    chmod -R 755 /var/www/storage/app/public/img
fi
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Copy product images if they exist in storage
echo "📸 Setting up product images..."
if [ -d "/var/www/storage/app/public/products" ]; then
    echo "✅ Product images directory found"
else
    mkdir -p /var/www/storage/app/public/products
    echo "📁 Created products directory"
fi

echo "✅ Application initialization complete!"
echo "🌐 Application is ready at http://localhost:8080"

# Execute the main command (php-fpm)
exec "$@"
