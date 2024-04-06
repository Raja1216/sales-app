<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

   public function products()
    {
        return $this->belongsToMany(Product::class, 'product_sellers')
            ->using(ProductSeller::class)
            ->withPivot('seller_stock', 'est_shipping_days', 'selling_price');
    }
}
