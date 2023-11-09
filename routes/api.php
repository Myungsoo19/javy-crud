<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/add-book', [MainController::class,'addBook']);
Route::get('/getAllBook', [MainController::class,'getBook']);
Route::post('/update-Book', [MainController::class,'updateBook']);
Route::post('/delete-Book', [MainController::class,'deleteBook']);
