<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('users.index', compact('users'));
    }

    // API: List semua user
    public function apiIndex()
    {
        $users = \App\Models\User::all();
        return response()->json($users);
    }

    // API: Detail user
    public function apiShow($id)
    {
        $user = \App\Models\User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Not found'], 404);
        }
        return response()->json($user);
    }

    // API: Update user
    public function apiUpdate(Request $request, $id)
    {
        $user = \App\Models\User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Not found'], 404);
        }
        $user->update($request->all());
        return response()->json($user);
    }
}

