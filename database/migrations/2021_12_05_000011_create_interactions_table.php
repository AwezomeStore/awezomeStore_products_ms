<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * Interaction >- User
     * Interaction >- Product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions', function (Blueprint $table) {
            // FK
            $table->foreignId('product_id')->unsigned();
            $table->foreignId('user_id')->unsigned();

            // atributes
            $table->id();
            $table->integer('visits');
            $table->boolean('buy');
            $table->timestamps();

            /*@ Connect product_id with products table*/
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('interactions');
    }
}
