<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:users', 'email:dns', 'regex:/gmail/'],
            'password' => ['required', 'min:8', 'confirmed'],
            'KTM' => 'required|mimes:jpg,jepg,png',
        ]);
        $ktm = $request->file('KTM');
        $path = $ktm->store('KTM');

        $password = Hash::make($request->password);

        $user = User::create([
            'nama' => $request->firstname . ' ' . $request->lastname,
            'email' => $request->email,
            'password' => $password,
            'KTM' => $path,
        ]);

        $token = $user->createToken('digilab-token')->plainTextToken;

        return response()->json([
            'message' => 'success',
            'data' => $user,
            'token' => $token
        ]);
    }
}
