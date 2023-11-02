<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id','product_id')->withPivot('user_id','quantity');
    }

    public function orderProducts()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('product_id', 'quantity');
    }
}
