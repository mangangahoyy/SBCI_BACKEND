<?php

use App\Http\Controllers\AuthContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthContoller::class, 'login']);
Route::get('/logout', [AuthContoller::class, 'logout'])->middleware('auth:sanctum');



