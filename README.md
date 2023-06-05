# Buka Gerai
Ini adalah projek website sederhana yang dibuat berdasarkan tugas mata pelajaran Pemrograman Web di SMK saya. Web ini dibuat menggunakan framework PHP yaitu Laravel.
## Installation
Pastikan teman-teman sudah menginstall Composer sebelum ke step berikutnya.
1. Membuat App Key kalian sendiri.
```bash
php artisan key:generate
```
2. Install semua package/library yang diperlukan menggunakan perintah artisan install.
```bash
composer install
```
3. Buat Database baru dengan nama ”bukagerai”
4. Jalankan artisan migrate, untuk migrasi database.
```bash
php artisan migrate
```
5. Kemudian masuk ke direktori projeknya, dan jalankan artisan serve
```bash
php artisan serve
```
