# Portofolio Laravel

Proyek ini adalah aplikasi portofolio sederhana berbasis Laravel. Halaman utama menampilkan view `portofolio.index` dengan styling dari `public/css/portofolio.css`.

## Prasyarat
- PHP 8.2+ dengan ekstensi yang diperlukan Laravel
- [Composer](https://getcomposer.org/) untuk mengelola dependensi PHP
- [Node.js](https://nodejs.org/) & npm untuk mengelola aset front-end (opsional jika hanya menggunakan berkas CSS statis di `public/`)
- Database (MySQL/PostgreSQL/SQLite, dsb) jika Anda menambahkan fitur yang memerlukan penyimpanan data

## Langkah instalasi
1. Kloning repositori dan masuk ke direktori proyek:
   ```bash
   git clone <repo-url>
   cd portofolio
   ```
2. Salin berkas environment dan sesuaikan kredensial:
   ```bash
   cp .env.example .env
   # edit .env sesuai kebutuhan
   ```
3. Pasang dependensi PHP:
   ```bash
   composer install
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. (Opsional) Pasang dependensi front-end dan build aset:
   ```bash
   npm install
   npm run build   # atau npm run dev untuk pengembangan
   ```

## Menjalankan aplikasi
- Jalankan server pengembangan Laravel:
  ```bash
  php artisan serve
  ```
- Buka `http://localhost:8000` di peramban. Jika halaman menampilkan judul "Test Portofolio", maka view sudah dimuat dengan benar.

## Struktur utama
- `routes/web.php` – mendefinisikan route ke view `portofolio.index`.
- `resources/views/portofolio/index.blade.php` – konten halaman portofolio.
- `public/css/portofolio.css` – styling statis untuk halaman.

## Troubleshooting
- **Vendor tidak ditemukan / artisan gagal jalan**: pastikan langkah `composer install` sudah berhasil sehingga direktori `vendor/` tersedia.
- **Aset tidak ter-load**: pastikan `public/css/portofolio.css` ada atau jalankan build front-end jika mengandalkan Vite.
- **Konfigurasi environment**: cek variabel di `.env` (APP_URL, DB_*, dsb) terutama jika menggunakan fitur tambahan yang memerlukan database.