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
        Schema::create('cross_sellings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail_image');
            $table->decimal('mrp', 10, 2);
            $table->integer('rating');
            $table->integer('sales');
            $table->boolean('is_wholesale');
            $table->boolean('org_choice');
            $table->boolean('best_selling');
            $table->decimal('carbon_footprint', 10, 2)->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cross_sellings');
    }
};
