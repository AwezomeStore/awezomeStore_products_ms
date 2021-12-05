<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class SubsubcategoryController extends Controller
{
   // get
    public function index()
    {
        $subcategories = Category::all();
        return Response::json($subcategories, 200);
    }

    // put
    public function store(Request $request)
    {
        $subcategory = new Category($request->all());

        $subcategory->save();
        return Response::json($subcategory, 201);
    }

    // update
    public function update(Request $request)
    {
        $subcategory = Category::findOrFail($request->id);
        $subcategory->description = $request->description;

        $subcategory->save();

        return Response::json($subcategory, 200);
    }

    // delete
    public function destroy(Request $request)
    {
        $subcategory = Category::destroy($request->id);
        return Response::json($subcategories, 200);
    }
}