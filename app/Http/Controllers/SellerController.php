<?php

namespace App\Http\Controllers;

use App\Models\SellerListing;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'seller_name' => 'required|string|max:120',
            'seller_phone' => 'required|string|max:25',
            'seller_city' => 'required|string|max:80',
            'nursery_or_farm_name' => 'nullable|string|max:150',
            'plant_type' => 'required|string|max:100',
            'variety_name' => 'required|string|max:150',
            'proposed_price_pkr' => 'required|numeric|min:50',
            'quantity_available' => 'required|numeric|min:1',
            'details' => 'required|string|max:1000',
        ]);

        SellerListing::create($validated);

        return redirect()->back()->with('seller_success', 'Thank you! Your plant listing application has been received. Our nursery team will contact you via WhatsApp/call within 24 hours to inspect and onboard your saplings.');
    }
}
