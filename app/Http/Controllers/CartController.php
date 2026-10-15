<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price_pkr'] * $item['quantity'];
        }
        $shipping = $subtotal > 0 ? 200 : 0;
        $total = $subtotal + $shipping;

        return view('marketplace.cart', compact('cart', 'subtotal', 'shipping', 'total'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'plant_id' => 'required|exists:plants,id',
            'quantity' => 'nullable|integer|min:1|max:50',
        ]);

        $plant = Plant::findOrFail($request->input('plant_id'));
        $qty = (int)$request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if (isset($cart[$plant->id])) {
            $cart[$plant->id]['quantity'] += $qty;
        } else {
            $cart[$plant->id] = [
                'id' => $plant->id,
                'name' => $plant->name,
                'urdu_name' => $plant->urdu_name,
                'slug' => $plant->slug,
                'image_url' => $plant->image_url,
                'pot_size' => $plant->pot_size,
                'price_pkr' => $plant->price_pkr,
                'quantity' => $qty,
            ];
        }

        session()->put('cart', $cart);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => "Added {$plant->name} to cart!",
                'cart_count' => $this->getCartCount(),
                'cart_subtotal' => $this->getCartSubtotal(),
                'cart' => $cart,
            ]);
        }

        return redirect()->back()->with('success', "{$plant->name} added to your plant basket!");
    }

    public function update(Request $request)
    {
        $request->validate([
            'plant_id' => 'required|exists:plants,id',
            'quantity' => 'required|integer|min:1|max:50',
        ]);

        $id = $request->input('plant_id');
        $qty = (int)$request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $qty;
            session()->put('cart', $cart);
        }

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'cart_count' => $this->getCartCount(),
                'cart_subtotal' => $this->getCartSubtotal(),
                'item_total' => '₨ ' . number_format($cart[$id]['price_pkr'] * $qty) . ' PKR',
                'cart' => $cart,
            ]);
        }

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function remove(Request $request)
    {
        $id = $request->input('plant_id');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Plant removed from cart.',
                'cart_count' => $this->getCartCount(),
                'cart_subtotal' => $this->getCartSubtotal(),
                'cart' => $cart,
            ]);
        }

        return redirect()->back()->with('success', 'Plant removed from cart.');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Basket cleared.');
    }

    private function getCartCount(): int
    {
        $cart = session()->get('cart', []);
        return array_sum(array_column($cart, 'quantity'));
    }

    private function getCartSubtotal(): int
    {
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price_pkr'] * $item['quantity'];
        }
        return $total;
    }
}
