<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * Product -< Price
     * Product -< AddedProduct
     * Product -< Comment
     * Product -< Interaction
     * Product -< SubcategoryProduct
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // FK
            $table->foreignId('user_id')->unsigned();

            // atributes
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('stock');
            $table->string('img_info');
            $table->float('range');
            $table->timestamps();

            /*@ Connect user_id with users table*/
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
