# Buka Gerai
Ini adalah projek website sederhana yang dibuat berdasarkan tugas mata pelajaran Pemrograman Web di SMK saya. Web ini dibuat menggunakan framework PHP yaitu Laravel.
## Installation
Pastikan teman-teman sudah menginstall Composer sebelum ke step berikutnya.

1. Buat Database baru dengan nama ”bukagerai”
2. Masuk ke direktori projeknya dan generate App Key kalian sendiri.
```bash
php artisan key:generate
```
3. Install semua package/library yang diperlukan menggunakan perintah composer.
```bash
composer install
```
4. Ubah nama file .env.example menjadi .env
5. Jalankan artisan migrate, untuk migrasi database.
```bash
php artisan migrate
```
6. dan jalankan artisan serve
```bash
php artisan serve
```
