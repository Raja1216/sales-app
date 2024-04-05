<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('added_by');
            $table->string('thumbnail_image');
            $table->string('currency_symbol');
            $table->integer('mrp');
            $table->boolean('is_wholesale');
            $table->tinyInteger('rating');
            $table->tinyInteger('rating_count');
            $table->longText('description');
            $table->string('video_link');
            $table->boolean('org_choice');
            $table->boolean('best_selling');
            $table->integer('est_shipping_time');
            $table->boolean('is_refurbished');
            $table->boolean('is_in_cart');
            $table->boolean('is_in_wishlist');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
