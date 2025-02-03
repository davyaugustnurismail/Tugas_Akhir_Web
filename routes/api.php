<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodolistController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//
// Route::post('/register', RegisterController::class);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);


// Asli ini
Route::post('/register', [AuthController::class, 'register']);

// todos

Route::apiResource('/todos', TodolistController::class)->middleware('auth:sanctum');