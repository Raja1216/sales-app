<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductData()
    {
        // Fetch product with its related data
        $product = Product::with('attributes', 'themes', 'brand',  'crossSelling.brand')->find(3);

        // Return the JSON response
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }
}
