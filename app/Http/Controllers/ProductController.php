<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Response;

class ProductController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $product = new Product($request->all());

        $product->save();
        return Response::json($product, 201);
    }

    // READ
    public function index()
    {
        $products = Product::all();
        return Response::json($products, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;

        $product->save();

        return Response::json($product, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $product = Product::destroy($request->id);
        return Response::json($product, 200);
    }
}
