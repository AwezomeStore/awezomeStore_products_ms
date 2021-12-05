<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopping;
use Response;

class ShoppingCartController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $shoppingCart = new ShoppingCart($request->all());

        $shoppingCart->save();
        return Response::json($shoppingCart, 201);
    }

    // READ
    public function index()
    {
        $shoppingCarts = ShoppingCart::all();
        return Response::json($shoppingCarts, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $shoppingCart = ShoppingCart::findOrFail($request->id);
        $shoppingCart->total_cost = $request->total_cost;

        $shoppingCart->save();

        return Response::json($shoppingCart, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $shoppingCart = ShoppingCart::destroy($request->id);
        return Response::json($shoppingCart, 200);
    }
}
