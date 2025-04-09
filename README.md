```markdown
# Laravel Auth with Socialite (Google, GitHub, Facebook) & Mailtrap

## 📌 Deskripsi Proyek / Project Description

### 🇮🇩 
Project ini adalah implementasi sistem autentikasi dengan Laravel yang terintegrasi dengan **Laravel Socialite** untuk login menggunakan akun sosial media seperti **Google**, **GitHub**, dan **Facebook**. Fitur lainnya termasuk **lupa password** yang mengirim email reset password melalui **Mailtrap**.

Karena menggunakan login sosial media, kamu **perlu menggunakan Ngrok** agar callback URL bisa diakses oleh pihak ketiga (Google, GitHub, dan Facebook).

---

### 🇺🇸 
This project is a Laravel authentication system integrated with **Laravel Socialite** to allow users to log in using **Google**, **GitHub**, and **Facebook**. It also includes a **forgot password** feature that sends reset emails through **Mailtrap**.

Since this project uses social logins, you **must use Ngrok** so that the callback URLs are publicly accessible.

---

## ✨ Fitur / Features

- ✅ Login & Register standar (email & password)
- 🔐 Login dengan Google, GitHub, dan Facebook (Laravel Socialite)
- 📩 Lupa password dengan pengiriman email (Mailtrap)
- 📂 Validasi form dan notifikasi responsif
- 📦 Struktur kode rapi dan siap dikembangkan lebih lanjut

---

## ⚙️ Instalasi / Installation

```bash
git clone https://github.com/vynnptra/laravel-auth-socialite-mailtrap.git
cd laravel-auth-socialite-mailtrap
composer install
cp .env.example .env
php artisan key:generate
```

---

## 🔧 Konfigurasi Environment (.env)

Edit file `.env` dan isi bagian berikut:

```env
# Database
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Mailtrap
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=kevinnputraapratamaa@gmail.com
MAIL_FROM_NAME="Laravel Auth"

# Google OAuth
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=https://your-ngrok-url.ngrok.io/auth/google/callback

# GitHub OAuth
GITHUB_CLIENT_ID=your_github_client_id
GITHUB_CLIENT_SECRET=your_github_client_secret
GITHUB_REDIRECT_URI=https://your-ngrok-url.ngrok.io/auth/github/callback

# Facebook OAuth
FACEBOOK_CLIENT_ID=your_facebook_client_id
FACEBOOK_CLIENT_SECRET=your_facebook_client_secret
FACEBOOK_REDIRECT_URI=https://your-ngrok-url.ngrok.io/auth/facebook/callback
```

> ⚠️ Jangan lupa untuk mengganti `https://your-ngrok-url.ngrok.io` dengan URL Ngrok kamu yang aktif.

---

## 🌐 Menjalankan dengan Ngrok

1. Jalankan Laravel project:
   ```bash
   php artisan serve
   ```

2. Jalankan Ngrok:
   ```bash
   ngrok http 8000
   ```

3. Salin URL HTTPS dari Ngrok dan tempelkan di `.env` sebagai redirect URI.

---

## 🛠️ Migrasi Database

```bash
php artisan migrate
```

---

## 🧪 Pengujian / Testing

### Lupa Password
1. Buka halaman login
2. Klik “Lupa Password?”
3. Masukkan email valid
4. Cek email masuk melalui [Mailtrap](https://mailtrap.io)

### Login Sosial Media
- Pastikan URL callback sesuai dengan URL dari Ngrok yang sedang aktif.
- Pastikan client ID dan secret sudah diatur di Google/GitHub/Facebook Developer Console.

---

## 🏷️ Tags

`laravel` `authentication` `socialite` `mailtrap` `login` `register` `forgot-password`  
`laravel-socialite` `facebook-login` `google-login` `github-login` `ngrok` `email-testing`

---

## 👤 Author

**Kevin Putra Pratama**  
Pelajar RPL di SMKN1 Tengaran  
[GitHub](https://github.com/vynnptra)  
Email: kevinnputraapratamaa@gmail.com
```
