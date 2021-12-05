<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Response;

class CommentController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $comment = new Comment($request->all());

        $comment->save();
        return Response::json($comment, 201);
    }

    // READ
    public function index()
    {
        $comments = Comment::all();
        return Response::json($comments, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $comment = Comment::findOrFail($request->id);
        $comment->comment = $request->comment;
        $comment->type = $request->type;
        $comment->level = $request->level;

        $comment->save();

        return Response::json($comment, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $comment = Comment::destroy($request->id);
        return Response::json($comment, 200);
    }
}
