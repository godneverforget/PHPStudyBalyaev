<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::middleware('auth:sanctum') ->get('/user', function (Request $request) {
    return $request ->user();
});

Route::get('/post', [PostController::class, 'index']); //вывод всех постов
Route::get('/post/{post}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store_']);
Route::put('/post/{id}', [PostController::class, 'update_']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);

