@extends('layouts.app')

@section('title', 'Cart | Hari Sabzi')

@section('content')

<section class="py-12 bg-[#f7fbf8]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-8">
            <div>
                <a href="{{ route('marketplace.index') }}" class="text-xs font-black text-botanical-600 hover:text-botanical-800 flex items-center gap-1 mb-1">
                    ← Continue Shopping
                </a>
                <h1 class="text-3xl font-black text-botanical-950">Your Live Plant Basket 🌿</h1>
            </div>
            @if(count($cart) > 0)
                <a href="{{ route('cart.clear') }}" class="text-xs font-black text-red-500 hover:text-red-700 underline">
                    Clear Basket
                </a>
            @endif
        </div>

        @if(count($cart) > 0)
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left: Items Table -->
                <div class="lg:col-span-8 bg-white rounded-3xl shadow-sm p-6 sm:p-8 space-y-4">
                    <div class="divide-y divide-emerald-50">
                        @foreach($cart as $id => $item)
                            <div class="py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="w-20 h-20 rounded-2xl object-cover shadow-sm">
                                    <div>
                                        <h3 class="font-black text-base text-botanical-950">{{ $item['name'] }}</h3>
                                        <p class="text-xs font-bold text-botanical-600">{{ $item['urdu_name'] }}</p>
                                        <span class="text-xs font-bold bg-emerald-100/70 text-botanical-900 px-3 py-1 rounded-full inline-block mt-1">
                                            🪴 {{ $item['pot_size'] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto">
                                    <!-- Qty -->
                                    <form action="{{ route('cart.update') }}" method="POST" class="flex items-center rounded-2xl bg-emerald-50 shadow-sm p-1">
                                        @csrf
                                        <input type="hidden" name="plant_id" value="{{ $id }}">
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] - 1 }}" class="px-3 py-1 font-black text-botanical-800 hover:bg-white rounded-xl">-</button>
                                        <span class="px-3 py-1 text-xs font-black">{{ $item['quantity'] }}</span>
                                        <button type="submit" name="quantity" value="{{ $item['quantity'] + 1 }}" class="px-3 py-1 font-black text-botanical-800 hover:bg-white rounded-xl">+</button>
                                    </form>

                                    <!-- Subtotal -->
                                    <span class="font-black text-base text-botanical-900 whitespace-nowrap">
                                        ₨ {{ number_format($item['price_pkr'] * $item['quantity']) }} PKR
                                    </span>

                                    <!-- Delete -->
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="plant_id" value="{{ $id }}">
                                        <button type="submit" class="text-red-400 hover:text-red-600 p-1">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Summary Card -->
                <div class="lg:col-span-4 bg-white rounded-3xl shadow-sm p-6 sm:p-8 space-y-4">
                    <h3 class="text-lg font-black text-botanical-950 pb-3 border-b border-emerald-50">Price Breakdown</h3>
                    
                    <div class="space-y-2.5 text-xs font-bold">
                        <div class="flex justify-between text-botanical-700">
                            <span>Subtotal:</span>
                            <span class="font-black">₨ {{ number_format($subtotal) }} PKR</span>
                        </div>
                        <div class="flex justify-between text-botanical-700">
                            <span>Delivery:</span>
                            <span class="font-black">₨ {{ number_format($shipping) }} PKR</span>
                        </div>
                        <div class="flex justify-between text-base font-black text-botanical-950 border-t border-emerald-100 pt-3">
                            <span>Total Payable:</span>
                            <span class="text-xl text-botanical-700 font-black">₨ {{ number_format($total) }} PKR</span>
                        </div>
                    </div>

                    <a href="{{ route('checkout.index') }}" 
                       class="w-full bg-gradient-to-r from-botanical-600 to-botanical-800 hover:from-botanical-700 hover:to-botanical-900 text-white font-black py-4 px-6 rounded-2xl shadow-lg flex items-center justify-center gap-2 text-sm mt-4">
                        <span>Proceed to Checkout</span>
                        <span>➔</span>
                    </a>
                </div>

            </div>
        @else
            <div class="bg-white rounded-3xl p-16 text-center shadow-sm max-w-lg mx-auto">
                <span class="text-6xl block mb-3">🪴</span>
                <h3 class="text-2xl font-black text-botanical-950">Your Basket is Empty</h3>
                <p class="text-xs font-bold text-botanical-600 mt-2 mb-6">Choose from carrot plants, cherry tomatoes, and fresh herbs to get started!</p>
                <a href="{{ route('marketplace.index') }}" class="bg-botanical-700 text-white font-black px-6 py-3.5 rounded-2xl shadow-lg">
                    Explore Plant Market ➔
                </a>
            </div>
        @endif

    </div>
</section>

@endsection
