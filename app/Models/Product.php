<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute')->withPivot('value');
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'product_sellers')
            ->using(ProductSeller::class)
            ->withPivot('seller_stock', 'est_shipping_days', 'selling_price');
    }

    public function crossSellings()
    {
        return $this->belongsToMany(CrossSelling::class, 'product_cross_selling');
    }

}
