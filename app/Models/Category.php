<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'icon', 'description', 'badge_color'];

    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
