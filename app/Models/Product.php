<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }

    public function crossSelling()
    {
        return $this->belongsToMany(Product::class, 'cross_sellings', 'product_id', 'id');
    }
}
