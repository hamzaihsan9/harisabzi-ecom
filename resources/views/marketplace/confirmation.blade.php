@extends('layouts.app')

@section('title', 'Order Confirmed #' . $order->order_number . ' — GreenHarvest Plant Marketplace')

@section('content')

<section class="py-16 bg-[#f7fbf8]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Celebratory Card -->
        <div class="bg-white rounded-3xl border-4 border-botanical-200 shadow-xl overflow-hidden p-8 sm:p-12 text-center relative">
            
            <!-- Big Success Icon -->
            <div class="w-20 h-20 bg-gradient-to-tr from-botanical-600 to-emeraldGlow text-white rounded-3xl flex items-center justify-center mx-auto shadow-xl ring-8 ring-botanical-100 mb-6">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
            </div>

            <span class="bg-carrot-500 text-white text-xs font-black px-4 py-1.5 rounded-full uppercase tracking-wider inline-block mb-3">
                Order Confirmed & Logged
            </span>

            <h1 class="text-3xl sm:text-4xl font-black text-botanical-950">
                Mubarak! Your Plants Are Being Prepared 🌱
            </h1>
            <p class="text-sm sm:text-base font-bold text-botanical-600 mt-2 max-w-lg mx-auto">
                Thank you, <strong>{{ $order->customer_name }}</strong>. Our nursery specialists are packing your living vegetable plants with root moisture protection.
            </p>

            <!-- Order Number Badge -->
            <div class="inline-block bg-botanical-50 border-2 border-botanical-300 rounded-2xl px-6 py-3 my-6">
                <span class="text-xs font-bold text-botanical-600 block uppercase">Tracking / Order Reference:</span>
                <span class="text-2xl font-black text-botanical-950 font-mono tracking-wider">{{ $order->order_number }}</span>
            </div>

            <!-- Delivery Tracker Visual Steps -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 my-8 text-left bg-botanical-50/70 p-4 sm:p-6 rounded-2xl border border-botanical-200">
                <div class="p-2 border-l-4 border-botanical-600">
                    <span class="text-[10px] font-black uppercase text-botanical-600 block">Step 1</span>
                    <span class="text-xs font-black text-botanical-950">Confirmed ✓</span>
                    <span class="text-[10px] text-gray-500 block">Order logged</span>
                </div>
                <div class="p-2 border-l-4 border-botanical-600">
                    <span class="text-[10px] font-black uppercase text-botanical-600 block">Step 2</span>
                    <span class="text-xs font-black text-botanical-950">Root Packing</span>
                    <span class="text-[10px] text-gray-500 block">Moist soil shield</span>
                </div>
                <div class="p-2 border-l-4 border-botanical-400">
                    <span class="text-[10px] font-black uppercase text-botanical-400 block">Step 3</span>
                    <span class="text-xs font-black text-botanical-950">Dispatched</span>
                    <span class="text-[10px] text-gray-500 block">{{ $order->shipping_city }}</span>
                </div>
                <div class="p-2 border-l-4 border-gray-300">
                    <span class="text-[10px] font-black uppercase text-gray-400 block">Step 4</span>
                    <span class="text-xs font-black text-gray-600">Harvest Time</span>
                    <span class="text-[10px] text-gray-400 block">Fresh vegetables!</span>
                </div>
            </div>

            <!-- Invoice Details Table -->
            <div class="text-left border-2 border-botanical-100 rounded-2xl overflow-hidden mb-8">
                <div class="bg-botanical-900 text-white p-4 flex justify-between items-center text-xs font-black uppercase">
                    <span>Itemized Plants</span>
                    <span>Total (PKR)</span>
                </div>
                <div class="divide-y divide-botanical-100 p-4 space-y-3">
                    @foreach($order->items as $item)
                        <div class="flex justify-between items-center pt-2">
                            <div class="flex items-center gap-3">
                                @if($item->plant)
                                    <img src="{{ $item->plant->image_url }}" alt="{{ $item->plant_name }}" class="w-12 h-12 rounded-xl object-cover border border-botanical-200">
                                @endif
                                <div>
                                    <h4 class="font-black text-sm text-botanical-950">{{ $item->plant_name }}</h4>
                                    <p class="text-xs text-botanical-600 font-bold">Qty: {{ $item->quantity }} × ₨ {{ number_format($item->unit_price_pkr) }} PKR</p>
                                </div>
                            </div>
                            <span class="font-black text-sm text-botanical-950">
                                ₨ {{ number_format($item->subtotal_pkr) }} PKR
                            </span>
                        </div>
                    @endforeach
                </div>
                <div class="bg-botanical-50 p-4 border-t border-botanical-200 space-y-1.5 text-xs font-bold">
                    <div class="flex justify-between text-botanical-700">
                        <span>Subtotal:</span>
                        <span>₨ {{ number_format($order->subtotal_pkr) }} PKR</span>
                    </div>
                    <div class="flex justify-between text-botanical-700">
                        <span>Potted Delivery:</span>
                        <span>₨ {{ number_format($order->shipping_fee_pkr) }} PKR</span>
                    </div>
                    <div class="flex justify-between text-base font-black text-botanical-950 border-t border-botanical-200 pt-2">
                        <span>Grand Total Paid / Payable (PKR):</span>
                        <span class="text-lg text-botanical-700 font-black">₨ {{ number_format($order->total_pkr) }} PKR</span>
                    </div>
                </div>
            </div>

            <!-- Customer & Delivery Summary Box -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-left text-xs font-bold bg-white p-5 rounded-2xl border-2 border-botanical-100 shadow-sm mb-8">
                <div>
                    <span class="text-botanical-500 block text-[10px] uppercase font-black">Delivering To</span>
                    <p class="text-sm font-black text-botanical-950 mt-1">{{ $order->customer_name }}</p>
                    <p class="text-botanical-700">{{ $order->customer_phone }}</p>
                    <p class="text-gray-500 mt-1">{{ $order->shipping_address }}, {{ $order->shipping_city }}</p>
                </div>
                <div>
                    <span class="text-botanical-500 block text-[10px] uppercase font-black">Payment Details</span>
                    <p class="text-sm font-black text-botanical-950 mt-1">{{ $order->payment_method }}</p>
                    <p class="text-emerald-700 font-black mt-1">Amount Due on Delivery: ₨ {{ number_format($order->total_pkr) }} PKR</p>
                    @if($order->delivery_notes)
                        <p class="text-gray-500 italic mt-1">Note: {{ $order->delivery_notes }}</p>
                    @endif
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('marketplace.index') }}" 
                   class="bg-gradient-to-r from-botanical-600 to-botanical-800 hover:from-botanical-700 hover:to-botanical-900 text-white font-black py-3.5 px-8 rounded-2xl shadow-lg transition-transform transform hover:-translate-y-0.5 flex items-center gap-2">
                    <span>Back to Marketplace</span>
                    <span>🌿</span>
                </a>
                <button onclick="window.print()" class="bg-botanical-100 hover:bg-botanical-200 text-botanical-900 font-black py-3.5 px-6 rounded-2xl border border-botanical-300">
                    Print Invoice 📄
                </button>
            </div>

        </div>

    </div>
</section>

@endsection
