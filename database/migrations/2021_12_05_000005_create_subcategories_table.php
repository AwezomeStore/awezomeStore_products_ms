<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * One to many relationship
     * Categories -< Subcategories
     * Subcategories -< SubcategoryProducts
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            // FK
            $table->foreignId('category_id')->unsigned();

            // atributes
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            /*@ Connect category_id with categories table*/
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
