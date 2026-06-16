<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merchant extends Authenticatable implements CanResetPassword
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
