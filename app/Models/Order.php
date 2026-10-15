<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_phone',
        'customer_email',
        'shipping_city',
        'shipping_address',
        'payment_method',
        'delivery_notes',
        'subtotal_pkr',
        'shipping_fee_pkr',
        'total_pkr',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedTotalAttribute()
    {
        return '₨ ' . number_format($this->total_pkr) . ' PKR';
    }
}
