<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use Response;

class SubcategoryController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $subcategory = new Subcategory($request->all());

        $subcategory->save();
        return Response::json($subcategory, 201);
    }

    // READ
    public function index()
    {
        $subcategories = Subcategory::all();
        return Response::json($subcategories, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $subcategory = Subcategory::findOrFail($request->id);
        $subcategory->description = $request->description;
        $subcategory->name = $request->name;

        $subcategory->save();

        return Response::json($subcategory, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $subcategory = Subcategory::destroy($request->id);
        return Response::json($subcategory, 200);
    }
}