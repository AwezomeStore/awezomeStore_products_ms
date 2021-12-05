<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * AddedProduct >- Product
     * AddedProduct >- ShoppingCart
     *
     * @return void
     */
    public function up()
    {
        Schema::create('added_products', function (Blueprint $table) {
            // FK
            $table->foreignId('product_id')->unsigned();
            $table->foreignId('shopping_cart_id')->unsigned();

            //atributes
            $table->id();
            $table->timestamps();

            /*@ Connect product_id with products table*/
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            /*@ Connect shopping_cart_id with shopping_carts table*/
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('added_products');
    }
}
