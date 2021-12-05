<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Response;

class UserController extends Controller
{
    // CREATE
    public function store(Request $request)
    {
        $user = new User($request->all());

        $user->save();
        return Response::json($user, 201);
    }

    // READ
    public function index()
    {
        $users = User::all();
        return Response::json($users, 200);
    }

    // UPDATE
    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->role = $request->role;

        $user->save();

        return Response::json($user, 200);
    }

    // DELETE
    public function destroy(Request $request)
    {
        $user = User::destroy($request->id);
        return Response::json($user, 200);
    }
}
