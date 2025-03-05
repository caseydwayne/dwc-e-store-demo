# Laravel E-Store

This is a simple e-store to demonstrate my ability to use Laravel. Though I prefer Node based systems I have a long history with PHP and am no stranger to MVC frameworks. 

**Live preview coming soon!**

![Store Preview](https://temp.caseydwayne.com/dwc-e-store-demo/store-preview.png "Store Preview")

###*Use Docker?*

![Docker](https://www.docker.com/app/uploads/2023/08/logo-guide-logos-1.svg "Docker")

Skip the prereqs! After step 1 run ```docker compose up --build``` and visit http://localhost:8000.

## Installation Guide

### Prerequisites
Ensure your system has the following installed:
- PHP 8.x
- Composer
- Laravel 10.x
- SQLite (make sure it's enabled in your php.ini)
- Node.js & NPM (for frontend assets)

### Setup Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/caseydwayne/dwc-e-store-demo
   cd dwc-e-store-demo
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up environment variables:**
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with database and application settings.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Serve the application:**
   ```bash
   php artisan serve
   ```

Now, navigate to `http://127.0.0.1:8000` to access the application.