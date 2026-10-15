@extends('layouts.app')

@section('title', $plant->name . ' | Hari Sabzi')

@section('content')

<!-- BREADCRUMBS -->
<section class="bg-botanical-100/50 py-3 border-b border-botanical-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center space-x-2 text-xs font-bold text-botanical-700">
            <a href="{{ route('marketplace.index') }}" class="hover:text-botanical-950">Home</a>
            <span>/</span>
            <a href="{{ route('marketplace.index', ['category' => $plant->category->slug]) }}" class="hover:text-botanical-950">{{ $plant->category->name }}</a>
            <span>/</span>
            <span class="text-botanical-950 truncate">{{ $plant->name }}</span>
        </nav>
    </div>
</section>

<!-- MAIN PRODUCT DETAIL -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: HD Image & Badges -->
            <div class="lg:col-span-6 space-y-4">
                <div class="relative overflow-hidden rounded-3xl bg-emerald-50 shadow-xl group">
                    <img referrerpolicy="no-referrer" src="{{ $plant->image_url }}" alt="{{ $plant->name }}" 
                         class="w-full h-[450px] sm:h-[520px] object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    @if($plant->badge)
                        <div class="absolute top-4 left-4 bg-botanical-800 text-white font-black text-xs px-3.5 py-1.5 rounded-full shadow-lg">
                            {{ $plant->badge }}
                        </div>
                    @endif

                    @if($plant->discount_percentage > 0)
                        <div class="absolute top-4 right-4 bg-carrot-500 text-white font-black text-sm px-3 py-1 rounded-full shadow-lg">
                            SAVE {{ $plant->discount_percentage }}%
                        </div>
                    @endif
                </div>

                <!-- Trust Guarantee Bar -->
                <div class="grid grid-cols-3 gap-3 text-center bg-emerald-50/70 p-4 rounded-2xl">
                    <div>
                        <span class="text-xl">🪴</span>
                        <h4 class="text-xs font-black text-botanical-900 mt-1">In-Pot Delivery</h4>
                        <p class="text-[10px] text-botanical-600 font-bold">Roots protected in moist soil</p>
                    </div>
                    <div>
                        <span class="text-xl">☀️</span>
                        <h4 class="text-xs font-black text-botanical-900 mt-1">100% Organic</h4>
                        <p class="text-[10px] text-botanical-600 font-bold">Zero synthetic chemicals</p>
                    </div>
                    <div>
                        <span class="text-xl">🛡️</span>
                        <h4 class="text-xs font-black text-botanical-900 mt-1">Live Arrival</h4>
                        <p class="text-[10px] text-botanical-600 font-bold">Healthy sapling guaranteed</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Information, Price in PKR & Add to Cart -->
            <div class="lg:col-span-6 space-y-6">
                
                <!-- Category & City -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('marketplace.index', ['category' => $plant->category->slug]) }}" 
                       class="bg-emerald-100/80 hover:bg-emerald-200 text-botanical-900 text-xs font-black px-3.5 py-1.5 rounded-full uppercase tracking-wider transition-colors">
                        {{ $plant->category->name }}
                    </a>
                    <span class="text-xs font-bold text-botanical-500">📍 Dispatched from {{ $plant->origin_city }}</span>
                </div>

                <!-- Title & Urdu Name -->
                <div>
                    <h1 class="text-3xl sm:text-4xl font-black text-botanical-950 leading-tight">
                        {{ $plant->name }}
                    </h1>
                    @if($plant->urdu_name)
                        <p class="text-lg font-black text-botanical-700 mt-1">{{ $plant->urdu_name }}</p>
                    @endif
                    @if($plant->scientific_name)
                        <p class="text-xs font-bold text-gray-400 italic mt-0.5">{{ $plant->scientific_name }}</p>
                    @endif
                </div>

                <!-- Rating & Reviews -->
                <div class="flex items-center gap-3">
                    <div class="flex text-amber-400 text-base font-black">
                        ★★★★★
                    </div>
                    <span class="text-xs font-black text-botanical-900">{{ $plant->rating }} / 5.0</span>
                    <span class="text-xs text-gray-400 font-bold">({{ $plant->reviews_count }} verified gardener reviews)</span>
                </div>

                <!-- Price Section in PKR -->
                <div class="bg-emerald-50/80 p-6 rounded-3xl">
                    <div class="flex items-baseline gap-3">
                        <span class="text-3xl sm:text-4xl font-black text-botanical-950">
                            {{ $plant->formatted_price }}
                        </span>
                        @if($plant->original_price_pkr)
                            <span class="text-lg text-gray-400 line-through font-bold">
                                {{ $plant->formatted_original_price }}
                            </span>
                            <span class="bg-carrot-500 text-white text-xs font-black px-3 py-1 rounded-full">
                                Save ₨ {{ number_format($plant->original_price_pkr - $plant->price_pkr) }} PKR
                            </span>
                        @endif
                    </div>
                    <p class="text-xs font-bold text-botanical-600 mt-1.5">
                        Tax included. Flat ₨ 200 delivery nationwide across Pakistan. Cash on Delivery accepted.
                    </p>
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <h3 class="text-sm font-black text-botanical-950 uppercase tracking-wider">About This Plant</h3>
                    <p class="text-sm font-bold text-gray-600 leading-relaxed">
                        {{ $plant->description }}
                    </p>
                </div>

                <!-- Horticultural Specs Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 bg-emerald-50/50 p-4 rounded-3xl text-xs font-bold">
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Container / Pot</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">🪴 {{ $plant->pot_size }}</span>
                    </div>
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Sunlight Needed</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">☀️ {{ $plant->sunlight }}</span>
                    </div>
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Watering Schedule</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">💧 {{ $plant->watering }}</span>
                    </div>
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Harvest Timeline</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">⏱️ {{ $plant->harvest_time }}</span>
                    </div>
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Growth Stage</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">🌱 {{ $plant->growth_stage }}</span>
                    </div>
                    <div class="p-3 bg-white rounded-2xl shadow-sm">
                        <span class="text-botanical-500 block text-[10px] uppercase font-black">Skill Level</span>
                        <span class="text-botanical-900 font-extrabold mt-0.5 block">⭐ {{ $plant->difficulty }}</span>
                    </div>
                </div>

                <!-- Add to Basket Action Form -->
                <form action="{{ route('cart.add') }}" method="POST" onsubmit="handleAddToCart(event, this)" class="space-y-4 pt-2">
                    @csrf
                    <input type="hidden" name="plant_id" value="{{ $plant->id }}">
                    
                    <div class="flex items-center gap-4">
                        <div class="flex items-center bg-emerald-50 rounded-2xl p-1 shadow-sm">
                            <button type="button" onclick="decrementDetailQty()" class="w-10 h-10 flex items-center justify-center font-black text-botanical-900 hover:bg-white rounded-xl text-lg">-</button>
                            <input type="number" id="detail-qty" name="quantity" value="1" min="1" max="50" class="w-14 text-center bg-transparent font-black text-base focus:outline-none">
                            <button type="button" onclick="incrementDetailQty()" class="w-10 h-10 flex items-center justify-center font-black text-botanical-900 hover:bg-white rounded-xl text-lg">+</button>
                        </div>

                        <button type="submit" 
                                class="flex-1 bg-gradient-to-r from-botanical-600 via-botanical-700 to-botanical-800 hover:from-botanical-700 hover:to-botanical-900 text-white font-black py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-0.5 text-base flex items-center justify-center gap-3">
                            <svg class="w-6 h-6 text-emeraldGlow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                            <span>Add to Plant Basket</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- RELATED PLANTS SECTION -->
        @if($relatedPlants->count() > 0)
            <div class="mt-20 pt-12 border-t border-emerald-100">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-2xl font-black text-botanical-950">More from {{ $plant->category->name }}</h2>
                        <p class="text-xs font-bold text-botanical-600">Complementary vegetables & plants to grow together</p>
                    </div>
                    <a href="{{ route('marketplace.index', ['category' => $plant->category->slug]) }}" class="text-xs font-black text-botanical-700 hover:text-botanical-900 underline">
                        View All {{ $plant->category->name }} ➔
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($relatedPlants as $rel)
                        <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg plant-card-hover p-4 flex flex-col justify-between">
                            <div class="h-44 rounded-2xl overflow-hidden mb-3">
                                <img referrerpolicy="no-referrer" src="{{ $rel->image_url }}" alt="{{ $rel->name }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <a href="{{ route('plants.show', $rel->slug) }}" class="font-black text-botanical-950 text-sm hover:text-botanical-700 transition-colors line-clamp-1">
                                    {{ $rel->name }}
                                </a>
                                <p class="text-xs font-bold text-botanical-600">{{ $rel->urdu_name }}</p>
                                <span class="text-sm font-black text-botanical-900 block mt-2">{{ $rel->formatted_price }}</span>
                            </div>
                            <a href="{{ route('plants.show', $rel->slug) }}" class="mt-3 block text-center bg-emerald-50 hover:bg-emerald-100 text-botanical-900 text-xs font-black py-2.5 rounded-xl transition-colors">
                                View Plant Details
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@push('scripts')
<script>
    function incrementDetailQty() {
        const input = document.getElementById('detail-qty');
        input.value = parseInt(input.value) + 1;
    }
    function decrementDetailQty() {
        const input = document.getElementById('detail-qty');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>
@endpush

@endsection
