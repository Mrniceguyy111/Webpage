<?php

use App\Http\Controllers\Api\V1\AddressController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\PetsController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostController::class)
        ->only(['show', 'index']);

    Route::apiResource('products', ProductController::class)
        ->only(['show', 'index']);

    Route::apiResource('orders', OrderController::class)
        ->only(['show', 'index']);

    Route::apiResource('pets', PetsController::class)
        ->only(['show', 'index']);

    Route::apiResource('address', AddressController::class)
        ->only(['show', 'index']);

    Route::apiResource('users', UserController::class)
        ->only('show');
});
