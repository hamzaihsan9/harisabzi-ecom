@extends('layouts.app')

@section('title', 'Hari Sabzi — Buy Carrot Plants, Vegetables & Kitchen Grocery Plants in Pakistan')

@section('content')

<!-- HERO SECTION: Stylish, Catchy & Colourful with Green Theme -->
<section class="relative overflow-hidden bg-gradient-to-br from-botanical-900 via-botanical-850 to-botanical-950 text-white pt-12 pb-20 lg:pt-16 lg:pb-28 border-b-4 border-botanical-500">
    <!-- Decorative background plant glow shapes -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-emeraldGlow/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-32 w-96 h-96 bg-carrot-500/15 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Text Column -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Catchy Tagline Pill -->
                <div class="inline-flex items-center gap-2 bg-botanical-800/90 border-2 border-emeraldGlow/40 px-4 py-2 rounded-full shadow-lg">
                    <span class="text-xl">🥕</span>
                    <span class="text-emeraldGlow font-black text-xs sm:text-sm uppercase tracking-wider">
                        Real Vegetation Plants • Kitchen Garden Grocery
                    </span>
                    <span class="bg-carrot-500 text-white text-[10px] font-black px-2 py-0.5 rounded-full">PKR (₨)</span>
                </div>

                <!-- Main Bold Title -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                    Grow Your Own <span class="text-transparent bg-clip-text bg-gradient-to-r from-emeraldGlow via-green-300 to-lime-300">Carrot Plants</span> & Fresh Grocery at Home!
                </h1>

                <!-- Subheading with Urdu Callout -->
                <p class="text-base sm:text-lg font-bold text-botanical-200 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Skip supermarket vegetables. Buy healthy, established <strong class="text-white">carrot seedlings, mint pots, cherry tomato vines & kitchen herbs</strong> ready to harvest on your balcony, rooftop, or garden bed.
                </p>

                <!-- Quick Action Buttons -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-2">
                    <a href="#plants-catalog" class="bg-gradient-to-r from-emeraldGlow via-botanical-500 to-botanical-600 hover:from-emeraldGlow hover:to-botanical-700 text-botanical-950 font-black px-8 py-4 rounded-2xl shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-1 text-base flex items-center gap-2">
                        <span>Browse Plants Catalog</span>
                        <span class="text-xl">🌿</span>
                    </a>
                    <a href="{{ route('marketplace.index', ['category' => 'root-vegetables']) }}" class="bg-carrot-500 hover:bg-carrot-600 text-white font-black px-6 py-4 rounded-2xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 text-base flex items-center gap-2 border border-carrot-400">
                        <span>Carrot Plants Special</span>
                        <span>🥕</span>
                    </a>
                </div>

                <!-- Key Metrics Badges -->
                <div class="grid grid-cols-3 gap-3 pt-4 max-w-lg mx-auto lg:mx-0 text-center">
                    <div class="bg-botanical-800/60 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-2xl sm:text-3xl font-black text-emeraldGlow block">50+</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Live Plant Types</span>
                    </div>
                    <div class="bg-botanical-800/60 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-2xl sm:text-3xl font-black text-yellow-300 block">100%</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Organic Potted</span>
                    </div>
                    <div class="bg-botanical-800/60 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-2xl sm:text-3xl font-black text-carrot-500 block">₨ 200</span>
                        <span class="text-[11px] sm:text-xs font-bold text-botanical-300 uppercase">Flat PKR Delivery</span>
                    </div>
                </div>

            </div>

            <!-- Right Hero Visual Card -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md bg-gradient-to-b from-botanical-800/80 to-botanical-900/90 p-4 sm:p-5 rounded-3xl border-4 border-botanical-600/50 shadow-2xl backdrop-blur-md">
                    
                    <!-- Featured Plant Pill -->
                    <div class="absolute -top-4 -right-4 bg-gradient-to-r from-carrot-500 to-amber-500 text-white text-xs font-black px-4 py-2 rounded-full shadow-lg border-2 border-white transform rotate-3">
                        🔥 High Demand: Carrot Pots
                    </div>

                    <img src="https://images.unsplash.com/photo-1590868309235-ea34bed7bd7f?auto=format&fit=crop&w=800&q=80" 
                         alt="Carrot Plant in Pot" 
                         referrerpolicy="no-referrer"
                         class="w-full h-72 sm:h-80 object-cover rounded-2xl shadow-inner border-2 border-botanical-500">

                    <div class="mt-4 p-4 bg-botanical-950/80 rounded-2xl border border-botanical-700">
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="text-emeraldGlow text-xs font-black uppercase">Root Crop Star</span>
                                <h3 class="text-lg font-black text-white">Sweet Orange Carrot Plant (Gajar)</h3>
                                <p class="text-xs font-bold text-botanical-400">4-Week Established Sapling in Deep Grow Bag</p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-400 line-through font-bold">₨ 550 PKR</span>
                                <span class="text-xl font-black text-emeraldGlow block">₨ 450 PKR</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-botanical-800 text-xs text-botanical-300 font-bold">
                            <span>🌱 Harvest: 65 Days</span>
                            <span>☀️ Full Sunlight</span>
                            <span>📍 Ready to Dispatch</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CATEGORY NAVIGATION TABS (Colourful & Catchy Pills) -->
<section class="py-8 bg-white border-b border-botanical-100 shadow-sm sticky top-24 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-3 overflow-x-auto pb-2 scrollbar-none">
            
            <!-- All Plants Tab -->
            <a href="{{ route('marketplace.index') }}" 
               class="px-5 py-3 rounded-2xl font-black text-sm whitespace-nowrap transition-all shadow-sm flex items-center gap-2 {{ !request('category') ? 'bg-botanical-700 text-white shadow-botanical-700/30 ring-2 ring-botanical-500' : 'bg-botanical-50 text-botanical-900 hover:bg-botanical-100 border border-botanical-200' }}">
                <span>🌿</span>
                <span>All Grocery Plants</span>
            </a>

            @foreach($categories as $cat)
                <a href="{{ route('marketplace.index', array_merge(request()->except('page'), ['category' => $cat->slug])) }}" 
                   class="px-5 py-3 rounded-2xl font-black text-sm whitespace-nowrap transition-all shadow-sm flex items-center gap-2 {{ request('category') === $cat->slug ? 'bg-botanical-700 text-white shadow-botanical-700/30 ring-2 ring-botanical-500' : 'bg-botanical-50 text-botanical-900 hover:bg-botanical-100 border border-botanical-200' }}">
                    <span class="text-lg">{{ $cat->icon }}</span>
                    <span>{{ $cat->name }}</span>
                    <span class="text-xs px-2 py-0.5 rounded-full {{ request('category') === $cat->slug ? 'bg-botanical-900 text-white' : 'bg-botanical-200 text-botanical-800' }}">
                        {{ $cat->plants_count }}
                    </span>
                </a>
            @endforeach

        </div>
    </div>
</section>

<!-- MAIN CATALOG SECTION: Filters + Plant Cards Grid -->
<section id="plants-catalog" class="py-12 bg-[#f7fbf8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header & Quick Filters -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8 bg-white p-6 rounded-3xl border-2 border-botanical-100 shadow-sm">
            <div>
                <h2 class="text-2xl sm:text-3xl font-black text-botanical-950">
                    Live Grocery & Vegetable Plants
                </h2>
                <p class="text-xs sm:text-sm font-bold text-botanical-600 mt-1">
                    Showing {{ $plants->total() }} organic potted varieties ready to ship across Pakistan (All prices in PKR)
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
                    <select name="sort" onchange="this.form.submit()" class="bg-botanical-50 border-2 border-botanical-200 text-botanical-900 rounded-xl px-3 py-2 text-xs font-black focus:outline-none focus:border-botanical-500">
                        <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Featured First</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High (PKR)</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low (PKR)</option>
                        <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Highest Rated ⭐</option>
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest Arrivals</option>
                    </select>
                </div>

                <!-- Price Filter Quick Button -->
                <div class="flex items-center gap-1.5 bg-botanical-50 border-2 border-botanical-200 rounded-xl px-3 py-1.5 text-xs font-bold">
                    <span>Max:</span>
                    <input type="range" name="max_price" min="200" max="1500" step="50" value="{{ request('max_price', 1500) }}" 
                           onchange="this.form.submit()" oninput="document.getElementById('price-val').innerText = this.value" 
                           class="w-24 accent-botanical-600 cursor-pointer">
                    <span class="text-botanical-900 font-black">₨ <span id="price-val">{{ request('max_price', 1500) }}</span></span>
                </div>

                @if(request()->hasAny(['category', 'q', 'max_price', 'sort']))
                    <a href="{{ route('marketplace.index') }}" class="text-xs font-black text-red-500 hover:text-red-700 underline px-2">Reset</a>
                @endif
            </form>
        </div>

        <!-- PLANT LISTING GRID -->
        @if($plants->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
                @foreach($plants as $plant)
                    <div class="bg-white rounded-3xl overflow-hidden border-2 border-botanical-100 shadow-sm hover:shadow-xl plant-card-hover flex flex-col justify-between group relative">
                        
                        <!-- Card Image Header with Badges -->
                        <div class="relative overflow-hidden h-56 bg-botanical-50">
                            <img referrerpolicy="no-referrer" src="{{ $plant->image_url }}" 
                                 alt="{{ $plant->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-500 ease-out">

                            <!-- Top Badges -->
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                @if($plant->badge)
                                    <span class="bg-gradient-to-r from-botanical-700 to-botanical-850 text-white text-[11px] font-black px-3 py-1 rounded-full shadow-md border border-emeraldGlow/40">
                                        {{ $plant->badge }}
                                    </span>
                                @endif
                                <span class="bg-white/95 text-botanical-900 text-[10px] font-black px-2.5 py-0.5 rounded-md shadow-sm border border-botanical-200">
                                    🪴 {{ $plant->pot_size }}
                                </span>
                            </div>

                            <!-- Discount Pill -->
                            @if($plant->discount_percentage > 0)
                                <div class="absolute top-3 right-3 bg-carrot-500 text-white text-xs font-black px-2.5 py-1 rounded-full shadow-md">
                                    -{{ $plant->discount_percentage }}%
                                </div>
                            @endif

                            <!-- Quick View Floating Eye Button -->
                            <button onclick="openQuickView({{ $plant->id }})" 
                                    class="absolute bottom-3 right-3 bg-white/90 hover:bg-white text-botanical-900 p-2.5 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:scale-110"
                                    title="Quick Preview Plant">
                                <svg class="w-5 h-5 text-botanical-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                        </div>

                        <!-- Card Body -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <!-- Category & Origin -->
                                <div class="flex items-center justify-between text-[11px] font-extrabold text-botanical-500 mb-1">
                                    <span class="uppercase tracking-wider">{{ $plant->category->name }}</span>
                                    <span>📍 {{ $plant->origin_city }}</span>
                                </div>

                                <!-- Plant Name (English + Urdu) -->
                                <a href="{{ route('plants.show', $plant->slug) }}" class="block group-hover:text-botanical-600 transition-colors">
                                    <h3 class="text-base sm:text-lg font-black text-botanical-950 leading-tight">
                                        {{ $plant->name }}
                                    </h3>
                                    @if($plant->urdu_name)
                                        <p class="text-xs font-bold text-botanical-700 mt-0.5">{{ $plant->urdu_name }}</p>
                                    @endif
                                </a>

                                <!-- Short Description -->
                                <p class="text-xs font-bold text-gray-500 mt-2 line-clamp-2 leading-relaxed">
                                    {{ $plant->short_description }}
                                </p>

                                <!-- Key Horticultural Specs Icons -->
                                <div class="grid grid-cols-2 gap-1.5 my-3 py-2 bg-botanical-50/70 rounded-xl px-2.5 text-[11px] font-bold text-botanical-800 border border-botanical-100">
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
                            <div class="pt-2 border-t border-botanical-100 mt-2">
                                <div class="flex items-baseline justify-between mb-3">
                                    <div>
                                        <span class="text-lg sm:text-xl font-black text-botanical-950">
                                            {{ $plant->formatted_price }}
                                        </span>
                                        @if($plant->original_price_pkr)
                                            <span class="text-xs text-gray-400 line-through font-bold ml-1.5">
                                                {{ $plant->formatted_original_price }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="flex items-center text-xs font-black text-amber-500">
                                        <span>★ {{ $plant->rating }}</span>
                                        <span class="text-gray-400 font-bold text-[10px] ml-1">({{ $plant->reviews_count }})</span>
                                    </div>
                                </div>

                                <!-- Add to Basket Form Button -->
                                <form action="{{ route('cart.add') }}" method="POST" onsubmit="handleAddToCart(event, this)">
                                    @csrf
                                    <input type="hidden" name="plant_id" value="{{ $plant->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-botanical-600 via-botanical-700 to-botanical-800 hover:from-botanical-700 hover:to-botanical-900 text-white font-black py-3 px-4 rounded-xl shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 group-hover:scale-[1.02]">
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
            <div class="mt-12 flex justify-center">
                {{ $plants->links() }}
            </div>
        @else
            <div class="bg-white rounded-3xl p-12 text-center max-w-xl mx-auto border-2 border-botanical-200 shadow-sm">
                <span class="text-6xl mb-3 block">🌱</span>
                <h3 class="text-2xl font-black text-botanical-950">No Plants Found</h3>
                <p class="text-sm font-bold text-botanical-600 mt-2">Try adjusting your search terms or price filter.</p>
                <a href="{{ route('marketplace.index') }}" class="mt-4 inline-block bg-botanical-700 text-white font-black px-6 py-2.5 rounded-xl shadow">
                    View All Plants
                </a>
            </div>
        @endif

    </div>
</section>

<!-- SPECIAL FEATURE SPOTLIGHT: "Carrot & Root Crops Kitchen Kit" -->
<section class="py-16 bg-gradient-to-r from-botanical-900 via-botanical-850 to-botanical-900 text-white relative overflow-hidden border-y-4 border-carrot-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-8 space-y-4">
                <span class="bg-carrot-500 text-white text-xs font-black px-3.5 py-1 rounded-full uppercase tracking-wider inline-block">
                    🥕 Urban Kitchen Gardening Spotlight
                </span>
                <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white">
                    Why Grow Carrot Plants In Containers?
                </h2>
                <p class="text-sm sm:text-base font-bold text-botanical-200 leading-relaxed">
                    Carrot plants grow extraordinarily well in Pakistan when provided deep, well-draining soil mix. Our young potted carrot seedlings come pre-established with strong taproots and vibrant feathery foliage. Place them on your sunniest balcony or terrace, water gently, and harvest sweet, pesticide-free carrots right into your kitchen salad bowl!
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div class="bg-botanical-800/80 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-lg">☀️</span>
                        <h4 class="text-sm font-black text-white mt-1">Sunlight</h4>
                        <p class="text-xs font-bold text-botanical-300">Needs 5-6 hours of daily sunlight</p>
                    </div>
                    <div class="bg-botanical-800/80 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-lg">💧</span>
                        <h4 class="text-sm font-black text-white mt-1">Watering</h4>
                        <p class="text-xs font-bold text-botanical-300">Keep soil damp, avoid waterlogging</p>
                    </div>
                    <div class="bg-botanical-800/80 p-3 rounded-2xl border border-botanical-700">
                        <span class="text-lg">🥗</span>
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

<!-- TESTIMONIALS & TRUST SECTION -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-black text-botanical-600 uppercase tracking-widest bg-botanical-100 px-3 py-1 rounded-full">Community Gardeners</span>
            <h2 class="text-3xl font-black text-botanical-950 mt-2">What Home Gardeners Say Across Pakistan</h2>
            <p class="text-sm font-bold text-botanical-600 mt-1">Over 12,000+ live potted vegetable plants delivered safely</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Review 1 -->
            <div class="bg-botanical-50/60 p-6 rounded-3xl border border-botanical-200 shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "I ordered 3 Sweet Orange Carrot pots and 2 Mint plants in Model Town, Lahore. The shock-absorbent packaging kept the soil completely intact. Within 4 weeks my carrots formed beautiful thick orange roots!"
                </p>
                <div class="flex items-center gap-3 pt-2 border-t border-botanical-200">
                    <div class="w-10 h-10 rounded-full bg-botanical-600 text-white flex items-center justify-center font-black">SM</div>
                    <div>
                        <h4 class="text-xs font-black text-botanical-950">Saad Malik</h4>
                        <p class="text-[10px] font-bold text-botanical-600">Model Town, Lahore • Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-botanical-50/60 p-6 rounded-3xl border border-botanical-200 shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "The Cherry Tomato plant arrived already in bloom with tiny green tomatoes! My children check the vine every morning. Plucking fresh red cherry tomatoes for salad is pure joy. Best prices in PKR."
                </p>
                <div class="flex items-center gap-3 pt-2 border-t border-botanical-200">
                    <div class="w-10 h-10 rounded-full bg-carrot-500 text-white flex items-center justify-center font-black">FK</div>
                    <div>
                        <h4 class="text-xs font-black text-botanical-950">Fatima Khan</h4>
                        <p class="text-[10px] font-bold text-botanical-600">F-7, Islamabad • Verified Buyer</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-botanical-50/60 p-6 rounded-3xl border border-botanical-200 shadow-sm space-y-3">
                <div class="flex text-amber-400 text-sm font-black">★★★★★</div>
                <p class="text-xs font-bold text-botanical-900 leading-relaxed italic">
                    "Kadi Patta (curry tree) and Hari Mirch plants are thriving on my Johar Town terrace. Super fresh, zero chemical smell, just pure organic soil and healthy roots. 10/10 recommend Hari Sabzi!"
                </p>
                <div class="flex items-center gap-3 pt-2 border-t border-botanical-200">
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
