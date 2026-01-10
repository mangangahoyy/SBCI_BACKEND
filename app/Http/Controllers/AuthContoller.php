<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\HttpResponses as AppHttpResponses;

use function Laravel\Prompts\error;

class AuthContoller extends Controller
{
    use HttpResponses;

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Create Sanctum token
    $token = $user->createToken('API Token')->plainTextToken;
    $user->token = $token;

    return $this->success('Login successful', [
        'user' => new UserResource($user),
    ]);
}


    public function logout()
    {
        $user = Auth::user();
        if ($user) {
            $user->currentAccessToken()->delete();

            return $this->success('successfull',[
                'message' => 'You have successfully been logged out and your token has been removed'
            ]);
        } else {
            return $this->error('cant logout',true, 401);
        }
    }

}
