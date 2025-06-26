# Laravel Profil Perusahaan

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Tentang Proyek

Aplikasi ini adalah sistem profil perusahaan berbasis Laravel, dibuat untuk menampilkan informasi perusahaan secara dinamis dan profesional.

### Fitur:
- Manajemen data profil perusahaan
- Halaman dinamis (Tentang Kami, Layanan, Kontak)
- Desain responsif dan mudah dikembangkan
- Menggunakan Blade, Routing, dan MVC Laravel
- Struktur bersih dan siap untuk dikembangkan lebih lanjut

## Requirements

- PHP >= 8.1
- Composer
- MySQL (atau database lain)
- Node.js dan npm (untuk frontend jika pakai Vite/Tailwind)

## Instalasi

```bash
git clone https://github.com/Fadayen/laravel-profil-perusahaan.git
cd laravel-profil-perusahaan
composer install
cp .env.example .env
php artisan key:generate
