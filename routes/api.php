<?php

use App\Http\Controllers\Api\IncomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources(['sales' => SaleController::class]);
Route::apiResources(['orders' => OrderController::class]);
Route::apiResources(['stocks' => StockController::class]);
Route::apiResources(['incomes' => IncomeController::class]);

