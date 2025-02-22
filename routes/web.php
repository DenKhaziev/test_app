<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/sales', [MainController::class, 'sales']);
Route::get('/orders', [MainController::class, 'orders']);
Route::get('/stocks', [MainController::class, 'stocks']);
Route::get('/incomes', [MainController::class, 'incomes']);
