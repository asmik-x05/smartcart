<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $cast = [
        'price' => 'decimal:2',
        "images" => "array"
    ];
    public function merchants()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
