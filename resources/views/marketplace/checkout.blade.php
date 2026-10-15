@extends('layouts.app')

@section('title', 'Checkout — GreenHarvest Plant Marketplace')

@section('content')

<section class="py-12 bg-[#f7fbf8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('marketplace.index') }}" class="text-xs font-black text-botanical-600 hover:text-botanical-800 flex items-center gap-1.5 mb-2">
                <span>← Back to Plants Market</span>
            </a>
            <h1 class="text-3xl sm:text-4xl font-black text-botanical-950">
                Complete Your Plant Order 🪴
            </h1>
            <p class="text-xs sm:text-sm font-bold text-botanical-600">
                Safe potted packaging • Cash on Delivery across Pakistan (All amounts in PKR)
            </p>
        </div>

        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left: Shipping & Payment Form -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- Customer Information Card -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border-2 border-botanical-100 shadow-sm space-y-4">
                        <div class="flex items-center gap-2.5 pb-3 border-b border-botanical-100">
                            <span class="text-xl">👤</span>
                            <h2 class="text-lg font-black text-botanical-950">1. Customer & Delivery Contact</h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-black text-botanical-800 mb-1">Full Name *</label>
                                <input type="text" name="customer_name" value="{{ old('customer_name') }}" required placeholder="e.g. Hamza Ihsan" 
                                       class="w-full px-4 py-3 rounded-xl border-2 border-botanical-200 font-bold text-sm focus:border-botanical-600 focus:outline-none">
                                @error('customer_name') <span class="text-xs text-red-500 font-bold">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-black text-botanical-800 mb-1">WhatsApp / Phone Number *</label>
                                <input type="tel" name="customer_phone" value="{{ old('customer_phone') }}" required placeholder="0344-6751031" 
                                       class="w-full px-4 py-3 rounded-xl border-2 border-botanical-200 font-bold text-sm focus:border-botanical-600 focus:outline-none">
                                @error('customer_phone') <span class="text-xs text-red-500 font-bold">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-black text-botanical-800 mb-1">Email Address (Optional)</label>
                            <input type="email" name="customer_email" value="{{ old('customer_email') }}" placeholder="hamza@example.com" 
                                   class="w-full px-4 py-3 rounded-xl border-2 border-botanical-200 font-bold text-sm focus:border-botanical-600 focus:outline-none">
                        </div>
                    </div>

                    <!-- Delivery Address Card -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border-2 border-botanical-100 shadow-sm space-y-4">
                        <div class="flex items-center gap-2.5 pb-3 border-b border-botanical-100">
                            <span class="text-xl">📍</span>
                            <h2 class="text-lg font-black text-botanical-950">2. Delivery Location (Pakistan)</h2>
                        </div>

                        <div>
                            <label class="block text-xs font-black text-botanical-800 mb-1">Destination City *</label>
                            <select name="shipping_city" required class="w-full px-4 py-3 rounded-xl border-2 border-botanical-200 font-bold text-sm focus:border-botanical-600 focus:outline-none bg-white">
                                <option value="Lahore">Lahore (Same Day / Next Day Courier)</option>
                                <option value="Islamabad">Islamabad (1-2 Days)</option>
                                <option value="Rawalpindi">Rawalpindi (1-2 Days)</option>
                                <option value="Karachi">Karachi (2-3 Days Potted Express)</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Multan">Multan</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Sialkot">Sialkot</option>
                                <option value="Other City in Pakistan">Other City in Pakistan</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-black text-botanical-800 mb-1">Complete Street / House Address *</label>
                            <textarea name="shipping_address" required rows="3" placeholder="House #, Street #, Sector / Block, Colony, Landmark..." 
                                      class="w-full px-4 py-3 rounded-xl border-2 border-botanical-200 font-bold text-sm focus:border-botanical-600 focus:outline-none">{{ old('shipping_address') }}</textarea>
                            @error('shipping_address') <span class="text-xs text-red-500 font-bold">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-black text-botanical-800 mb-1">Special Delivery Instructions</label>
                            <input type="text" name="delivery_notes" placeholder="e.g. Ring bell twice, deliver after 2 PM..." 
                                   class="w-full px-4 py-2.5 rounded-xl border-2 border-botanical-200 font-bold text-xs focus:border-botanical-600 focus:outline-none">
                        </div>
                    </div>

                    <!-- Payment Method Card -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border-2 border-botanical-100 shadow-sm space-y-4">
                        <div class="flex items-center gap-2.5 pb-3 border-b border-botanical-100">
                            <span class="text-xl">💳</span>
                            <h2 class="text-lg font-black text-botanical-950">3. Payment Method (PKR)</h2>
                        </div>

                        <div class="space-y-3">
                            <label class="flex items-center gap-3 p-4 rounded-2xl border-2 border-botanical-500 bg-botanical-50/70 cursor-pointer">
                                <input type="radio" name="payment_method" value="Cash on Delivery (COD)" checked class="w-4 h-4 text-botanical-600 focus:ring-botanical-500">
                                <div class="flex-1">
                                    <span class="font-black text-sm text-botanical-950 block">Cash on Delivery (COD)</span>
                                    <span class="text-xs font-bold text-botanical-600">Pay cash in PKR when your plants arrive safely at your doorstep</span>
                                </div>
                                <span class="text-2xl">💵</span>
                            </label>

                            <label class="flex items-center gap-3 p-4 rounded-2xl border-2 border-botanical-200 hover:border-botanical-400 cursor-pointer transition-colors">
                                <input type="radio" name="payment_method" value="JazzCash / EasyPaisa" class="w-4 h-4 text-botanical-600 focus:ring-botanical-500">
                                <div class="flex-1">
                                    <span class="font-black text-sm text-botanical-950 block">JazzCash / EasyPaisa</span>
                                    <span class="text-xs font-bold text-gray-500">Instant mobile wallet transfer confirmation</span>
                                </div>
                                <span class="text-2xl">📱</span>
                            </label>

                            <label class="flex items-center gap-3 p-4 rounded-2xl border-2 border-botanical-200 hover:border-botanical-400 cursor-pointer transition-colors">
                                <input type="radio" name="payment_method" value="Bank Transfer" class="w-4 h-4 text-botanical-600 focus:ring-botanical-500">
                                <div class="flex-1">
                                    <span class="font-black text-sm text-botanical-950 block">Direct Bank Transfer</span>
                                    <span class="text-xs font-bold text-gray-500">HBL, Meezan Bank, or Standard Chartered (IBFT)</span>
                                </div>
                                <span class="text-2xl">🏦</span>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Right: Order Summary Sticky Card in PKR -->
                <div class="lg:col-span-5 sticky top-28 space-y-4">
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border-2 border-botanical-200 shadow-xl space-y-6">
                        <div class="flex justify-between items-center pb-4 border-b border-botanical-100">
                            <h2 class="text-xl font-black text-botanical-950">Order Summary</h2>
                            <span class="bg-botanical-100 text-botanical-800 text-xs font-black px-2.5 py-1 rounded-full">
                                {{ count($cart) }} Items
                            </span>
                        </div>

                        <!-- Item list -->
                        <div class="max-h-64 overflow-y-auto space-y-3 pr-1">
                            @foreach($cart as $item)
                                <div class="flex items-center justify-between gap-3 text-xs font-bold">
                                    <div class="flex items-center gap-2.5 truncate">
                                        <img referrerpolicy="no-referrer" src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 rounded-xl object-cover border border-botanical-300">
                                        <div class="truncate">
                                            <p class="font-black text-botanical-950 truncate">{{ $item['name'] }}</p>
                                            <p class="text-botanical-600 text-[10px]">Qty: {{ $item['quantity'] }} × ₨ {{ number_format($item['price_pkr']) }} PKR</p>
                                        </div>
                                    </div>
                                    <span class="font-black text-botanical-900 whitespace-nowrap">
                                        ₨ {{ number_format($item['price_pkr'] * $item['quantity']) }} PKR
                                    </span>
                                </div>
                            @endforeach
                        </div>

                        <!-- Calculations in PKR -->
                        <div class="space-y-2.5 border-t border-botanical-100 pt-4 text-xs font-bold">
                            <div class="flex justify-between text-botanical-700">
                                <span>Subtotal (Live Plants):</span>
                                <span class="font-black">₨ {{ number_format($subtotal) }} PKR</span>
                            </div>
                            <div class="flex justify-between text-botanical-700">
                                <span>Potted Safe Shipping:</span>
                                <span class="font-black">₨ {{ number_format($shipping) }} PKR</span>
                            </div>
                            <div class="flex justify-between text-base font-black text-botanical-950 border-t-2 border-botanical-200 pt-3">
                                <span>Total Payable (PKR):</span>
                                <span class="text-xl text-botanical-700 font-black">₨ {{ number_format($total) }} PKR</span>
                            </div>
                        </div>

                        <!-- Submit Order Button -->
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-botanical-600 via-botanical-700 to-botanical-800 hover:from-botanical-700 hover:to-botanical-900 text-white font-black py-4 px-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-0.5 text-base flex items-center justify-center gap-2">
                            <span>Confirm & Place Order</span>
                            <span>➔</span>
                        </button>

                        <div class="flex items-center justify-center gap-2 text-[11px] font-bold text-botanical-600 text-center">
                            <span>🌱</span>
                            <span>Fresh arrival & root integrity guaranteed upon delivery</span>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>

@endsection
