<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * Price >- Product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            // FK
            $table->foreignId('product_id')->unsigned();

            // atributes
            $table->id();
            $table->float('price');
            $table->boolean('active');
            $table->string('description');
            $table->timestamps();

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
        Schema::dropIfExists('prices');
    }
}
