<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * SubcategoryProduct -< Subcategory
     * SubcategoryProduct -< Product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_products', function (Blueprint $table) {
            // FK
            $table->foreignId('subcategory_id')->unsigned();
            $table->foreignId('product_id')->unsigned();

            // atributes
            $table->id();
            $table->timestamps();

            /*@ Connect subcategory_id with subcategories table*/
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            /*@ Connect product_id with products table*/
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategory_products');
    }
}
