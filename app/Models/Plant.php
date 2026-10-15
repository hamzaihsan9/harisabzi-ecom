<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'urdu_name',
        'scientific_name',
        'slug',
        'short_description',
        'description',
        'price_pkr',
        'original_price_pkr',
        'stock',
        'pot_size',
        'growth_stage',
        'harvest_time',
        'sunlight',
        'watering',
        'difficulty',
        'rating',
        'reviews_count',
        'badge',
        'image_url',
        'is_featured',
        'is_organic',
        'origin_city',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFormattedPriceAttribute()
    {
        return '₨ ' . number_format($this->price_pkr) . ' PKR';
    }

    public function getFormattedOriginalPriceAttribute()
    {
        return $this->original_price_pkr ? '₨ ' . number_format($this->original_price_pkr) . ' PKR' : null;
    }

    public function getDiscountPercentageAttribute()
    {
        if ($this->original_price_pkr && $this->original_price_pkr > $this->price_pkr) {
            return round((($this->original_price_pkr - $this->price_pkr) / $this->original_price_pkr) * 100);
        }
        return 0;
    }
}
