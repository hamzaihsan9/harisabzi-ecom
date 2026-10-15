# 🌿 Hari Sabzi (ہری سبزی مارکیٹ) — Plant & Vegetation Marketplace

> **A vibrant, stylish e-commerce marketplace built strictly with Laravel 11 & PHP for buying living vegetation and grocery plants (carrot plants, kitchen herbs, fruiting vegetables, and root crops).**

---

## 🌟 Overview

**HariSabzi E-Commerce** is a full-featured online marketplace dedicated to urban home growers, balcony gardeners, and kitchen farmers in Pakistan. It allows customers to order live, potted vegetable plants and grocery seedlings ready for harvest, delivered fresh to their doorstep.

- 🥕 **Specialized Vegetation Focus**: Features live edible plants including **Nantes Orange & Kuroda Purple Carrot Plants**, Desi Mooli (Radish), Beetroot, Ginger, Podina (Mint), Coriander, Cherry Tomatoes, Green Chilies, and Kagzi Lemon.
- 🎨 **Cosmic Bold Aesthetics**: High-energy typography powered by Google Fonts `Fredoka` & `Outfit` (weights 700–900) for a playful yet premium visual impact.
- 🍃 **Botanical Green Glow**: Emerald green palette (`#052e16`, `#166534`, `#22c55e`, `#84cc16`), mint accents, glassmorphic plant cards, and an oversized brand logo.
- 🇵🇰 **Pakistan-Centric E-Commerce**: All prices formatted in **PKR (₨)**, with localized delivery options and support for **Cash on Delivery (COD)**, **JazzCash / EasyPaisa**, and **Direct Bank Transfer**.
- 🚫 **100% Traditional Tech Stack**: Strictly Laravel & PHP MVC without bloated AI dependencies or third-party SaaS lock-in.

---

## 🚀 Key Features

- **Living Plant Catalog**: Browse by categories (*Carrots & Root Veggies, Kitchen Herbs & Spices, Fruiting Vegetables, Leafy Greens, Dwarf Fruits & Berries*).
- **Interactive Filtering & Search**: Real-time search by plant name, category tabs, and interactive PKR price-range slider (`₨ 250` - `₨ 1,200`).
- **Horticultural Care Specifications**: Each listing provides sunlight needs, watering frequency, pot sizing, harvest timeline, and difficulty level.
- **Quick-View Modal**: Instant previews of plant specifications and photos without leaving the catalog.
- **Slide-Out Drawer Cart**: Session-backed interactive basket with dynamic counter badges, item quantity controls, and subtotal calculation.
- **Pakistani Multi-Step Checkout**: Province, city, shipping address, delivery instructions, and payment method selector.
- **Order Invoice & Live Tracker**: Immediate receipt generation with unique tracking IDs (`HS-XXXX-XXXX`) and nursery packaging stage tracker.
- **Community Grower Onboarding**: Interactive seller registration modal for local nursery partners to list home-grown seedlings.

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.4+, Laravel 11 (MVC architecture, Eloquent ORM, Session Manager, Custom Service Providers)
- **Database**: SQLite (Zero-config, fast local persistence)
- **Frontend / Templating**: Laravel Blade, Vanilla Modern JavaScript (ES6+), CSS3 Flexbox/Grid, Glassmorphic UI
- **Typography**: Google Fonts Fredoka & Outfit (Cosmic Bold 700-900)
- **Currency**: Pakistani Rupee (₨ PKR)

---

## 📂 Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── PlantController.php     # Catalog browsing, filtering, search, quick-view API
│   │   ├── CartController.php      # Session-based cart drawer management
│   │   ├── OrderController.php     # Checkout, invoice calculation, and order tracking
│   │   └── SellerController.php    # Community nursery onboarding
│   └── Models/
│       ├── Category.php            # Plant taxonomy
│       ├── Plant.php               # Vegetable listings and horticultural specs
│       ├── Order.php               # Customer orders in PKR
│       ├── OrderItem.php           # Order line items
│       └── SellerListing.php       # Community vendor applications
├── database/
│   ├── migrations/                 # Relational schema migrations
│   └── seeders/
│       └── PlantMarketSeeder.php   # 17 vegetable/grocery plants with verified photos
├── resources/
│   └── views/
│       ├── layouts/app.blade.php   # Cosmic bold theme, big logo header, cart drawer
│       └── marketplace/
│           ├── index.blade.php     # Hero spotlight, carrot feature, and product grid
│           ├── show.blade.php      # Detailed care guide & horticultural specs
│           ├── cart.blade.php      # Dedicated basket view
│           ├── checkout.blade.php  # Pakistani shipping & payment options
│           └── confirmation.blade.php # Order invoice & dispatch tracker
├── routes/
│   └── web.php                     # Clean RESTful route mappings
└── server.php                      # Local standalone dev runner
```

---

## 💻 Installation & Setup

1. **Clone the repository**:
   ```bash
   git clone git@github.com:hamzaihsan9/harisabzi-ecom.git
   cd harisabzi-ecom
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Initialize Database & Seed Vegetation Catalog**:
   ```bash
   touch database/database.sqlite
   php artisan migrate --seed --seeder=PlantMarketSeeder
   ```

5. **Start Local Development Server**:
   ```bash
   php artisan serve
   # Or using the built-in standalone runner:
   php -S 0.0.0.0:8080 server.php
   ```

6. Open your browser and navigate to `http://localhost:8080`.

---

## 📜 License
This project is open-source under the [MIT License](LICENSE).
