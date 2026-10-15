<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerController;

// Marketplace Catalog
Route::get('/', [PlantController::class, 'index'])->name('marketplace.index');
Route::get('/plants/{slug}', [PlantController::class, 'show'])->name('plants.show');
Route::get('/api/plants/{id}/quick-view', [PlantController::class, 'apiQuickView'])->name('api.plants.quick-view');

// Shopping Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Checkout & Orders
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout.index');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/orders/confirmation/{orderNumber}', [OrderController::class, 'confirmation'])->name('orders.confirmation');

// Vendor / Community Nursery Listing
Route::post('/seller/list-plant', [SellerController::class, 'store'])->name('seller.store');
