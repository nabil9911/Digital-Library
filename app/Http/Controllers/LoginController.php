<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        $isPasswordMatch = Hash::check($request->password, $user->password);

        if (!$isPasswordMatch) {
            return response()->json([
                'messasge' => 'error',
                'errors' => "password doesn't match",
            ]);
        }
        $token = $user->createToken('digilab-token')->plainTextToken;

        return response()->json([
            'message' => 'Success',
            'data' => $user,
            'token' => $token
        ]);
    }
}
