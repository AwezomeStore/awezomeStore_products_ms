<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubsubcategoryProductProduct;
use Response;

class SubcategoryProductProductController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $subcategoryProduct = new SubsubcategoryProductProduct($request->all());

        $subcategoryProduct->save();
        return Response::json($subcategoryProduct, 201);
    }

    // READ
    public function index()
    {
        $subcategoryProducts = SubsubcategoryProductProduct::all();
        return Response::json($subcategoryProducts, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $subcategoryProduct = SubsubcategoryProductProduct::findOrFail($request->id);
        $subcategoryProduct->description = $request->description;

        $subcategoryProduct->save();

        return Response::json($subcategoryProduct, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $subcategoryProduct = SubsubcategoryProductProduct::destroy($request->id);
        return Response::json($subcategoryProduct, 200);
    }
}
