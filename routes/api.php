<?php

use App\Http\Controllers\AuthContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthContoller::class, 'login']);
Route::get('/logout', [AuthContoller::class, 'logout'])->middleware('auth:sanctum');

// Register User
Route::post('/add-user', [UserController::class, 'store'])->middleware('auth:sanctum');
Route::get('/get-users', [UserController::class, 'index'])->middleware('auth:sanctum');


