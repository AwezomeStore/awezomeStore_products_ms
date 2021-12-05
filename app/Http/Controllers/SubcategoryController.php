<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsubsubcategory;
use Response;

class SubcategoryController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $subcategory = new Subsubcategory($request->all());

        $subcategory->save();
        return Response::json($subcategory, 201);
    }

    // READ
    public function index()
    {
        $subcategories = Subsubcategory::all();
        return Response::json($subcategories, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $subcategory = Subsubcategory::findOrFail($request->id);
        $subcategory->description = $request->description;
        $subcategory->name = $request->name;

        $subcategory->save();

        return Response::json($subcategory, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $subcategory = Subsubcategory::destroy($request->id);
        return Response::json($subcategory, 200);
    }
}