
# Laravel Auth with Socialite (Google, GitHub, Facebook) & Mailtrap

## 📌 Project Description

This project is a Laravel authentication system integrated with **Laravel Socialite** to allow users to log in using **Google**, **GitHub**, and **Facebook**. It also includes a **forgot password** feature that sends reset emails through **Mailtrap**.

Since this project uses social logins, you **must use Ngrok** so that the callback URLs are publicly accessible.

---

## ✨ Features

- ✅ Standard login & register (email & password)
- 🔐 Social login with Google, GitHub, and Facebook (Laravel Socialite)
- 📩 Forgot password via email (Mailtrap)
- 📂 Form validation and responsive notifications
- 📦 Clean code structure, easy to extend

---

## ⚙️ Installation

```bash
git clone https://github.com/vynnptra/laravel-auth-socialite-mailtrap.git
cd laravel-auth-socialite-mailtrap
composer install
cp .env.example .env
php artisan key:generate
```

---

## 🔧 Environment Configuration (.env)

Edit your `.env` file and fill in the following:

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

> ⚠️ Replace `https://your-ngrok-url.ngrok.io` with your actual Ngrok HTTPS URL.

---

## 🌐 Run with Ngrok

1. Start Laravel server:
   ```bash
   php artisan serve
   ```

2. Start Ngrok:
   ```bash
   ngrok http 8000
   ```

3. Copy the HTTPS Ngrok URL and paste it into your `.env` file as redirect URIs.

---

## 🛠️ Database Migration

```bash
php artisan migrate
```

---

## 🧪 Testing

### Forgot Password
1. Visit the login page
2. Click “Forgot Password?”
3. Enter a valid email
4. Check the inbox via [Mailtrap](https://mailtrap.io)

### Social Login
- Ensure the callback URLs match the active Ngrok URL
- Set the client ID and secret in your Google/GitHub/Facebook developer console

---

## 🏷️ Tags

`laravel` `authentication` `socialite` `mailtrap` `login` `register` `forgot-password`  
`laravel-socialite` `facebook-login` `google-login` `github-login` `ngrok` `email-testing`

---

## 👤 Author

**Kevin Putra Pratama**  
Software Engineering Student at SMKN1 Tengaran  
[GitHub](https://github.com/vynnptra)  
Email: kevinnputraapratamaa@gmail.com
