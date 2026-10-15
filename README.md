# Hari Sabzi

Hari Sabzi is an e-commerce web application developed with Laravel and PHP for purchasing live vegetation and grocery plants. The platform provides an online catalog for home gardeners and urban growers in Pakistan, featuring potted vegetable saplings, kitchen herbs, root crops, and container fruits.

---

## Overview

The application is built on a standard Model-View-Controller (MVC) architecture using Laravel 11 and PHP 8.4 with SQLite as the relational persistence layer. It provides complete catalog browsing, search and category filtering, dynamic price sliders, an interactive shopping cart drawer, and a multi-step checkout workflow with order tracking in Pakistani Rupees (PKR).

All plant listings feature verified horticulture data including sunlight exposure, watering frequency, pot container sizing, and estimated harvest time.

---

## Features

- Product Catalog: Categorized browsing for root vegetables, kitchen herbs, fruiting vegetables, leafy greens, and container fruits.
- Dynamic Search and Filtering: Real-time filtering by category, text query, and price range.
- Shopping Basket: Session-based cart drawer with asynchronous quantity updates and subtotal calculation.
- Checkout Workflow: Pakistani shipping address collection with support for Cash on Delivery (COD), JazzCash / EasyPaisa, and direct bank transfer.
- Order Tracking: Automated order number generation with reference prefix HS and delivery stage tracking.
- Local Image Storage: Self-hosted, optimized plant photography stored within the public directory.
- Responsive Design: Responsive layout optimized for desktop, tablet, and mobile screens.

---

## Technology Stack

- Backend Framework: Laravel 11
- Programming Language: PHP 8.4+
- Database: SQLite (via PDO SQLite extension)
- Templating Engine: Blade
- Styling: Tailwind CSS
- Client-Side Scripting: Vanilla JavaScript (Fetch API, DOM manipulation)
- Currency: Pakistani Rupee (PKR)

---

## System Requirements

- PHP 8.4 or higher
- Required PHP Extensions: pdo_sqlite, sqlite3, curl, mbstring, dom, xml, fileinfo
- Composer 2.x
- SQLite 3

---

## Installation and Setup

1. Clone the repository:
   git clone git@github.com:hamzaihsan9/harisabzi-ecom.git
   cd harisabzi-ecom

2. Install dependencies:
   composer install

3. Environment configuration:
   cp .env.example .env
   php artisan key:generate

4. Run migrations and database seeder:
   touch database/database.sqlite
   php artisan migrate --seed --seeder=PlantMarketSeeder

5. Start the development server:
   php artisan serve
   
   Or run using the standalone server script:
   php -S 0.0.0.0:8080 server.php

6. Access the application in your browser at http://localhost:8080.

---

## Project Structure

- app/Http/Controllers/
  - PlantController.php: Handles catalog display, category filtering, search, and quick-view API responses.
  - CartController.php: Manages session-based cart operations including add, update, and remove.
  - OrderController.php: Handles order validation, creation, payment method assignment, and confirmation receipts.
- app/Models/
  - Category.php: Plant classification and relations.
  - Plant.php: Horticultural listings, inventory, and formatted pricing.
  - Order.php: Customer orders and shipping details.
  - OrderItem.php: Line items linked to orders and plants.
- database/
  - migrations/: Relational database table schemas.
  - seeders/PlantMarketSeeder.php: Seeds 17 vegetable and grocery plant records with local photography.
- resources/views/
  - layouts/app.blade.php: Base layout, navigation bar, cart drawer, and footer.
  - marketplace/index.blade.php: Homepage catalog, hero banner, category filters, and product grid.
  - marketplace/show.blade.php: Single plant detailed care guide and horticultural specifications.
  - marketplace/cart.blade.php: Dedicated cart view.
  - marketplace/checkout.blade.php: Multi-step checkout form.
  - marketplace/confirmation.blade.php: Order confirmation receipt and dispatch tracker.
- routes/web.php: Application route declarations.
- server.php: Built-in local development server router.

---

## License

This project is licensed under the MIT License.
