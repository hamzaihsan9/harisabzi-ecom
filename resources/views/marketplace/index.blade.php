@extends('layouts.app')

@section('title', 'Hari Sabzi')

@section('content')

<!-- MASSIVE HERO BANNER: Hypermarket Scale, Colourful & Catchy with Green Theme -->
<section class="relative overflow-hidden bg-gradient-to-r from-botanical-950 via-[#0a351d] to-botanical-950 text-white pt-12 pb-16 lg:pt-20 lg:pb-24">
    <!-- Ambient organic green glows -->
    <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 -right-32 w-[550px] h-[550px] bg-carrot-500/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 left-1/2 transform -translate-x-1/2 w-full max-w-4xl h-48 bg-emeraldGlow/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Top Hypermarket Super-Deal Strip -->
        <div class="flex flex-wrap items-center justify-between gap-3 mb-8 bg-white/10 backdrop-blur-md px-5 py-3 rounded-2xl text-xs sm:text-sm font-black text-white">
            <div class="flex items-center gap-2">
                <span class="bg-carrot-500 text-white text-[11px] uppercase font-black px-3 py-1 rounded-full shadow-sm">
                    MEGA HARVEST OFFER
                </span>
                <span class="text-emeraldGlow font-black">🌟 Potted Vegetable Saplings Dispatched Daily Across Pakistan</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-bold text-emerald-200">
                <span>🚚 Flat ₨ 200 PKR Delivery</span>
                <span>•</span>
                <span>💵 Cash on Delivery (COD)</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            
            <!-- Left Column: Big Headlines & Offers -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Pill Tag -->
                <div class="inline-flex items-center gap-2 bg-emerald-900/80 px-4 py-2 rounded-full shadow-inner">
                    <span class="text-lg">🥕</span>
                    <span class="text-emerald-300 font-black text-xs sm:text-sm tracking-wide">
                        100% Live Vegetable Plants • Kitchen Garden Grocery
                    </span>
                    <span class="bg-carrot-500 text-white text-[10px] font-black px-2.5 py-0.5 rounded-full">₨ PKR</span>
                </div>

                <!-- Giant Title -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-[1.12] tracking-tight">
                    Grow Your Own <span class="text-transparent bg-clip-text bg-gradient-to-r from-emeraldGlow via-green-300 to-lime-300">Carrot Plants</span> & Fresh Vegetables at Home!
                </h1>

                <!-- Subheadline -->
                <p class="text-base sm:text-lg font-bold text-botanical-200 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Skip chemically treated store-bought produce. Buy healthy, pre-established <strong class="text-white">carrot pots, fragrant podina, cherry tomatoes, and live vegetable seedlings</strong> ready to harvest on your balcony, rooftop, or home lawn.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-2">
                    <a href="#plants-catalog" class="bg-gradient-to-r from-emeraldGlow via-emerald-400 to-botanical-500 hover:from-emeraldGlow hover:to-botanical-600 text-botanical-950 font-black px-8 py-4 rounded-2xl shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-1 text-base flex items-center gap-2">
                        <span>Browse Plants Catalog</span>
                        <span class="text-xl">🌿</span>
                    </a>
                    <a href="{{ route('marketplace.index', ['category' => 'root-vegetables']) }}" class="bg-carrot-500 hover:bg-carrot-600 text-white font-black px-7 py-4 rounded-2xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 text-base flex items-center gap-2">
                        <span>Carrot Plants Special</span>
                        <span class="text-xl">🥕</span>
                    </a>
                </div>

                <!-- Live Metrics Summary -->
                <div class="grid grid-cols-3 gap-3 pt-4 max-w-lg mx-auto lg:mx-0 text-center">
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-2xl sm:text-3xl font-black text-emeraldGlow block">50+</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Live Plant Varieties</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-2xl sm:text-3xl font-black text-yellow-300 block">100%</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Organic In-Pot</span>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-2xl sm:text-3xl font-black text-carrot-500 block">₨ 200</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Flat PKR Delivery</span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Big Supermarket Showcase Card -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md bg-white/10 backdrop-blur-xl p-5 sm:p-6 rounded-3xl shadow-2xl">
                    
                    <!-- High Demand Badge -->
                    <div class="absolute -top-3 -right-3 bg-gradient-to-r from-carrot-500 to-amber-500 text-white text-xs font-black px-4 py-2 rounded-full shadow-lg">
                        🔥 Best Seller • Carrot Pots
                    </div>

                    <div class="overflow-hidden rounded-2xl shadow-lg bg-emerald-950">
                        <img src="{{ asset('images/plants/carrot_fresh.jpg') }}" 
                             alt="Carrot Plant in Pot" 
                             class="w-full h-72 sm:h-84 object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="mt-4 p-4 bg-botanical-950/90 rounded-2xl">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="text-emeraldGlow text-xs font-black uppercase tracking-wider">Desi Root Crop</span>
                                <h3 class="text-xl font-black text-white">Sweet Orange Carrot Plant (Gajar)</h3>
                                <p class="text-xs font-bold text-botanical-300 mt-0.5">4-Week Established Sapling in Deep Grow Pot</p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 line-through font-bold">₨ 650 PKR</span>
                                <span class="text-2xl font-black text-emeraldGlow block">₨ 450 PKR</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-white/10 text-xs text-botanical-200 font-bold">
                            <span>🌱 Harvest: 65 Days</span>
                            <span>☀️ Full Sun</span>
                            <span class="text-carrot-400 font-black">Save 31%</span>
                        </div>

                        <form action="{{ route('cart.add') }}" method="POST" onsubmit="handleAddToCart(event, this)" class="mt-3">
                            @csrf
                            <input type="hidden" name="plant_id" value="1">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="w-full bg-gradient-to-r from-carrot-500 to-amber-500 hover:from-carrot-600 hover:to-amber-600 text-white font-black py-3 rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                                <span>Quick Add Carrot Pot</span>
                                <span>🛒</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Integrated Hypermarket Perks Bar -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 pt-8 border-t border-white/10 text-xs font-bold text-botanical-200">
            <div class="flex items-center gap-3 bg-white/5 p-3.5 rounded-2xl">
                <span class="text-2xl">🚚</span>
                <div>
                    <strong class="text-white block text-sm">Safe Potted Delivery</strong>
                    <span>Shipped in shock-proof crates</span>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-white/5 p-3.5 rounded-2xl">
                <span class="text-2xl">🪴</span>
                <div>
                    <strong class="text-white block text-sm">Ready In Soil</strong>
                    <span>No repotting required initially</span>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-white/5 p-3.5 rounded-2xl">
                <span class="text-2xl">🥕</span>
                <div>
                    <strong class="text-white block text-sm">100% Organic</strong>
                    <span>Chemical-free kitchen crops</span>
                </div>
            </div>
            <div class="flex items-center gap-3 bg-white/5 p-3.5 rounded-2xl">
                <span class="text-2xl">💵</span>
                <div>
                    <strong class="text-white block text-sm">Cash on Delivery</strong>
                    <span>Pay at your doorstep in PKR</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- BORDERLESS MERGED CATEGORY NAVIGATION STRIP -->
<section class="py-6 bg-white/80 backdrop-blur-md sticky top-24 z-30 shadow-[0_4px_15px_-4px_rgba(0,0,0,0.04)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-3 overflow-x-auto pb-2 scrollbar-none">
            
            <!-- All Plants Tab -->
            <a href="{{ route('marketplace.index') }}" 
               class="px-5 py-3 rounded-2xl font-black text-sm whitespace-nowrap transition-all flex items-center gap-2 {{ !request('category') ? 'bg-botanical-800 text-white shadow-md' : 'bg-emerald-50/70 text-botanical-900 hover:bg-emerald-100/70' }}">
                <span>🌿</span>
                <span>All Grocery Plants</span>
            </a>

            @foreach($categories as $cat)
                <a href="{{ route('marketplace.index', array_merge(request()->except('page'), ['category' => $cat->slug])) }}" 
                   class="px-5 py-3 rounded-2xl font-black text-sm whitespace-nowrap transition-all flex items-center gap-2 {{ request('category') === $cat->slug ? 'bg-botanical-800 text-white shadow-md' : 'bg-emerald-50/70 text-botanical-900 hover:bg-emerald-100/70' }}">
                    <span class="text-lg">{{ $cat->icon }}</span>
                    <span>{{ $cat->name }}</span>
                    <span class="text-xs px-2 py-0.5 rounded-full {{ request('category') === $cat->slug ? 'bg-botanical-950 text-white' : 'bg-emerald-200/70 text-botanical-900' }}">
                        {{ $cat->plants_count }}
                    </span>
                </a>
            @endforeach

        </div>
    </div>
</section>

<!-- MAIN CATALOG SECTION: Bigger Product Cards & Merged Controls -->
<section id="plants-catalog" class="py-12 bg-[#f4f8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Merged Header & Filter Controls (Borderless) -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-10 bg-white p-6 sm:p-7 rounded-3xl shadow-sm">
            <div>
                <h2 class="text-2xl sm:text-3xl font-black text-botanical-950">
                    Live Grocery & Vegetable Plants
                </h2>
                <p class="text-xs sm:text-sm font-bold text-botanical-600 mt-1">
                    Showing {{ $plants->total() }} organic potted varieties ready to ship across Pakistan (Prices in PKR)
                </p>
            </div>

            <!-- Filter Controls Form -->
            <form action="{{ route('marketplace.index') }}" method="GET" class="flex flex-wrap items-center gap-3 w-full md:w-auto">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('q'))
                    <input type="hidden" name="q" value="{{ request('q') }}">
                @endif

                <!-- Sort By Dropdown -->
                <div class="flex items-center gap-2">
                    <label class="text-xs font-bold text-botanical-700">Sort By:</label>
                    <select name="sort" onchange="this.form.submit()" class="bg-emerald-50/80 text-botanical-950 rounded-2xl px-4 py-2.5 text-xs font-black focus:outline-none focus:ring-2 focus:ring-emerald-400">
                        <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Featured First</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High (PKR)</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low (PKR)</option>
                        <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Highest Rated ⭐</option>
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest Arrivals</option>
                    </select>
                </div>

                <!-- Price Filter Slider -->
                <div class="flex items-center gap-2 bg-emerald-50/80 rounded-2xl px-4 py-2 text-xs font-bold">
                    <span>Max:</span>
                    <input type="range" name="max_price" min="200" max="1500" step="50" value="{{ request('max_price', 1500) }}" 
                           onchange="this.form.submit()" oninput="document.getElementById('price-val').innerText = this.value" 
                           class="w-24 accent-botanical-600 cursor-pointer">
                    <span class="text-botanical-950 font-black">₨ <span id="price-val">{{ request('max_price', 1500) }}</span></span>
                </div>

                @if(request()->hasAny(['category', 'q', 'max_price', 'sort']))
                    <a href="{{ route('marketplace.index') }}" class="text-xs font-black text-red-500 hover:text-red-700 underline px-2">Reset</a>
                @endif
            </form>
        </div>

        <!-- BIGGER PLANT LISTINGS GRID (3 Columns, Tall Images, Borderless) -->
        @if($plants->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                @foreach($plants as $plant)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl plant-card-hover flex flex-col justify-between group relative">
                        
                        <!-- Big Edge-to-Edge Image Header -->
                        <div class="relative overflow-hidden h-72 sm:h-80 bg-emerald-50">
                            <img referrerpolicy="no-referrer" src="{{ $plant->image_url }}" 
                                 alt="{{ $plant->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">

                            <!-- Top Floating Badges -->
                            <div class="absolute top-4 left-4 flex flex-col gap-2 items-start">
                                @if($plant->badge)
                                    <span class="bg-botanical-900/90 backdrop-blur-sm text-white text-xs font-black px-3.5 py-1.5 rounded-full shadow-md">
                                        {{ $plant->badge }}
                                    </span>
                                @endif
                                <span class="bg-white/95 backdrop-blur-sm text-botanical-950 text-[11px] font-black px-3 py-1 rounded-full shadow-sm">
                                    🪴 {{ $plant->pot_size }}
                                </span>
                            </div>

                            <!-- Discount Pill -->
                            @if($plant->discount_percentage > 0)
                                <div class="absolute top-4 right-4 bg-carrot-500 text-white text-xs font-black px-3 py-1 rounded-full shadow-md">
                                    -{{ $plant->discount_percentage }}%
                                </div>
                            @endif

                            <!-- Quick View Floating Button -->
                            <button onclick="openQuickView({{ $plant->id }})" 
                                    class="absolute bottom-4 right-4 bg-white/95 hover:bg-white text-botanical-900 p-3 rounded-full shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:scale-110"
                                    title="Quick Preview Plant">
                                <svg class="w-5 h-5 text-botanical-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                        </div>

                        <!-- Card Body (Spacious & Crisp) -->
                        <div class="p-6 sm:p-7 flex-1 flex flex-col justify-between">
                            <div>
                                <!-- Category & City Origin -->
                                <div class="flex items-center justify-between text-xs font-extrabold text-botanical-600 mb-1.5">
                                    <span class="uppercase tracking-wider">{{ $plant->category->name }}</span>
                                    <span>📍 {{ $plant->origin_city }}</span>
                                </div>

                                <!-- Plant Name (Big Bold Typography) -->
                                <a href="{{ route('plants.show', $plant->slug) }}" class="block group-hover:text-botanical-600 transition-colors">
                                    <h3 class="text-xl sm:text-2xl font-black text-botanical-950 leading-tight">
                                        {{ $plant->name }}
                                    </h3>
                                    @if($plant->urdu_name)
                                        <p class="text-sm font-extrabold text-emerald-700 mt-1">{{ $plant->urdu_name }}</p>
                                    @endif
                                </a>

                                <!-- Description -->
                                <p class="text-xs font-bold text-gray-500 mt-2.5 line-clamp-2 leading-relaxed">
                                    {{ $plant->short_description }}
                                </p>

                                <!-- Horticultural Specs (Borderless Soft Bar) -->
                                <div class="grid grid-cols-2 gap-2 my-4 py-2.5 bg-emerald-50/70 rounded-2xl px-3.5 text-xs font-bold text-botanical-800">
                                    <div class="flex items-center gap-1.5 truncate">
                                        <span>☀️</span>
                                        <span class="truncate">{{ $plant->sunlight }}</span>
                                    </div>
                                    <div class="flex items-center gap-1.5 truncate">
                                        <span>⏱️</span>
                                        <span class="truncate">{{ $plant->harvest_time }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Price in PKR and Add to Cart Action -->
                            <div class="pt-3 border-t border-emerald-50 mt-2">
                                <div class="flex items-baseline justify-between mb-4">
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-black text-botanical-950">
                                            {{ $plant->formatted_price }}
                                        </span>
                                        @if($plant->original_price_pkr)
                                            <span class="text-xs text-gray-400 line-through font-bold ml-2">
                                                {{ $plant->formatted_original_price }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="flex items-center text-xs font-black text-amber-500 bg-amber-50 px-2.5 py-1 rounded-full">
                                        <span>★ {{ $plant->rating }}</span>
                                        <span class="text-gray-400 font-bold text-[10px] ml-1">({{ $plant->reviews_count }})</span>
                                    </div>
                                </div>

                                <!-- Add to Basket Button -->
                                <form action="{{ route('cart.add') }}" method="POST" onsubmit="handleAddToCart(event, this)">
                                    @csrf
                                    <input type="hidden" name="plant_id" value="{{ $plant->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-emerald-600 via-botanical-700 to-botanical-800 hover:from-emerald-700 hover:to-botanical-900 text-white font-black py-4 px-6 rounded-2xl shadow-md hover:shadow-xl transition-all flex items-center justify-center gap-2 group-hover:scale-[1.02] text-sm sm:text-base">
                                        <svg class="w-5 h-5 text-emeraldGlow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                                        <span>Add to Plant Basket</span>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-14 flex justify-center">
                {{ $plants->links() }}
            </div>
        @else
            <div class="bg-white rounded-3xl p-12 text-center max-w-xl mx-auto shadow-sm">
                <span class="text-6xl mb-3 block">🌱</span>
                <h3 class="text-2xl font-black text-botanical-950">No Plants Found</h3>
                <p class="text-sm font-bold text-botanical-600 mt-2">Try adjusting your search terms or price filter.</p>
                <a href="{{ route('marketplace.index') }}" class="mt-4 inline-block bg-botanical-700 text-white font-black px-6 py-2.5 rounded-2xl shadow">
                    View All Plants
                </a>
            </div>
        @endif

    </div>
</section>

<!-- SPECIAL FEATURE SPOTLIGHT: "Carrot & Root Crops Kitchen Kit" (Borderless & Merged) -->
<section class="py-16 bg-gradient-to-r from-botanical-950 via-[#0a351d] to-botanical-950 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-8 space-y-4">
                <span class="bg-carrot-500 text-white text-xs font-black px-4 py-1.5 rounded-full uppercase tracking-wider inline-block">
                    🥕 Urban Kitchen Gardening Spotlight
                </span>
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white">
                    Why Grow Carrot Plants In Containers?
                </h2>
                <p class="text-sm sm:text-base font-bold text-botanical-200 leading-relaxed">
                    Carrot plants grow extraordinarily well in Pakistan when provided deep, well-draining soil mix. Our young potted carrot seedlings come pre-established with strong taproots and vibrant feathery foliage. Place them on your sunniest balcony or terrace, water gently, and harvest sweet, pesticide-free carrots right into your kitchen salad bowl!
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-3">
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-xl">☀️</span>
                        <h4 class="text-sm font-black text-white mt-1">Sunlight</h4>
                        <p class="text-xs font-bold text-botanical-300">Needs 5-6 hours of daily direct sun</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-xl">💧</span>
                        <h4 class="text-sm font-black text-white mt-1">Watering</h4>
                        <p class="text-xs font-bold text-botanical-300">Keep soil damp, avoid waterlogging</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md p-4 rounded-2xl">
                        <span class="text-xl">🥗</span>
                        <h4 class="text-sm font-black text-white mt-1">Culinary Value</h4>
                        <p class="text-xs font-bold text-botanical-300">Sweet roots + edible tender carrot greens</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 text-center lg:text-right">
                <a href="{{ route('marketplace.index', ['category' => 'root-vegetables']) }}" 
                   class="inline-block bg-gradient-to-r from-carrot-500 to-amber-500 hover:from-carrot-600 hover:to-amber-600 text-white font-black px-8 py-5 rounded-2xl shadow-2xl text-lg transform hover:scale-105 transition-all">
                    <span>Order Carrot Plants Now</span>
                    <span class="block text-xs text-carrot-100 font-bold mt-1">Starting from ₨ 350 PKR</span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIALS & TRUST SECTION (Borderless Merged Aesthetic) -->
<section class="py-16 bg-[#f4f8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-black text-emerald-800 uppercase tracking-widest bg-emerald-100/70 px-4 py-1.5 rounded-full">Community Gardeners</span>
            <h2 class="text-3xl font-black text-botanical-950 mt-3">What Home Gardeners Say Across Pakistan</h2>
            <p class="text-sm font-bold text-botanical-600 mt-1">Over 12,000+ live potted vegetable plants delivered safely</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Review 1 -->
            <div class="bg-white p-7 rounded-3xl shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "I ordered 3 Sweet Orange Carrot pots and 2 Mint plants in Model Town, Lahore. The shock-absorbent packaging kept the soil completely intact. Within 4 weeks my carrots formed beautiful thick orange roots!"
                </p>
                <div class="flex items-center gap-3 pt-3 border-t border-emerald-50">
                    <div class="w-10 h-10 rounded-full bg-botanical-600 text-white flex items-center justify-center font-black">SM</div>
                    <div>
                        <h4 class="text-xs font-black text-botanical-950">Saad Malik</h4>
                        <p class="text-[10px] font-bold text-botanical-600">Model Town, Lahore • Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-7 rounded-3xl shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "The Cherry Tomato plant arrived already in bloom with tiny green tomatoes! My children check the vine every morning. Plucking fresh red cherry tomatoes for salad is pure joy. Best prices in PKR."
                </p>
                <div class="flex items-center gap-3 pt-3 border-t border-emerald-50">
                    <div class="w-10 h-10 rounded-full bg-carrot-500 text-white flex items-center justify-center font-black">FK</div>
                    <div>
                        <h4 class="text-xs font-black text-botanical-950">Fatima Khan</h4>
                        <p class="text-[10px] font-bold text-botanical-600">F-7, Islamabad • Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-white p-7 rounded-3xl shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "Kadi Patta (curry tree) and Hari Mirch plants are thriving on my Johar Town terrace. Super fresh, zero chemical smell, just pure organic soil and healthy roots. 10/10 recommend Hari Sabzi!"
                </p>
                <div class="flex items-center gap-3 pt-3 border-t border-emerald-50">
                    <div class="w-10 h-10 rounded-full bg-botanical-700 text-white flex items-center justify-center font-black">ZA</div>
                    <div>
                        <h4 class="text-xs font-black text-botanical-950">Zubair Ahmed</h4>
                        <p class="text-[10px] font-bold text-botanical-600">Johar Town, Lahore • Verified Buyer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
