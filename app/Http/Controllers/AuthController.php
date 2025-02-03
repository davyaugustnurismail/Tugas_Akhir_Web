<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name, // Pastikan name ada di database
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'User registered successfully!',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Cek apakah email yang dimasukkan ada di database
    $user = User::where('email', $request->email)->first();

    // Cek apakah user ada dan password cocok
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'Invalid email or password',
        ], 401); // Unauthorized
    }

    // Hapus token lama dan buat token baru
    $user->tokens()->delete();
    $token = $user->createToken('auth_token')->plainTextToken;

    // Kirimkan respons dengan token dan user ke frontend
    return response()->json([
        'message' => 'Login successful!',
        'user' => $user,
        'token' => $token,
    ], 200);
}
public function logout(Request $request)
{
    // Mendapatkan user yang sedang login dari token
    $request->user()->tokens->each(function ($token) {
        $token->delete(); // Hapus token pengguna
    });

    return response()->json(['message' => 'Logged out successfully'], 200);
}

}
