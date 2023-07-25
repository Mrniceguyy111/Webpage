<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\{
    DefaultController,
    UserController
};

use App\Http\Controllers\{
    Controller,
    PostController,
    ShopController,
    ShoppingCartController
};

use App\Http\Livewire\Backend\{
    Pets,
    Posts,
    Shop,
    SystemConfig,
    Userlist,
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('memberships', function () {
    return view('website.theme-1.membership');
});


Route::get('posts', [PostController::class, 'index'])
    ->name('posts.index');




Route::get('post/{postCategory:slug}/{post:slug}', [PostController::class, 'view'])
    ->name('post.show');

Route::prefix('shop')->group(function () {
    Route::get('{animals:name}', [ShopController::class, 'view'])
        ->name('shop.animal');

    Route::get('{animal:name}/{animalCategory:slug}', [ShopController::class, 'category'])
        ->name('shop.category');
    Route::get('{animal:name}/{animalCategory:slug}/{product:slug}', [ShopController::class, 'product'])
        ->name('shop.product');
});

Route::prefix('cart')->group(function () {
    Route::get('view', [ShoppingCartController::class, 'view'])
        ->name('cart.view');
    Route::get('payment-method', [ShoppingCartController::class, 'selectMethod'])
        ->name('cart.method');
});

/* Dashboard */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DefaultController::class, 'index'])
        ->name('dashboard')
        ->middleware(["auth"]);

    Route::get('/mis-mascotas', Pets::class)
        ->name('pets.view');

    Route::prefix('staff')->group(function () {

        Route::get('/usuarios', Userlist::class)->name('users.index');

        Route::get('/products', Shop::class)->name('purchases')
            ->middleware(["auth"]);

        Route::get('/post', Posts::class)
            ->name('post.view')
            ->middleware(["auth"]);
        Route::get('/config', SystemConfig::class)
            ->name('system.config');
    });
});
