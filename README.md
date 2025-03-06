# Laravel E-Store

This is a simple e-store to demonstrate my ability to use Laravel. Though I prefer Node based systems I have a long history with PHP and am no stranger to MVC frameworks. 

**Live preview:** https://temp.caseydwayne.com/dwc-e-store-demo/public/

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

Visit `http://127.0.0.1:8000` to access the application.

---

#### Media and Encryption Key

Feel free to copy .env-example to .env and set your own key (```php artisan key:generate```) before seeding the database. For the purposes of this demo I didn't feel it was necessary (and left the encryption key in .env-example). The local version uses SQLite, the server version MySQL. Use whatever you feel most comfortable. 

The media can be downloaded [here](https://temp.caseydwayne.com/dwc-e-store-demo/media-assets.7z), just extract and place in /public/storage (I removed the symlink to avoid conflict between Windows and Docker/Linux).