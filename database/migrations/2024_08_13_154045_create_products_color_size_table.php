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
        Schema::create('products_color_size', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_color_id')->unsigned();
            $table->foreign('product_color_id')->references('id')->on('products_colors');
            $table->bigInteger('product_size_id')->unsigned();
            $table->foreign('product_size_id')->references('id')->on('products_sizes');
            $table->integer('quantity');
            $table->decimal('price_two',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_color_size');
    }
};
