<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use Response;

class PriceController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $price = new Price($request->all());

        $price->save();
        return Response::json($price, 201);
    }

    // READ
    public function index()
    {
        $prices = Price::all();
        return Response::json($prices, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $price = Price::findOrFail($request->id);
        $price->price = $request->price;
        $price->active = $request->active;
        $price->description = $request->description;

        $price->save();

        return Response::json($price, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $price = Price::destroy($request->id);
        return Response::json($price, 200);
    }
}
