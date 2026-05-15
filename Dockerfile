# Gunakan image PHP versi 8.2 (atau sesuaikan dengan versimu)
FROM php:8.2-cli

# Install sistem dasar & Node.js (untuk memproses tampilan CSS/Tailwind)
RUN apt-get update && apt-get install -y zip unzip curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set lokasi kerja di dalam server
WORKDIR /app

# Salin semua file dari laptopmu/GitHub ke dalam server
COPY . .

# Install paket PHP dan Node.js
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Buat file database SQLite (Opsional, mencegah error jika sistem database dipanggil)
RUN mkdir -p database && touch database/database.sqlite

# Perintah untuk menjalankan server
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8000}