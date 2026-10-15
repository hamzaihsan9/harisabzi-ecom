<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('marketplace.index')->with('warning', 'Your plant basket is empty. Please add plants before checking out.');
        }

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price_pkr'] * $item['quantity'];
        }
        $shipping = 200; // Flat nursery delivery across Lahore / Punjab
        $total = $subtotal + $shipping;

        return view('marketplace.checkout', compact('cart', 'subtotal', 'shipping', 'total'));
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('marketplace.index')->with('error', 'Your cart is empty.');
        }

        $request->validate([
            'customer_name' => 'required|string|max:120',
            'customer_phone' => 'required|string|max:25',
            'customer_email' => 'nullable|email|max:150',
            'shipping_city' => 'required|string|max:80',
            'shipping_address' => 'required|string|min:10|max:500',
            'payment_method' => 'required|string|in:Cash on Delivery (COD),JazzCash / EasyPaisa,Bank Transfer',
            'delivery_notes' => 'nullable|string|max:500',
        ]);

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price_pkr'] * $item['quantity'];
        }
        $shipping = 200;
        $total = $subtotal + $shipping;

        $orderNumber = 'HS-' . strtoupper(Str::random(3)) . '-' . mt_rand(1000, 9999);

        $order = Order::create([
            'order_number' => $orderNumber,
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_email' => $request->input('customer_email'),
            'shipping_city' => $request->input('shipping_city'),
            'shipping_address' => $request->input('shipping_address'),
            'payment_method' => $request->input('payment_method'),
            'delivery_notes' => $request->input('delivery_notes'),
            'subtotal_pkr' => $subtotal,
            'shipping_fee_pkr' => $shipping,
            'total_pkr' => $total,
            'status' => 'Confirmed & In Packing',
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'plant_id' => $item['id'],
                'plant_name' => $item['name'],
                'unit_price_pkr' => $item['price_pkr'],
                'quantity' => $item['quantity'],
                'subtotal_pkr' => $item['price_pkr'] * $item['quantity'],
            ]);
        }

        // Clear cart
        session()->forget('cart');

        return redirect()->route('orders.confirmation', $order->order_number);
    }

    public function confirmation($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->with('items.plant')->firstOrFail();
        return view('marketplace.confirmation', compact('order'));
    }
}
