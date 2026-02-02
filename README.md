<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<h1 align="center">📚 Sistem Informasi Perpustakaan</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-red?style=flat-square&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat-square&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap" alt="Bootstrap">
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" alt="License">
</p>

<p align="center">
  <b>Sistem manajemen perpustakaan digital yang modern, efisien, dan mudah digunakan</b>
</p>

---

## 📖 Tentang Project

**Ujikom Perpustakaan** adalah sistem informasi manajemen perpustakaan berbasis web yang dibangun menggunakan framework Laravel. Project ini dibuat sebagai bagian dari Uji Kompetensi Keahlian (UKK) dan dirancang untuk memudahkan pengelolaan data perpustakaan secara digital.

Sistem ini menyediakan fitur lengkap untuk manajemen buku, peminjaman, pengembalian, dan administrasi perpustakaan dengan interface yang user-friendly dan responsif.

### 🎯 Tujuan Project
- ✅ Digitalisasi sistem perpustakaan konvensional
- ✅ Mempermudah pencatatan dan monitoring peminjaman buku
- ✅ Otomasi perhitungan denda keterlambatan
- ✅ Menyediakan laporan dan statistik perpustakaan
- ✅ Meningkatkan efisiensi layanan perpustakaan

---

## 📸 Preview Aplikasi

### 🖥️ Dashboard Admin
![Dashboard](./screenshots/dashboard.png)
*Dashboard dengan statistik real-time jumlah buku, anggota, dan transaksi*

### 📚 Halaman Daftar Buku
![Books List](./screenshots/books-list.png)
*Manajemen koleksi buku dengan fitur search dan filter*

### 🔄 Halaman Peminjaman
![Borrowing](./screenshots/borrowing.png)
*Interface peminjaman buku yang mudah dan cepat*

### ↩️ Halaman Pengembalian
![Return](./screenshots/return.png)
*Proses pengembalian dengan kalkulasi denda otomatis*

> 💡 **Note:** Tambahkan folder `screenshots/` dan isi dengan screenshot aplikasi Anda untuk preview yang lebih menarik!

---

## ✨ Fitur Utama

### 👨‍💼 Untuk Admin/Petugas
- ✅ **Dashboard Analytics** - Statistik perpustakaan real-time
- ✅ **Manajemen Buku** - CRUD lengkap data buku dan kategori
- ✅ **Manajemen Anggota** - Registrasi dan pengelolaan data anggota
- ✅ **Pencatatan Peminjaman** - Input data peminjaman dengan validasi
- ✅ **Pengembalian Buku** - Proses return dengan kalkulasi denda otomatis
- ✅ **Sistem Denda** - Perhitungan denda keterlambatan otomatis
- ✅ **Laporan Transaksi** - Riwayat lengkap dengan filter tanggal
- ✅ **Pencarian & Filter** - Cari buku berdasarkan judul, penulis, atau kategori
- ✅ **Manajemen User** - Kelola akses admin dan petugas

### 📚 Untuk Anggota/Siswa
- ✅ **Browse Koleksi** - Lihat semua buku yang tersedia
- ✅ **Pencarian Buku** - Cari buku favorit dengan mudah
- ✅ **Riwayat Peminjaman** - Lihat history peminjaman pribadi
- ✅ **Status Peminjaman** - Monitor buku yang sedang dipinjam
- ✅ **Info Denda** - Notifikasi jika ada denda aktif
- ✅ **Profil Anggota** - Update informasi pribadi

---

## 🛠️ Tech Stack

### Backend
- **Framework:** Laravel 10.x
- **Language:** PHP 8.1+
- **Database:** MySQL 8.0 / MariaDB
- **Authentication:** Laravel Breeze/Sanctum

### Frontend
- **Template Engine:** Blade
- **CSS Framework:** Bootstrap 5.3
- **JavaScript:** Vanilla JS / Alpine.js
- **Icons:** Font Awesome / Bootstrap Icons

### Development Tools
- **Build Tool:** Vite
- **Package Manager:** Composer, NPM
- **Version Control:** Git

---

## 📋 Persyaratan Sistem

### Minimum Requirements
- PHP >= 8.1
- Composer >= 2.0
- MySQL >= 8.0 atau MariaDB >= 10.3
- Node.js >= 16.x & NPM
- Web Server (Apache/Nginx)

### Extensions PHP yang Diperlukan
```
- BCMath
- Ctype
- Fileinfo
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizer
- XML
```

---

## 🚀 Instalasi

### Metode 1: Instalasi Manual (Recommended)

#### 1️⃣ Clone Repository
```bash
git clone https://github.com/kamachiii/ujikom-perpustakaan.git
cd ujikom-perpustakaan
```

#### 2️⃣ Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install NPM dependencies
npm install
```

#### 3️⃣ Konfigurasi Environment
```bash
# Copy file .env.example
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 4️⃣ Konfigurasi Database

Buat database baru:
```sql
CREATE DATABASE ujikom_perpustakaan CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Edit file `.env` dan sesuaikan konfigurasi:
```env
APP_NAME="Perpustakaan Digital"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ujikom_perpustakaan
DB_USERNAME=root
DB_PASSWORD=your_password
```

#### 5️⃣ Migrasi Database & Seeding
```bash
# Jalankan migrasi dan seeder
php artisan migrate --seed

# Atau jika ingin fresh install
php artisan migrate:fresh --seed
```

#### 6️⃣ Setup Storage
```bash
# Create symbolic link untuk storage
php artisan storage:link

# Set permissions (Linux/Mac)
chmod -R 775 storage bootstrap/cache
```

#### 7️⃣ Build Assets
```bash
# Development mode (dengan hot reload)
npm run dev

# Production mode (optimized)
npm run build
```

#### 8️⃣ Jalankan Aplikasi
```bash
# Jalankan development server
php artisan serve

# Atau dengan custom port
php artisan serve --port=8080
```

Aplikasi akan berjalan di `http://localhost:8000`

### Metode 2: Quick Setup (Development)

```bash
# One-liner installation script
git clone https://github.com/kamachiii/ujikom-perpustakaan.git && cd ujikom-perpustakaan && composer install && npm install && cp .env.example .env && php artisan key:generate && php artisan migrate --seed && npm run build && php artisan serve
```

---

## 📊 Database Seeder

Setelah menjalankan `php artisan db:seed`, sistem akan terisi dengan data sample:

### 📦 Data yang Di-generate:

| Tabel | Jumlah Record | Keterangan |
|-------|---------------|------------|
| **Users** | 3 | Admin, Petugas, Anggota |
| **Roles** | 3 | Admin, Petugas, Member |
| **Categories** | 10 | Fiksi, Non-Fiksi, Sains, Sejarah, dll |
| **Books** | 50 | Data buku lengkap dengan cover |
| **Members** | 20 | Data anggota untuk testing |
| **Borrowings** | 15 | Sample transaksi peminjaman |
| **Returns** | 10 | Sample transaksi pengembalian |

### 🔄 Reset Database

Jika ingin reset dan seed ulang:
```bash
# Hard reset dengan data baru
php artisan migrate:fresh --seed

# Atau hanya jalankan seeder tanpa reset
php artisan db:seed
```

### 📝 Custom Seeder

Untuk menambah data custom:
```bash
php artisan make:seeder CustomDataSeeder
php artisan db:seed --class=CustomDataSeeder
```

---

## 🗄️ Struktur Database

Lihat diagram lengkap di [`database_tables.jpeg`](./database_tables.jpeg)

### 📋 Tabel Utama:

```
┌─────────────────┐
│     users       │ ◄──┐
│─────────────────│    │
│ id (PK)         │    │
│ name            │    │
│ email           │    │
│ password        │    │
│ role_id (FK)    │    │
└─────────────────┘    │
                       │
┌─────────────────┐    │
│    categories   │    │
│─────────────────│    │
│ id (PK)         │    │
│ name            │    │
│ description     │    │
└─────────────────┘    │
         │             │
         ▼             │
┌─────────────────┐    │
│     books       │    │
│─────────────────│    │
│ id (PK)         │    │
│ title           │    │
│ author          │    │
│ isbn            │    │
│ category_id(FK) │    │
│ stock           │    │
└─────────────────┘    │
         │             │
         ▼             │
┌─────────────────┐    │
│   borrowings    │    │
│─────────────────│    │
│ id (PK)         │    │
│ book_id (FK)    │    │
│ member_id (FK)  │────┘
│ borrowed_at     │
│ due_date        │
│ status          │
└─────────────────┘
         │
         ▼
┌─────────────────┐
│    returns      │
│─────────────────│
│ id (PK)         │
│ borrowing_id(FK)│
│ returned_at     │
│ fine_amount     │
└─────────────────┘
```

### 🔑 Relasi Tabel:
- **Users** memiliki banyak **Borrowings** (1:N)
- **Books** memiliki banyak **Borrowings** (1:N)
- **Categories** memiliki banyak **Books** (1:N)
- **Borrowings** memiliki satu **Return** (1:1)

---

## 🔐 Kredensial Default

Gunakan kredensial berikut setelah instalasi:

### 👑 Admin
```
Email    : admin@perpustakaan.com
Password : password
Role     : Full Access
```

### 👨‍💼 Petugas
```
Email    : petugas@perpustakaan.com
Password : password
Role     : Manage Books & Transactions
```

### 👤 Anggota
```
Email    : anggota@perpustakaan.com
Password : password
Role     : View & Borrow Books
```

> ⚠️ **PENTING:** Segera ubah semua password default setelah instalasi pertama di production!

```bash
# Ubah password via tinker
php artisan tinker
>>> $user = User::where('email', 'admin@perpustakaan.com')->first();
>>> $user->password = bcrypt('new_secure_password');
>>> $user->save();
```

---

## 🗺️ Alur Sistem

### 📥 Alur Peminjaman Buku

```
┌──────────────┐     ┌──────────────┐     ┌──────────────┐
│   Anggota    │────▶│    Petugas   │────▶│    Sistem    │
│    Datang    │     │   Verifikasi │     │    Input     │
└──────────────┘     └──────────────┘     └──────────────┘
                                                   │
                                                   ▼
┌──────────────┐     ┌──────────────┐     ┌──────────────┐
│    Selesai   │◀────│  Cetak Bukti │◀────│ Cek Stok &   │
│              │     │              │     │   Validasi   │
└──────────────┘     └──────────────┘     └──────────────┘
```

**Step by step:**
1. Anggota datang dan pilih buku yang ingin dipinjam
2. Petugas scan/input ID anggota dan buku
3. Sistem validasi ketersediaan dan status anggota
4. Input tanggal peminjaman dan tanggal jatuh tempo
5. Sistem update stok buku (-1)
6. Generate dan cetak bukti peminjaman
7. Selesai

### 📤 Alur Pengembalian Buku

```
┌──────────────┐     ┌──────────────┐     ┌──────────────┐
│   Anggota    │────▶│    Petugas   │────▶│    Sistem    │
│   Return     │     │  Scan Bukti  │     │  Cek Status  │
└──────────────┘     └──────────────┘     └──────────────┘
                                                   │
                                                   ▼
┌──────────────┐     ┌──────────────┐     ┌──────────────┐
│    Selesai   │◀────│   Bayar &    │◀────│   Hitung     │
│              │     │Update Status │     │    Denda     │
└──────────────┘     └──────────────┘     └──────────────┘
```

**Step by step:**
1. Anggota datang dengan buku yang dipinjam
2. Petugas scan bukti peminjaman
3. Sistem cek keterlambatan (jika ada)
4. Hitung denda (Rp 1.000/hari)
5. Proses pembayaran denda (jika ada)
6. Update status peminjaman & stok buku (+1)
7. Selesai

---

## 📁 Struktur Folder

```
ujikom-perpustakaan/
│
├── 📁 app/
│   ├── Console/           # Artisan commands
│   ├── Exceptions/        # Exception handlers
│   ├── Http/
│   │   ├── Controllers/   # Application controllers
│   │   ├── Middleware/    # HTTP middleware
│   │   └── Requests/      # Form requests
│   └── Models/            # Eloquent models
│
├── 📁 bootstrap/          # Framework bootstrap files
│   └── cache/             # Framework cache
│
├── 📁 config/             # Configuration files
│   ├── app.php
│   ├── database.php
│   └── ...
│
├── 📁 database/
│   ├── factories/         # Model factories
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
│
├── 📁 public/             # Publicly accessible files
│   ├── css/               # Compiled CSS
│   ├── js/                # Compiled JavaScript
│   ├── images/            # Images & assets
│   └── index.php          # Entry point
│
├── 📁 resources/
│   ├── css/               # Source CSS/SASS
│   ├── js/                # Source JavaScript
│   └── views/             # Blade templates
│       ├── layouts/       # Layout templates
│       ├── components/    # Reusable components
│       └── pages/         # Page views
│
├── 📁 routes/             # Application routes
│   ├── web.php            # Web routes
│   ├── api.php            # API routes
│   └── ...
│
├── 📁 storage/            # Storage files
│   ├── app/               # Application storage
│   ├── framework/         # Framework files
│   └── logs/              # Application logs
│
├── 📁 tests/              # Automated tests
│   ├── Feature/           # Feature tests
│   └── Unit/              # Unit tests
│
├── 📄 database_tables.jpeg  # Database diagram
├── 📄 dokumentasi.pdf       # Full documentation
├── 📄 .env.example          # Environment example
├── 📄 composer.json         # PHP dependencies
├── 📄 package.json          # NPM dependencies
├── 📄 vite.config.js        # Vite configuration
└── 📄 README.md             # This file
```

---

## 🎯 Cara Penggunaan

### 1️⃣ Login ke Sistem

1. Buka browser dan akses `http://localhost:8000`
2. Klik tombol **Login**
3. Masukkan email dan password sesuai role Anda
4. Klik **Login**

### 2️⃣ Manajemen Buku (Admin/Petugas)

#### Tambah Buku Baru:
1. Menu **Buku** → **Tambah Buku**
2. Isi form:
   - Judul Buku
   - Pengarang
   - Penerbit
   - ISBN
   - Kategori
   - Tahun Terbit
   - Jumlah Stok
   - Upload Cover (optional)
3. Klik **Simpan**

#### Edit/Hapus Buku:
- Klik icon **Edit** (✏️) untuk mengubah data
- Klik icon **Hapus** (🗑️) untuk menghapus (dengan konfirmasi)

### 3️⃣ Proses Peminjaman

1. Menu **Peminjaman** → **Pinjam Buku**
2. Pilih/Scan ID Anggota
3. Pilih Buku yang akan dipinjam
4. Tentukan tanggal jatuh tempo (default: 7 hari)
5. Klik **Proses Peminjaman**
6. Cetak bukti peminjaman

### 4️⃣ Proses Pengembalian

1. Menu **Pengembalian** → **Kembalikan Buku**
2. Scan/Input kode peminjaman
3. Sistem otomatis cek keterlambatan
4. Jika terlambat, sistem hitung denda
5. Proses pembayaran (jika ada denda)
6. Klik **Selesaikan Pengembalian**

### 5️⃣ Lihat Laporan

1. Menu **Laporan** → Pilih jenis laporan:
   - Laporan Peminjaman
   - Laporan Pengembalian
   - Laporan Denda
   - Statistik Buku Terpopuler
2. Filter berdasarkan tanggal (optional)
3. Klik **Tampilkan** atau **Export PDF/Excel**

---

## 🧪 Testing

### Menjalankan Tests

```bash
# Run semua tests
php artisan test

# Run specific test file
php artisan test tests/Feature/BookTest.php

# Run dengan coverage report
php artisan test --coverage

# Run dengan filter nama test
php artisan test --filter testUserCanBorrowBook
```

### Membuat Test Baru

```bash
# Feature test
php artisan make:test BookControllerTest

# Unit test
php artisan make:test BookModelTest --unit
```

### Test Database

Gunakan database testing terpisah:

```env
# .env.testing
DB_CONNECTION=mysql
DB_DATABASE=ujikom_perpustakaan_testing
```

---

## 🔄 Update & Maintenance

### Update dari Repository

```bash
# Backup dulu
php artisan backup:run

# Pull update terbaru
git pull origin master

# Update dependencies
composer update
npm update

# Jalankan migrasi baru (jika ada)
php artisan migrate

# Clear semua cache
php artisan optimize:clear
```

### Clear Cache

```bash
# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Clear compiled views
php artisan view:clear

# Clear route cache
php artisan route:clear

# Atau clear semua sekaligus
php artisan optimize:clear
```

### Optimize untuk Production

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### Backup Database

```bash
# Manual backup
mysqldump -u root -p ujikom_perpustakaan > backup_$(date +%Y%m%d).sql

# Restore backup
mysql -u root -p ujikom_perpustakaan < backup_20260202.sql
```

---

## 🌐 Deployment

### 🖥️ Deployment ke Shared Hosting

#### 1. Persiapan File
```bash
# Build production assets
npm run build

# Optimize untuk production
composer install --optimize-autoloader --no-dev

# Zip semua file KECUALI:
# - node_modules/
# - .git/
# - .env
```

#### 2. Upload & Setup

1. **Upload** semua file ke hosting via FTP/cPanel File Manager
2. **Pindahkan** isi folder `public/` ke `public_html/`
3. **Edit** `public_html/index.php`:

```php
// Ubah path ini
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Menjadi (sesuaikan dengan struktur Anda)
require __DIR__.'/../ujikom-perpustakaan/vendor/autoload.php';
$app = require_once __DIR__.'/../ujikom-perpustakaan/bootstrap/app.php';
```

#### 3. Setup Database

1. Buat database baru di cPanel
2. Import file SQL atau jalankan migration
3. Update `.env`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### 4. Set Permissions

Via cPanel Terminal atau FTP:
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### ☁️ Deployment ke VPS/Cloud (Ubuntu)

#### 1. Install Dependencies

```bash
# Update sistem
sudo apt update && sudo apt upgrade -y

# Install PHP 8.1 dan extensions
sudo apt install php8.1 php8.1-fpm php8.1-mysql php8.1-mbstring php8.1-xml php8.1-bcmath php8.1-curl -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt install nodejs -y

# Install MySQL
sudo apt install mysql-server -y

# Install Nginx
sudo apt install nginx -y
```

#### 2. Clone & Setup Project

```bash
# Clone repository
cd /var/www
sudo git clone https://github.com/kamachiii/ujikom-perpustakaan.git
cd ujikom-perpustakaan

# Set ownership
sudo chown -R www-data:www-data /var/www/ujikom-perpustakaan

# Install dependencies
sudo -u www-data composer install --optimize-autoloader --no-dev
sudo -u www-data npm install && npm run build

# Setup environment
sudo -u www-data cp .env.example .env
sudo -u www-data php artisan key:generate

# Set permissions
sudo chmod -R 775 storage bootstrap/cache
```

#### 3. Setup Database

```bash
# Masuk ke MySQL
sudo mysql

# Buat database dan user
CREATE DATABASE ujikom_perpustakaan;
CREATE USER 'perpus_user'@'localhost' IDENTIFIED BY 'strong_password';
GRANT ALL PRIVILEGES ON ujikom_perpustakaan.* TO 'perpus_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;

# Update .env
sudo nano .env

# Jalankan migration
php artisan migrate --force
```

#### 4. Configure Nginx

```bash
# Buat config file
sudo nano /etc/nginx/sites-available/perpustakaan
```

Paste konfigurasi ini:

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/ujikom-perpustakaan/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Aktifkan site:

```bash
sudo ln -s /etc/nginx/sites-available/perpustakaan /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

#### 5. Setup SSL dengan Let's Encrypt

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx -y

# Dapatkan SSL certificate
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com

# Auto renewal
sudo certbot renew --dry-run
```

#### 6. Setup Supervisor (untuk Queue)

```bash
sudo apt install supervisor -y
sudo nano /etc/supervisor/conf.d/perpustakaan-worker.conf
```

```ini
[program:perpustakaan-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/ujikom-perpustakaan/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/ujikom-perpustakaan/storage/logs/worker.log
```

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start perpustakaan-worker:*
```

---

## 🔐 Keamanan

### ✅ Security Checklist Production

- [ ] Set `APP_DEBUG=false` di `.env`
- [ ] Gunakan HTTPS (SSL Certificate)
- [ ] Ubah semua password default
- [ ] Set strong `APP_KEY`
- [ ] Disable directory listing
- [ ] Set proper file permissions (644 files, 755 folders)
- [ ] Enable CSRF protection (default di Laravel)
- [ ] Implement rate limiting untuk login
- [ ] Regular backup database
- [ ] Update dependencies secara berkala
- [ ] Monitor error logs
- [ ] Gunakan environment variables untuk credentials
- [ ] Enable firewall (UFW di Ubuntu)
- [ ] Disable PHP functions berbahaya

### 🔒 File Permissions (Linux)

```bash
# Ownership
sudo chown -R www-data:www-data /var/www/ujikom-perpustakaan

# Directories
sudo find /var/www/ujikom-perpustakaan -type d -exec chmod 755 {} \;

# Files
sudo find /var/www/ujikom-perpustakaan -type f -exec chmod 644 {} \;

# Storage & Cache
sudo chmod -R 775 storage bootstrap/cache
```

### 🛡️ Rate Limiting

Sudah dikonfigurasi di `app/Http/Kernel.php`:

```php
// Login rate limit: 5 attempts per minute
'throttle:5,1'
```

### 🔐 Best Practices

```env
# .env production example
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Strong password & username
DB_USERNAME=perpus_secure_user_2026
DB_PASSWORD=Very$tr0ng!P@ssw0rd#2026
```

---

## 🔍 Troubleshooting

### ❌ Error: "Please provide a valid cache path"

**Solusi:**
```bash
php artisan cache:clear
php artisan config:cache
```

### ❌ Error: "SQLSTATE[HY000] [1049] Unknown database"

**Solusi:**
```bash
# Buat database dulu
mysql -u root -p
CREATE DATABASE ujikom_perpustakaan;
EXIT;

# Lalu jalankan migration
php artisan migrate
```

### ❌ Error: "Class 'App\...' not found"

**Solusi:**
```bash
composer dump-autoload
php artisan clear-compiled
php artisan optimize
```

### ❌ Halaman Blank / Error 500

**Solusi:**
```bash
# Clear all cache
php artisan optimize:clear

# Set permissions
chmod -R 775 storage bootstrap/cache

# Check logs
tail -f storage/logs/laravel.log
```

### ❌ Error: "The stream or file could not be opened"

**Solusi:**
```bash
# Set proper permissions
sudo chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

### ❌ Error: "No application encryption key"

**Solusi:**
```bash
php artisan key:generate
```

### ❌ Error: "Vite manifest not found"

**Solusi:**
```bash
npm run build
```

### ❌ Error: "CSRF token mismatch"

**Solusi:**
```bash
php artisan config:clear
php artisan cache:clear
# Clear browser cookies
```

### ❌ Assets tidak load (CSS/JS 404)

**Solusi:**
```bash
# Re-create symbolic link
php artisan storage:link

# Build assets
npm run build

# Check .htaccess (Apache) atau nginx config
```

### 📝 Cara Debug Error

```bash
# Enable debug mode (development only!)
APP_DEBUG=true

# Tail log real-time
tail -f storage/logs/laravel.log

# Check PHP errors
tail -f /var/log/php8.1-fpm.log

# Check Nginx errors
tail -f /var/log/nginx/error.log
```

---

## 🎨 Customization

### 🎨 Mengganti Theme Colors

Edit `resources/css/app.css`:

```css
:root {
    --primary-color: #4F46E5;
    --secondary-color: #10B981;
    --danger-color: #EF4444;
    --bg-color: #F3F4F6;
}
```

Atau custom Bootstrap variables di `vite.config.js`:

```javascript
export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    $primary: #4F46E5;
                    $success: #10B981;
                `
            }
        }
    }
});
```

### 🖼️ Mengganti Logo

1. Letakkan logo baru di `public/images/logo.png`
2. Edit di layout: `resources/views/layouts/app.blade.php`

```html
<img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
```

### ⚙️ Menambah Fitur Baru

#### 1. Buat Model & Migration

```bash
php artisan make:model Publisher -m
```

#### 2. Edit Migration

```php
// database/migrations/xxxx_create_publishers_table.php
public function up()
{
    Schema::create('publishers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('address')->nullable();
        $table->timestamps();
    });
}
```

#### 3. Buat Controller

```bash
php artisan make:controller PublisherController --resource
```

#### 4. Tambah Routes

```php
// routes/web.php
Route::resource('publishers', PublisherController::class);
```

#### 5. Buat Views

```bash
mkdir resources/views/publishers
touch resources/views/publishers/index.blade.php
```

### 🔧 Custom Configuration

Buat config file baru:

```bash
php artisan make:config library
```

```php
// config/library.php
return [
    'borrow_duration' => 7, // hari
    'fine_per_day' => 1000, // rupiah
    'max_borrow' => 3, // maksimal buku
];
```

Gunakan di code:

```php
$duration = config('library.borrow_duration');
```

### 📧 Setup Email Notifications

Edit `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@perpustakaan.com
MAIL_FROM_NAME="Perpustakaan Digital"
```

Buat notification:

```bash
php artisan make:notification BookDueNotification
```

---

## 🗺️ Roadmap

### ✅ Version 1.0 (Current - Released)
- ✅ CRUD Buku, Kategori, Anggota
- ✅ Sistem Peminjaman & Pengembalian
- ✅ Kalkulasi Denda Otomatis
- ✅ Dashboard dengan Statistik
- ✅ Laporan Transaksi
- ✅ Multi-role Authentication (Admin, Petugas, Anggota)
- ✅ Responsive Design

### 🚧 Version 1.1 (In Progress)
- [ ] Barcode Scanner Integration
- [ ] Export Laporan ke PDF/Excel
- [ ] Email Notification (reminder pengembalian)
- [ ] Sistem Reservasi Buku
- [ ] QR Code untuk membership card
- [ ] Advanced Search & Filters
- [ ] Dashboard Analytics lebih detail
- [ ] Dark Mode

### 🔮 Version 1.2 (Planned Q2 2026)
- [ ] RESTful API untuk Mobile App
- [ ] Integration dengan sistem pembayaran (Midtrans/Xendit)
- [ ] Multi-language support (ID, EN)
- [ ] Notification via WhatsApp
- [ ] Book recommendation system
- [ ] Reading history & statistics untuk anggota

### 🚀 Version 2.0 (Future - Q4 2026)
- [ ] Multi-branch library support
- [ ] E-book management & digital library
- [ ] Member rating & review system
- [ ] Forum/Discussion untuk book club
- [ ] Integration dengan perpusnas (ISBN lookup)
- [ ] Mobile App (Flutter/React Native)
- [ ] AI-powered book recommendation
- [ ] Inventory management advanced

### 💡 Feature Requests

Punya ide untuk fitur baru? [Buat issue baru](https://github.com/kamachiii/ujikom-perpustakaan/issues/new) dengan label `feature-request`!

---

## 🌐 Demo Online

### 🔗 Live Demo

> **Coming Soon!** Demo online sedang dalam tahap persiapan.

**Test Credentials (Demo):**
```
Admin     : demo-admin@perpustakaan.com / demo123
Petugas   : demo-petugas@perpustakaan.com / demo123
Anggota   : demo-anggota@perpustakaan.com / demo123
```

> ⚠️ **Note:** Data demo akan direset setiap 24 jam

---

## 📚 Dokumentasi

### 📖 Dokumentasi Lengkap

Dokumentasi detail tersedia di:
- **PDF:** [`dokumentasi.pdf`](./dokumentasi.pdf) - Panduan lengkap pengguna dan admin
- **Database Diagram:** [`database_tables.jpeg`](./database_tables.jpeg) - ERD database

### 🎓 Tutorial Video

> Coming soon! Tutorial video akan ditambahkan di YouTube channel kami.

### 📝 Wiki

Dokumentasi teknis lebih detail bisa dilihat di [GitHub Wiki](https://github.com/kamachiii/ujikom-perpustakaan/wiki) (coming soon)

---

## 🤝 Kontribusi

Kontribusi untuk project ini sangat diapresiasi! 🎉

### Cara Berkontribusi

1. **Fork** repository ini
2. **Clone** fork Anda:
   ```bash
   git clone https://github.com/YOUR_USERNAME/ujikom-perpustakaan.git
   ```
3. **Buat branch** untuk fitur baru:
   ```bash
   git checkout -b feature/AmazingFeature
   ```
4. **Commit** perubahan Anda:
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
5. **Push** ke branch:
   ```bash
   git push origin feature/AmazingFeature
   ```
6. **Buat Pull Request** di GitHub

### Coding Standards

Project ini mengikuti:
- [PSR-12](https://www.php-fig.org/psr/psr-12/) coding standard
- Laravel best practices
- Clean code principles

```bash
# Check code style
./vendor/bin/phpcs

# Fix code style
./vendor/bin/phpcbf
```

### Reporting Bugs

Jika menemukan bug, silakan [buat issue](https://github.com/kamachiii/ujikom-perpustakaan/issues/new) dengan:
- ✅ Deskripsi jelas tentang bug
- ✅ Steps to reproduce
- ✅ Expected vs actual behavior
- ✅ Screenshots (jika perlu)
- ✅ Environment details (PHP version, OS, dll)

---

## 🌿 Git Branch Strategy

```
master (production-ready)
  │
  ├── development (active development)
  │     │
  │     ├── feature/barcode-scanner
  │     ├── feature/email-notification
  │     └── feature/export-pdf
  │
  └── hotfix/security-patch
```

- **`master`** - Production-ready code
- **`development`** - Active development
- **`feature/*`** - New features
- **`hotfix/*`** - Urgent fixes
- **`bugfix/*`** - Bug fixes

---

## 📄 Lisensi

Project ini dilisensikan di bawah **MIT License**.

```
MIT License

Copyright (c) 2026 kamachiii

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

Lihat [LICENSE](./LICENSE) untuk detail lengkap.

---

## 📊 Stats & Metrics

![GitHub repo size](https://img.shields.io/github/repo-size/kamachiii/ujikom-perpustakaan?style=flat-square)
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/kamachiii/ujikom-perpustakaan?style=flat-square)
![GitHub last commit](https://img.shields.io/github/last-commit/kamachiii/ujikom-perpustakaan?style=flat-square)
![GitHub issues](https://img.shields.io/github/issues/kamachiii/ujikom-perpustakaan?style=flat-square)
![GitHub pull requests](https://img.shields.io/github/issues-pr/kamachiii/ujikom-perpustakaan?style=flat-square)
![GitHub stars](https://img.shields.io/github/stars/kamachiii/ujikom-perpustakaan?style=social)

---

## 👨‍💻 Developer

<div align="center">

### Developed with ❤️ by **kamachiii**

[![GitHub](https://img.shields.io/badge/GitHub-kamachiii-181717?style=for-the-badge&logo=github)](https://github.com/kamachiii)
[![Repository](https://img.shields.io/badge/Repo-ujikom--perpustakaan-4F46E5?style=for-the-badge&logo=github)](https://github.com/kamachiii/ujikom-perpustakaan)

</div>

### 🌟 Contributors

Terima kasih kepada semua yang telah berkontribusi!

<!-- ALL-CONTRIBUTORS-LIST:START -->
<!-- Akan otomatis terisi ketika ada contributors -->
<!-- ALL-CONTRIBUTORS-LIST:END -->

---

## 📞 Support & Contact

### 💬 Butuh Bantuan?

- 📧 **Email:** support@perpustakaan.com (coming soon)
- 🐛 **Bug Report:** [GitHub Issues](https://github.com/kamachiii/ujikom-perpustakaan/issues)
- 💡 **Feature Request:** [GitHub Issues](https://github.com/kamachiii/ujikom-perpustakaan/issues/new?labels=enhancement)
- 📖 **Documentation:** [Wiki](https://github.com/kamachiii/ujikom-perpustakaan/wiki)
- 💬 **Discussions:** [GitHub Discussions](https://github.com/kamachiii/ujikom-perpustakaan/discussions)

### 🔗 Links

- **Repository:** [github.com/kamachiii/ujikom-perpustakaan](https://github.com/kamachiii/ujikom-perpustakaan)
- **Issues:** [github.com/kamachiii/ujikom-perpustakaan/issues](https://github.com/kamachiii/ujikom-perpustakaan/issues)
- **Pull Requests:** [github.com/kamachiii/ujikom-perpustakaan/pulls](https://github.com/kamachiii/ujikom-perpustakaan/pulls)

---

## 🙏 Acknowledgments

Terima kasih kepada:

- **Laravel Team** - Framework yang luar biasa
- **Bootstrap Team** - UI Framework
- **Font Awesome** - Icon library
- **Stack Overflow Community** - Solusi berbagai masalah
- **GitHub** - Platform untuk hosting code
- **Semua Contributors** - Yang telah membantu mengembangkan project ini

---

## 📝 Changelog

### [1.0.0] - 2026-02-02

#### Added
- ✅ Initial release
- ✅ Complete CRUD for Books, Categories, Members
- ✅ Borrowing & Return system
- ✅ Automatic fine calculation
- ✅ Multi-role authentication (Admin, Petugas, Anggota)
- ✅ Dashboard with statistics
- ✅ Transaction reports
- ✅ Responsive design
- ✅ Complete documentation

#### Fixed
- 🐛 N/A (initial release)

#### Changed
- 🔄 N/A (initial release)

---

<div align="center">

### ⭐ Jika project ini membantu, jangan lupa kasih **Star** ya! ⭐

[![Star this repo](https://img.shields.io/github/stars/kamachiii/ujikom-perpustakaan?style=social)](https://github.com/kamachiii/ujikom-perpustakaan)

---

**Made with ❤️ for Uji Kompetensi Keahlian**

**© 2026 kamachiii | All Rights Reserved**

---

*"Membaca adalah jendela dunia, perpustakaan adalah pintunya"* 📚

</div>
