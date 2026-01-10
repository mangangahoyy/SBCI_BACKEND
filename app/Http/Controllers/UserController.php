<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
        {
        $data = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mname' => 'nullable|string|max:255',
            'extname' => 'nullable|string|max:255',
            'sex' => 'required|string|max:10',
            'role' => 'required|string|max:50',
            'program_id' => 'exists:programs,id',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Hash the password
        $data['password'] = bcrypt($data['password']);

        // Create the user
        $user = User::create($data);

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'user' => new UserResource($user)
        ], 201);
    }

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }
}
