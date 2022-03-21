<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\MealsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/meals', [MealsController::class, 'store']);
Route::get('/meals', [MealsController::class, 'index']);
Route::get('/meals/{meal}', [MealsController::class, 'show']);

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food-item', [FoodController::class, 'show']);
