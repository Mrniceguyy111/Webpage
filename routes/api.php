<?php

use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostController::class)
        ->only(['show', 'index']);

    Route::apiResource('products', ProductController::class)
        ->only(['show', 'index']);

    Route::apiResource('orders', OrderController::class)
        ->only(['show', 'index']);
});
