<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * Comment >- Product
     * Comment >- User
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // FK
            $table->foreignId('product_id')->unsigned();
            $table->foreignId('user_id')->unsigned();

            // atributes
            $table->id();
            $table->string('comment');
            $table->integer('type');
            $table->integer('level');
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
        Schema::dropIfExists('comments');
    }
}
