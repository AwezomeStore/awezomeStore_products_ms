<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Response;

class CategoryController extends Controller
{
    // get
    public function index()
    {
        $categories = Category::all();
        return Response::json($categories, 200);
    }

    // put
    public function store(Request $request)
    {
        $category = new Category($request->all());

        $category->save();
        return Response::json($category, 201);
    }

    // update
    public function update(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->description = $request->description;

        $category->save();

        return Response::json($category, 200);
    }

    // delete
    public function destroy(Request $request)
    {
        $category = Category::destroy($request->id);
        return Response::json($categories, 200);
    }
}
