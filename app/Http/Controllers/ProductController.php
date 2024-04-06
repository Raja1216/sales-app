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
            $product = new Product;
            $product->brand_id          = $request->brand_id ;
            $product->name              = $request->name;
            $product->added_by          = $request->added_by;
            $product->thumbnail_image   = $request->thumbnail_image;
            $product->currency_symbol   = $request->currency_symbol;
            $product->mrp               = $request->mrp;
            $product->is_wholesale      = $request->is_wholesale;
            $product->rating            = $request->rating;
            $product->rating_count      = $request->rating_count;
            $product->description       = $request->description;
            $product->video_link        = $request->video_link;
            $product->org_choice        = $request->org_choice;
            $product->best_selling      = $request->best_selling;
            $product->est_shipping_time = $request->est_shipping_time;
            $product->is_refurbished    = $request->is_refurbished;
            $product->is_in_cart        = $request->is_in_cart;
            $product->is_in_wishlist    = $request->is_in_wishlist;
            $product->meta_title        = $request->meta_title;
            $product->meta_description  = $request->meta_description;
            $product->meta_img          = $request->meta_img;

        if($product->save()){

            return response()->json($product, 201);
        }
        return response()->json("Something Went Wrong", 400);

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

            $product->brand_id          = $request->brand_id  || $product->brand_id;
            $product->name              = $request->name  || $product->name;
            $product->added_by          = $request->added_by  || $product->added_by;
            $product->thumbnail_image   = $request->thumbnail_image  || $product->thumbnail_image;
            $product->currency_symbol   = $request->currency_symbol || $product->currency_symbol;
            $product->mrp               = $request->mrp || $product->mrp;
            $product->is_wholesale      = $request->is_wholesale || $product->is_wholesale;
            $product->rating            = $request->rating || $product->rating;
            $product->rating_count      = $request->rating_count || $product->rating_count;
            $product->description       = $request->description || $product->description;
            $product->video_link        = $request->video_link || $product->video_link;
            $product->org_choice        = $request->org_choice || $product->org_choice;
            $product->best_selling      = $request->best_selling || $product->best_selling;
            $product->est_shipping_time = $request->est_shipping_time || $product->est_shipping_time;
            $product->is_refurbished    = $request->is_refurbished || $product->is_refurbished;
            $product->is_in_cart        = $request->is_in_cart || $product->is_in_cart;
            $product->is_in_wishlist    = $request->is_in_wishlist || $product->is_in_wishlist;
            $product->meta_title        = $request->meta_title || $product->meta_title;
            $product->meta_description  = $request->meta_description || $product->meta_description;
            $product->meta_img          = $request->meta_img || $product->meta_img;


            if($product->save()){
                return response()->json("Updated Successfully", 200);
            }
            return response()->json("Something Went Wrong", 400);

    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json("Deleted Successfully", 204);
    }
}
