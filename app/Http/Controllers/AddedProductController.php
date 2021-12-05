<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddedProduct;
use Response;

class AddedProductController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $addedProduct = new AddedProduct($request->all());

        $addedProduct->save();
        return Response::json($addedProduct, 201);
    }

    // READ
    public function index()
    {
        $addedProducts = AddedProduct::all();
        return Response::json($addedProducts, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $addedProduct = AddedProduct::findOrFail($request->id);
        $addedProduct->role = $request->role;

        $addedProduct->save();

        return Response::json($addedProduct, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $addedProduct = AddedProduct::destroy($request->id);
        return Response::json($addedProduct, 200);
    }
}
