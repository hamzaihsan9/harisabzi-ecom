<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellerListing extends Model
{
    protected $fillable = [
        'seller_name',
        'seller_phone',
        'seller_city',
        'nursery_or_farm_name',
        'plant_type',
        'variety_name',
        'proposed_price_pkr',
        'quantity_available',
        'details',
        'status',
    ];
}
