#Laravel E-Store

This is a simple e-store to demonstrate my ability to use Laravel. Though I prefer Node based systems I have a long history with PHP and am no stranger to MVC frameworks. 

**Live preview coming soon!**

![Store Preview](https://temp.caseydwayne.com/dwc-e-store-demo/store-preview.png "Store Preview")

### *Use Docker?*

![Docker Logo](https://temp.caseydwayne.com/dwc-e-store-demo/docker-logo-small.png "Docker Logo")

Skip the prereqs! After step 1 run ```docker compose up --build``` and visit http://localhost:9000.

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

3. **Seed the database:**
   ```bash
   php artisan migrate --seed
   ```

4. **Serve the application:**
   ```bash
   php artisan serve
   ```

Visit to `http://127.0.0.1:8000` to access the application.