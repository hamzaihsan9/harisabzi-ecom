<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GreenHarvest — Organic Plant & Grocery Vegetation Marketplace')</title>

    <!-- Cosmic Bold Typography: Fredoka & Outfit Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700;800;900&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        botanical: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            950: '#052e16',
                        },
                        carrot: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                        },
                        emeraldGlow: '#00dc82'
                    },
                    fontFamily: {
                        cosmic: ['Fredoka', 'Outfit', 'sans-serif'],
                        display: ['Outfit', 'Fredoka', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Cosmic Bold Font Styling Applied Universally */
        * {
            font-family: 'Fredoka', 'Outfit', system-ui, -apple-system, sans-serif !important;
            font-weight: 700;
            letter-spacing: -0.015em;
        }

        h1, h2, h3, h4, .cosmic-heavy {
            font-weight: 800 !important;
            letter-spacing: -0.025em;
        }

        .cosmic-black {
            font-weight: 900 !important;
        }

        /* Glassmorphism and Fresh Green Accents */
        .glass-nav {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .plant-card-hover {
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .plant-card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 30px -10px rgba(22, 101, 52, 0.22);
        }

        .badge-pulse {
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.4);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f0fdf4;
        }
        ::-webkit-scrollbar-thumb {
            background: #22c55e;
            border-radius: 9999px;
        }
    </style>
</head>
<body class="bg-[#f7fbf8] text-[#0f2e1b] min-h-screen flex flex-col font-cosmic antialiased selection:bg-botanical-500 selection:text-white">

    <!-- Top Alert Banner: Delivery Across Pakistan in PKR -->
    <aside aria-label="Delivery announcement" class="bg-gradient-to-r from-botanical-950 via-botanical-900 to-botanical-800 text-white text-xs sm:text-sm py-2 px-4 shadow-inner border-b border-botanical-700/40">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center space-x-2">
                <span class="bg-carrot-500 text-white px-2.5 py-0.5 rounded-full text-xs font-black animate-pulse">🥕 FRESH HARVEST</span>
                <span>Live potted vegetables & kitchen plants delivered safely in pots • <strong>100% Organically Grown</strong></span>
            </div>
            <div class="flex items-center space-x-4 text-xs font-bold text-botanical-200">
                <span>📍 Daily Dispatches in Lahore, Karachi & Islamabad</span>
                <span class="bg-botanical-700/60 text-emeraldGlow px-2 py-0.5 rounded border border-emeraldGlow/30">Prices in PKR (₨)</span>
            </div>
        </div>
    </aside>

    <!-- Main Navigation Bar with BIGGER LOGO -->
    <header class="sticky top-0 z-40 glass-nav border-b border-botanical-100 shadow-sm transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                
                <!-- BIGGER BRAND LOGO -->
                <a href="{{ route('marketplace.index') }}" class="flex items-center gap-3.5 group">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-tr from-botanical-700 via-botanical-600 to-emeraldGlow flex items-center justify-center shadow-lg shadow-botanical-600/30 group-hover:scale-105 transition-transform duration-300 ring-4 ring-botanical-100">
                        <!-- Custom Big Botanical & Carrot Plant SVG Logo -->
                        <svg class="w-9 h-9 sm:w-10 sm:h-10 text-white fill-current filter drop-shadow" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-1.5">
                            <span class="text-2xl sm:text-3xl font-black text-botanical-950 tracking-tight group-hover:text-botanical-700 transition-colors">
                                GREEN<span class="text-botanical-600">HARVEST</span>
                            </span>
                            <span class="bg-carrot-500 text-white text-[10px] uppercase font-black px-1.5 py-0.5 rounded-md shadow-sm">Bazaar</span>
                        </div>
                        <span class="text-xs sm:text-sm font-extrabold text-botanical-600 tracking-wide flex items-center gap-1">
                            🌱 سبزی پودھ مارکیٹ <span class="text-gray-300">•</span> Potted Grocery & Vegetables
                        </span>
                    </div>
                </a>

                <!-- Desktop Search Bar -->
                <div class="hidden lg:flex items-center flex-1 max-w-md mx-8">
                    <form action="{{ route('marketplace.index') }}" method="GET" class="w-full relative">
                        <input type="text" name="q" value="{{ request('q') }}" placeholder="Search carrot plants, mint, tomatoes, herbs..." 
                               class="w-full pl-12 pr-4 py-3 bg-botanical-50/80 hover:bg-white focus:bg-white text-botanical-950 placeholder-botanical-400 rounded-full border-2 border-botanical-200 focus:border-botanical-500 focus:outline-none focus:ring-4 focus:ring-botanical-200/50 transition-all text-sm font-bold shadow-inner">
                        <div class="absolute left-4 top-3.5 text-botanical-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </form>
                </div>

                <!-- Navigation Action Buttons -->
                <div class="flex items-center gap-3">
                    
                    <!-- Sell Plants Button -->
                    <button onclick="openSellerModal()" 
                            class="hidden md:inline-flex items-center gap-2 bg-gradient-to-r from-carrot-500 to-amber-500 hover:from-carrot-600 hover:to-amber-600 text-white px-4 py-2.5 rounded-xl text-sm font-extrabold shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                        <span>🚜</span>
                        <span>Sell Your Plants</span>
                    </button>

                    <!-- Cart Drawer Trigger Button -->
                    @php
                        $cart = session()->get('cart', []);
                        $cartCount = array_sum(array_column($cart, 'quantity'));
                        $cartSubtotal = 0;
                        foreach($cart as $item) { $cartSubtotal += $item['price_pkr'] * $item['quantity']; }
                    @endphp
                    <button onclick="toggleCartDrawer()" 
                            class="relative flex items-center gap-2.5 bg-botanical-100 hover:bg-botanical-200 text-botanical-900 px-4 py-3 rounded-2xl transition-all border border-botanical-200 group">
                        <div class="relative">
                            <svg class="w-6 h-6 text-botanical-700 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                            <span id="cart-badge" class="absolute -top-2 -right-2.5 bg-gradient-to-r from-red-500 to-carrot-500 text-white text-xs font-black w-5 h-5 flex items-center justify-center rounded-full border-2 border-white shadow">
                                {{ $cartCount }}
                            </span>
                        </div>
                        <div class="hidden sm:flex flex-col text-left">
                            <span class="text-[10px] uppercase font-bold text-botanical-600 leading-tight">My Basket</span>
                            <span id="cart-nav-total" class="text-xs font-black text-botanical-900 leading-tight">₨ {{ number_format($cartSubtotal) }} PKR</span>
                        </div>
                    </button>

                </div>
            </div>
        </div>
    </header>

    <!-- Flash Messages / Toast Alerts -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 w-full">
        @if(session('success'))
            <div class="bg-gradient-to-r from-botanical-500 to-emerald-600 text-white px-5 py-3.5 rounded-2xl shadow-lg flex items-center justify-between mb-4 animate-bounce">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🌱</span>
                    <span class="font-extrabold text-sm sm:text-base">{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white hover:text-botanical-100 font-black text-xl">✕</button>
            </div>
        @endif

        @if(session('seller_success'))
            <div class="bg-gradient-to-r from-amber-500 to-carrot-600 text-white px-5 py-3.5 rounded-2xl shadow-lg flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🎉</span>
                    <span class="font-extrabold text-sm sm:text-base">{{ session('seller_success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white hover:text-amber-100 font-black text-xl">✕</button>
            </div>
        @endif

        @if(session('error') || session('warning'))
            <div class="bg-red-500 text-white px-5 py-3.5 rounded-2xl shadow-lg flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">⚠️</span>
                    <span class="font-extrabold text-sm sm:text-base">{{ session('error') ?? session('warning') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-white font-black text-xl">✕</button>
            </div>
        @endif
    </div>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Slide-Out Shopping Basket Drawer -->
    <div id="cart-drawer-backdrop" onclick="toggleCartDrawer()" class="fixed inset-0 bg-botanical-950/60 z-50 backdrop-blur-sm hidden transition-opacity"></div>
    <div id="cart-drawer" class="fixed top-0 right-0 h-full w-full sm:w-[450px] bg-white z-50 shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-in-out border-l-4 border-botanical-500">
        
        <!-- Drawer Header -->
        <div class="p-5 bg-botanical-900 text-white flex justify-between items-center shadow">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🌿</span>
                <div>
                    <h2 class="text-xl font-black">Your Plant Basket</h2>
                    <p class="text-xs font-bold text-botanical-300">Live Potted Vegetables & Groceries</p>
                </div>
            </div>
            <button onclick="toggleCartDrawer()" class="text-botanical-300 hover:text-white p-2 rounded-lg bg-botanical-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Drawer Items List -->
        <div id="drawer-items-container" class="flex-1 overflow-y-auto p-5 space-y-4">
            @if(count($cart) > 0)
                @foreach($cart as $id => $item)
                    <div id="cart-item-{{ $id }}" class="flex items-center gap-4 bg-botanical-50/70 p-3.5 rounded-2xl border border-botanical-200">
                        <img referrerpolicy="no-referrer" src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 rounded-xl object-cover border-2 border-botanical-300">
                        <div class="flex-1">
                            <h3 class="font-extrabold text-botanical-950 text-sm leading-tight line-clamp-1">{{ $item['name'] }}</h3>
                            <p class="text-xs font-bold text-botanical-600">{{ $item['urdu_name'] ?? 'سبزی پودا' }}</p>
                            <span class="text-xs font-bold text-botanical-700 bg-botanical-200/60 px-2 py-0.5 rounded-md inline-block my-1">{{ $item['pot_size'] }}</span>
                            <div class="flex items-center justify-between mt-1">
                                <span class="font-black text-botanical-900 text-sm">₨ {{ number_format($item['price_pkr']) }} PKR</span>
                                
                                <!-- Quantity Controls -->
                                <div class="flex items-center bg-white rounded-lg border border-botanical-300 shadow-sm">
                                    <button onclick="updateCartQty({{ $id }}, {{ $item['quantity'] - 1 }})" class="px-2 py-0.5 text-botanical-700 hover:bg-botanical-100 font-black">-</button>
                                    <span class="px-2.5 py-0.5 text-xs font-black">{{ $item['quantity'] }}</span>
                                    <button onclick="updateCartQty({{ $id }}, {{ $item['quantity'] + 1 }})" class="px-2 py-0.5 text-botanical-700 hover:bg-botanical-100 font-black">+</button>
                                </div>
                            </div>
                        </div>
                        <button onclick="removeFromCart({{ $id }})" class="text-red-400 hover:text-red-600 p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </div>
                @endforeach
            @else
                <div class="text-center py-16 text-botanical-400">
                    <span class="text-6xl mb-3 block">🪴</span>
                    <h3 class="text-lg font-black text-botanical-800">Your Plant Basket is Empty</h3>
                    <p class="text-sm font-bold mt-1 text-botanical-600">Add fresh carrot plants, mint, or tomatoes to start your home kitchen garden!</p>
                </div>
            @endif
        </div>

        <!-- Drawer Footer -->
        <div class="p-5 border-t border-botanical-100 bg-botanical-50">
            <div class="space-y-2 mb-4">
                <div class="flex justify-between text-sm font-bold text-botanical-700">
                    <span>Subtotal:</span>
                    <span id="drawer-subtotal">₨ {{ number_format($cartSubtotal) }} PKR</span>
                </div>
                <div class="flex justify-between text-sm font-bold text-botanical-700">
                    <span>Delivery (Potted Safe Shipping):</span>
                    <span>₨ 200 PKR</span>
                </div>
                <div class="flex justify-between text-base font-black text-botanical-950 border-t border-botanical-200 pt-2">
                    <span>Estimated Total:</span>
                    <span id="drawer-total" class="text-botanical-700 text-lg">₨ {{ number_format($cartSubtotal > 0 ? $cartSubtotal + 200 : 0) }} PKR</span>
                </div>
            </div>

            <a href="{{ route('checkout.index') }}" class="w-full bg-gradient-to-r from-botanical-600 to-botanical-700 hover:from-botanical-700 hover:to-botanical-800 text-white font-black py-3.5 px-6 rounded-2xl flex items-center justify-center gap-2 shadow-lg hover:shadow-xl transition-all">
                <span>Proceed to Checkout</span>
                <span>➔</span>
            </a>
            <p class="text-center text-[11px] font-bold text-botanical-500 mt-2">Cash on Delivery (COD) & JazzCash accepted nationwide</p>
        </div>
    </div>

    <!-- Quick View Plant Modal -->
    <div id="quick-view-modal" class="fixed inset-0 bg-black/60 z-50 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border-4 border-botanical-200 relative p-6 sm:p-8">
            <button onclick="closeQuickView()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div id="quick-view-content" class="space-y-4">
                <!-- Content loaded via AJAX -->
            </div>
        </div>
    </div>

    <!-- Seller Listing Modal -->
    <div id="seller-modal" class="fixed inset-0 bg-black/60 z-50 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full shadow-2xl border-4 border-carrot-200 p-6 sm:p-8 relative">
            <button onclick="closeSellerModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 bg-gray-100 p-2 rounded-full">✕</button>
            
            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">🚜</span>
                <div>
                    <h3 class="text-xl font-black text-botanical-950">Sell on GreenHarvest</h3>
                    <p class="text-xs font-bold text-botanical-600">List your kitchen garden vegetable saplings & plants</p>
                </div>
            </div>

            <form action="{{ route('seller.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">Your Full Name *</label>
                        <input type="text" name="seller_name" required placeholder="e.g. Tariq Mehmood" class="w-full px-3.5 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm focus:ring-2 focus:ring-carrot-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">WhatsApp / Phone *</label>
                        <input type="text" name="seller_phone" required placeholder="0300-1234567" class="w-full px-3.5 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm focus:ring-2 focus:ring-carrot-400 focus:outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">City / Town *</label>
                        <input type="text" name="seller_city" required placeholder="e.g. Lahore / Pattoki" class="w-full px-3.5 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm focus:ring-2 focus:ring-carrot-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">Nursery / Garden Name</label>
                        <input type="text" name="nursery_or_farm_name" placeholder="e.g. Model Town Organics" class="w-full px-3.5 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm focus:ring-2 focus:ring-carrot-400 focus:outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">Plant Category *</label>
                        <select name="plant_type" required class="w-full px-3 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm bg-white">
                            <option value="Root Vegetable (Carrot/Mooli)">Root Vegetable (Carrot/Mooli)</option>
                            <option value="Kitchen Herb (Mint/Dhania)">Kitchen Herb (Mint/Dhania)</option>
                            <option value="Fruiting Veggie (Tomato/Mirch)">Fruiting Veggie (Tomato/Mirch)</option>
                            <option value="Leafy Green (Palak/Salad)">Leafy Green (Palak/Salad)</option>
                            <option value="Fruit/Citrus Sapling">Fruit/Citrus Sapling</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">Variety Name *</label>
                        <input type="text" name="variety_name" required placeholder="e.g. Desi Gajar Pot" class="w-full px-3 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-botanical-800 mb-1">Price (PKR) *</label>
                        <input type="number" name="proposed_price_pkr" required placeholder="₨ PKR" class="w-full px-3 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-botanical-800 mb-1">Quantity Available & Details *</label>
                    <textarea name="details" required rows="3" placeholder="Pot size, age of saplings, care instructions..." class="w-full px-3.5 py-2.5 rounded-xl border border-botanical-300 font-bold text-sm"></textarea>
                    <input type="hidden" name="quantity_available" value="20">
                </div>

                <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-carrot-500 to-amber-500 hover:from-carrot-600 hover:to-amber-600 text-white font-black rounded-2xl shadow-lg transition-transform transform hover:-translate-y-0.5">
                    Submit Plant Listing Application
                </button>
            </form>
        </div>
    </div>

    <!-- Main Footer with BIGGER LOGO & Botanical Trust -->
    <footer class="bg-gradient-to-b from-botanical-950 to-[#02180b] text-white pt-16 pb-8 border-t-8 border-botanical-500 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                
                <!-- Col 1: Big Logo & Mission -->
                <div class="space-y-4 md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-botanical-500 to-emeraldGlow flex items-center justify-center shadow-lg ring-2 ring-botanical-400">
                            <span class="text-3xl">🥕</span>
                        </div>
                        <div>
                            <span class="text-2xl font-black tracking-tight text-white">GREEN<span class="text-emeraldGlow">HARVEST</span></span>
                            <p class="text-xs font-bold text-botanical-300">سبزی پودھ بازار • Potted Grocery</p>
                        </div>
                    </div>
                    <p class="text-sm font-bold text-botanical-300 leading-relaxed">
                        Pakistan's premier specialized marketplace for live vegetation grocery plants, root crops, carrot saplings, kitchen herbs, and container fruits.
                    </p>
                    <div class="flex items-center gap-2 text-xs font-bold text-emeraldGlow bg-botanical-900/80 p-2.5 rounded-xl border border-botanical-700/50">
                        <span>🛡️</span>
                        <span>100% Organically Grown • Potted Delivery Guarantee</span>
                    </div>
                </div>

                <!-- Col 2: Popular Grocery Plants -->
                <div>
                    <h3 class="text-base font-black text-white uppercase tracking-wider mb-4 border-b-2 border-botanical-600 pb-1.5 inline-block">Popular Grocery Plants</h3>
                    <ul class="space-y-2.5 text-sm font-bold text-botanical-200">
                        <li><a href="{{ route('marketplace.index', ['category' => 'root-vegetables']) }}" class="hover:text-emeraldGlow transition-colors flex items-center gap-2">🥕 Sweet Orange Carrot Plants</a></li>
                        <li><a href="{{ route('marketplace.index', ['category' => 'kitchen-herbs']) }}" class="hover:text-emeraldGlow transition-colors flex items-center gap-2">🌿 Desi Fragrant Podina / Mint</a></li>
                        <li><a href="{{ route('marketplace.index', ['category' => 'fruiting-vegetables']) }}" class="hover:text-emeraldGlow transition-colors flex items-center gap-2">🍅 Cherry Tomato Flowering Plants</a></li>
                        <li><a href="{{ route('marketplace.index', ['category' => 'fruiting-vegetables']) }}" class="hover:text-emeraldGlow transition-colors flex items-center gap-2">🌶️ Fiery Green Chili / Hari Mirch</a></li>
                        <li><a href="{{ route('marketplace.index', ['category' => 'leafy-greens']) }}" class="hover:text-emeraldGlow transition-colors flex items-center gap-2">🥬 Organic Palak / Spinach Pots</a></li>
                    </ul>
                </div>

                <!-- Col 3: Delivery Hubs in Pakistan -->
                <div>
                    <h3 class="text-base font-black text-white uppercase tracking-wider mb-4 border-b-2 border-botanical-600 pb-1.5 inline-block">Active Delivery Hubs</h3>
                    <p class="text-xs font-bold text-botanical-400 mb-3">Live nursery plants transported in shock-resistant climate-controlled crates:</p>
                    <ul class="grid grid-cols-2 gap-2 text-xs font-bold text-botanical-200">
                        <li class="bg-botanical-900/60 p-2 rounded-lg border border-botanical-800">🏡 Lahore (Model Town, Johar Town, Gulberg, DHA)</li>
                        <li class="bg-botanical-900/60 p-2 rounded-lg border border-botanical-800">🏡 Islamabad & Rawalpindi</li>
                        <li class="bg-botanical-900/60 p-2 rounded-lg border border-botanical-800">🏡 Karachi Central & South</li>
                        <li class="bg-botanical-900/60 p-2 rounded-lg border border-botanical-800">🏡 Faisalabad & Multan</li>
                    </ul>
                </div>

                <!-- Col 4: Payment & Security in PKR -->
                <div>
                    <h3 class="text-base font-black text-white uppercase tracking-wider mb-4 border-b-2 border-botanical-600 pb-1.5 inline-block">Secure Payment (PKR)</h3>
                    <p class="text-xs font-bold text-botanical-300 mb-3">
                        Pay conveniently upon doorstep delivery anywhere in Pakistan:
                    </p>
                    <div class="space-y-2 text-xs font-bold">
                        <div class="flex items-center gap-2 bg-botanical-900 p-2 rounded-xl text-emeraldGlow border border-botanical-700">
                            <span>💵</span>
                            <span>Cash on Delivery (COD) across Pakistan</span>
                        </div>
                        <div class="flex items-center gap-2 bg-botanical-900 p-2 rounded-xl text-yellow-300 border border-botanical-700">
                            <span>📱</span>
                            <span>JazzCash & EasyPaisa Direct Transfer</span>
                        </div>
                        <div class="flex items-center gap-2 bg-botanical-900 p-2 rounded-xl text-blue-300 border border-botanical-700">
                            <span>🏦</span>
                            <span>HBL / Meezan Bank Online Transfer</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="border-t border-botanical-800/80 pt-8 flex flex-col sm:flex-row justify-between items-center text-xs font-bold text-botanical-400 gap-4">
                <p>© {{ date('Y') }} GreenHarvest Bazaar (Pvt.) Ltd. All rights reserved. Prices strictly in Pakistani Rupees (PKR).</p>
                <div class="flex items-center space-x-6 text-botanical-300">
                    <span class="hover:text-white cursor-pointer">100% Human-Curated Organic Horticulture</span>
                    <span>•</span>
                    <span class="hover:text-white cursor-pointer">Laravel & PHP Modern Architecture</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive JavaScript for Cart, Quick View, and Modals -->
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function toggleCartDrawer() {
            const drawer = document.getElementById('cart-drawer');
            const backdrop = document.getElementById('cart-drawer-backdrop');
            if (drawer.classList.contains('translate-x-full')) {
                drawer.classList.remove('translate-x-full');
                backdrop.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                drawer.classList.add('translate-x-full');
                backdrop.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        function openSellerModal() {
            document.getElementById('seller-modal').classList.remove('hidden');
        }
        function closeSellerModal() {
            document.getElementById('seller-modal').classList.add('hidden');
        }

        function openQuickView(plantId) {
            const modal = document.getElementById('quick-view-modal');
            const content = document.getElementById('quick-view-content');
            modal.classList.remove('hidden');
            content.innerHTML = `
                <div class="text-center py-12">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-botanical-500 border-t-transparent"></div>
                    <p class="mt-2 text-sm font-bold text-botanical-600">Loading plant details...</p>
                </div>
            `;

            fetch(`/api/plants/${plantId}/quick-view`)
                .then(res => res.json())
                .then(data => {
                    content.innerHTML = `
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img referrerpolicy="no-referrer" src="${data.image_url}" alt="${data.name}" class="w-full h-72 rounded-2xl object-cover border-4 border-botanical-100 shadow-md">
                            <div>
                                <span class="bg-botanical-100 text-botanical-800 text-xs font-black px-3 py-1 rounded-full uppercase tracking-wider">${data.category}</span>
                                <h3 class="text-2xl font-black text-botanical-950 mt-2">${data.name}</h3>
                                <p class="text-sm font-extrabold text-botanical-600 mb-1">${data.urdu_name || ''}</p>
                                <p class="text-xs italic text-gray-500 mb-3">${data.scientific_name || ''}</p>
                                
                                <div class="text-2xl font-black text-botanical-800 my-2">
                                    ${data.formatted_price}
                                    ${data.formatted_original_price ? `<span class="text-sm text-gray-400 line-through ml-2 font-bold">${data.formatted_original_price}</span>` : ''}
                                </div>

                                <p class="text-xs font-bold text-gray-600 mb-4 leading-relaxed">${data.short_description}</p>

                                <div class="grid grid-cols-2 gap-2 text-xs font-bold bg-botanical-50 p-3 rounded-xl border border-botanical-200 mb-4">
                                    <div>☀️ Sunlight: <span class="text-botanical-900">${data.sunlight}</span></div>
                                    <div>💧 Watering: <span class="text-botanical-900">${data.watering}</span></div>
                                    <div>⏱️ Harvest: <span class="text-botanical-900">${data.harvest_time}</span></div>
                                    <div>🪴 Pot: <span class="text-botanical-900">${data.pot_size}</span></div>
                                </div>

                                <form action="/cart/add" method="POST" onsubmit="handleAddToCart(event, this)">
                                    <input type="hidden" name="_token" value="${csrfToken}">
                                    <input type="hidden" name="plant_id" value="${data.id}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="w-full bg-gradient-to-r from-botanical-600 to-emerald-600 hover:from-botanical-700 hover:to-emerald-700 text-white font-black py-3 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
                                        <span>Add to Basket</span>
                                        <span>🛒</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    `;
                });
        }

        function closeQuickView() {
            document.getElementById('quick-view-modal').classList.add('hidden');
        }

        function handleAddToCart(e, form) {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('cart-badge').innerText = data.cart_count;
                    document.getElementById('cart-nav-total').innerText = '₨ ' + Number(data.cart_subtotal).toLocaleString() + ' PKR';
                    updateDrawerUI(data.cart, data.cart_subtotal);
                    toggleCartDrawer();
                }
            });
        }

        function updateCartQty(plantId, newQty) {
            if (newQty < 1) {
                removeFromCart(plantId);
                return;
            }
            fetch('/cart/update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ plant_id: plantId, quantity: newQty })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('cart-badge').innerText = data.cart_count;
                    document.getElementById('cart-nav-total').innerText = '₨ ' + Number(data.cart_subtotal).toLocaleString() + ' PKR';
                    updateDrawerUI(data.cart, data.cart_subtotal);
                }
            });
        }

        function removeFromCart(plantId) {
            fetch('/cart/remove', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ plant_id: plantId })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('cart-badge').innerText = data.cart_count;
                    document.getElementById('cart-nav-total').innerText = '₨ ' + Number(data.cart_subtotal).toLocaleString() + ' PKR';
                    updateDrawerUI(data.cart, data.cart_subtotal);
                }
            });
        }

        function updateDrawerUI(cart, subtotal) {
            const container = document.getElementById('drawer-items-container');
            const drawerSubtotal = document.getElementById('drawer-subtotal');
            const drawerTotal = document.getElementById('drawer-total');

            drawerSubtotal.innerText = '₨ ' + Number(subtotal).toLocaleString() + ' PKR';
            const total = subtotal > 0 ? subtotal + 200 : 0;
            drawerTotal.innerText = '₨ ' + Number(total).toLocaleString() + ' PKR';

            const items = Object.values(cart);
            if (items.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-16 text-botanical-400">
                        <span class="text-6xl mb-3 block">🪴</span>
                        <h3 class="text-lg font-black text-botanical-800">Your Plant Basket is Empty</h3>
                        <p class="text-sm font-bold mt-1 text-botanical-600">Add fresh carrot plants, mint, or tomatoes to start your home kitchen garden!</p>
                    </div>
                `;
                return;
            }

            let html = '';
            items.forEach(item => {
                html += `
                    <div id="cart-item-${item.id}" class="flex items-center gap-4 bg-botanical-50/70 p-3.5 rounded-2xl border border-botanical-200">
                        <img referrerpolicy="no-referrer" src="${item.image_url}" alt="${item.name}" class="w-16 h-16 rounded-xl object-cover border-2 border-botanical-300">
                        <div class="flex-1">
                            <h3 class="font-extrabold text-botanical-950 text-sm leading-tight line-clamp-1">${item.name}</h3>
                            <p class="text-xs font-bold text-botanical-600">${item.urdu_name || 'سبزی پودا'}</p>
                            <span class="text-xs font-bold text-botanical-700 bg-botanical-200/60 px-2 py-0.5 rounded-md inline-block my-1">${item.pot_size}</span>
                            <div class="flex items-center justify-between mt-1">
                                <span class="font-black text-botanical-900 text-sm">₨ ${Number(item.price_pkr).toLocaleString()} PKR</span>
                                <div class="flex items-center bg-white rounded-lg border border-botanical-300 shadow-sm">
                                    <button onclick="updateCartQty(${item.id}, ${item.quantity - 1})" class="px-2 py-0.5 text-botanical-700 hover:bg-botanical-100 font-black">-</button>
                                    <span class="px-2.5 py-0.5 text-xs font-black">${item.quantity}</span>
                                    <button onclick="updateCartQty(${item.id}, ${item.quantity + 1})" class="px-2 py-0.5 text-botanical-700 hover:bg-botanical-100 font-black">+</button>
                                </div>
                            </div>
                        </div>
                        <button onclick="removeFromCart(${item.id})" class="text-red-400 hover:text-red-600 p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        </button>
                    </div>
                `;
            });
            container.innerHTML = html;
        }
    </script>

    @stack('scripts')
</body>
</html>
