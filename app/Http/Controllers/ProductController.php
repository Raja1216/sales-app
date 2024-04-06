<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('themes', 'brand','attributes','sellers','crossSellings')->get();
        return response()->json($products);
    }
    
    public function show($id)
    {
        $product = Product::with('themes', 'brand','attributes','sellers','crossSellings')->find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand_id'          => 'required|exists:brands,id',
            'name'              => 'required|string|max:255',
            'added_by'          => 'required|string|max:255',
            'thumbnail_image'   => 'required|url',
            'currency_symbol'   => 'required|string|max:10',
            'mrp'               => 'required|integer',
            'is_wholesale'      => 'required|boolean',
            'rating'            => 'required|numeric|min:0|max:5',
            'rating_count'      => 'required|integer|min:0',
            'description'       => 'required|string',
            'video_link'        => 'nullable|url',
            'org_choice'        => 'required|boolean',
            'best_selling'      => 'required|boolean',
            'est_shipping_time' => 'required|integer|min:0',
            'is_refurbished'    => 'required|boolean',
            'is_in_cart'        => 'required|boolean',
            'is_in_wishlist'    => 'required|boolean',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:255',
            'meta_img'          => 'nullable|url',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }
        

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'brand_id'          => 'required|exists:brands,id',
            'name'              => 'required|string|max:255',
            'added_by'          => 'required|string|max:255',
            'thumbnail_image'   => 'required|url',
            'currency_symbol'   => 'required|string|max:10',
            'mrp'               => 'required|integer',
            'is_wholesale'      => 'required|boolean',
            'rating'            => 'required|numeric|min:0|max:5',
            'rating_count'      => 'required|integer|min:0',
            'description'       => 'required|string',
            'video_link'        => 'nullable|url',
            'org_choice'        => 'required|boolean',
            'best_selling'      => 'required|boolean',
            'est_shipping_time' => 'required|integer|min:0',
            'is_refurbished'    => 'required|boolean',
            'is_in_cart'        => 'required|boolean',
            'is_in_wishlist'    => 'required|boolean',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:255',
            'meta_img'          => 'nullable|url',
        ]);
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Update the product
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json(null, 204);
    }
}
