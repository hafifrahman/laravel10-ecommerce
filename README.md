### Requirements

- PHP 8.1+
- Composer
- Node.js & NPM (PNPM, YARN)
- MySQL 8.0+ (sqlite, etc)
- Web server (Apache/Nginx)

### Installation
```bash
git clone https://github.com/hafifrahman/laravel10-ecommerce.git
cd laravel10-ecommerce

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Edit .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Create storage link
php artisan storage:link

# Compile assets
npm run dev

# For production
npm run build

# Start Server
php artisan serve

# Open in browser
http://localhost:8000
```

### Tamat