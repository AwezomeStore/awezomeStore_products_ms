<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interaction;
use Response;

class InteractionController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $interaction = new Interaction($request->all());

        $interaction->save();
        return Response::json($interaction, 201);
    }

    // READ
    public function index()
    {
        $interactions = Interaction::all();
        return Response::json($interactions, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $interaction = Interaction::findOrFail($request->id);
        $interaction->visits = $request->visits;
        $interaction->buy = $request->buy;

        $interaction->save();

        return Response::json($interaction, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $interaction = Interaction::destroy($request->id);
        return Response::json($interaction, 200);
    }
}
