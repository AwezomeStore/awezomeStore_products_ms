<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Response;

class ScoreController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $score = new Score($request->all());

        $score->save();
        return Response::json($score, 201);
    }

    // READ
    public function index()
    {
        $scores = Score::all();
        return Response::json($scores, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $score = Score::findOrFail($request->id);
        $score->score = $request->score;
        $price->comment = $request->comment;

        $score->save();

        return Response::json($score, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $score = Score::destroy($request->id);
        return Response::json($score, 200);
    }
}
