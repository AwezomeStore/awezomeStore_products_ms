<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\InteractionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    /**
     * User
     */
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user', [UserController::class, 'store']);
    Route::put('/user', [UserController::class, 'update']);
    Route::delete('/user', [UserController::class, 'destroy']);

    /**
     * Product
     */
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'store']);
    Route::put('/product', [ProductController::class, 'update']);
    Route::delete('/product', [ProductController::class, 'destroy']);

    /**
     * ShoppingCart
     */
    Route::get('/shopping-cart', [ShoppingCartController::class, 'index']);
    Route::post('/shopping-cart', [ShoppingCartController::class, 'store']);
    Route::put('/shopping-cart', [ShoppingCartController::class, 'update']);
    Route::delete('/shopping-cart', [ShoppingCartController::class, 'destroy']);

    /**
     * Category
     */
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::put('/category', [CategoryController::class, 'update']);
    Route::delete('/category', [CategoryController::class, 'destroy']);

    /**
     * Subcategory
     */
    Route::get('/subcategory', [SubcategoryController::class, 'index']);
    Route::post('/subcategory', [SubcategoryController::class, 'store']);
    Route::put('/subcategory', [SubcategoryController::class, 'update']);
    Route::delete('/subcategory', [SubcategoryController::class, 'destroy']);

    /**
     * Comment
     */
    Route::get('/comment', [CommentController::class, 'index']);
    Route::post('/comment', [CommentController::class, 'store']);
    Route::put('/comment', [CommentController::class, 'update']);
    Route::delete('/comment', [CommentController::class, 'destroy']);

    /**
     * Price
     */
    Route::get('/price', [PriceController::class, 'index']);
    Route::post('/price', [PriceController::class, 'store']);
    Route::put('/price', [PriceController::class, 'update']);
    Route::delete('/price', [PriceController::class, 'destroy']);


    /**
     * Score
     */
    Route::get('/score', [ScoreController::class, 'index']);
    Route::post('/score', [ScoreController::class, 'store']);
    Route::put('/score', [ScoreController::class, 'update']);
    Route::delete('/score', [ScoreController::class, 'destroy']);

    /**
     * Interaction
     */
    Route::get('/interaction', [InteractionController::class, 'index']);
    Route::post('/interaction', [InteractionController::class, 'store']);
    Route::put('/interaction', [InteractionController::class, 'update']);
    Route::delete('/interaction', [InteractionController::class, 'destroy']);
});