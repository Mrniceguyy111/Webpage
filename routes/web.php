<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\{
    DefaultController,
};

use App\Http\Controllers\{
    Controller,
    PostController,
    ShopController,
};

use App\Http\Livewire\Backend\{
    Addresses,
    Orders,
    Pets,
    Posts,
    Shop,
    SystemConfig,
    Userlist,
};
use App\Http\Livewire\Website\{
    OrderCreate,
    Payment,
    ShoppingCart
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

// if (time() > strtotime("August 05 2023 00:00:00")) {
Route::get('/', [Controller::class, 'index'])->name('home');
// } else {
//     Route::get('/', [Controller::class, 'coomingSoon'])->name('home');
// }

// Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('500', function () {
    abort(500);
});

Route::get('memberships', [Controller::class, 'memberships'])
    ->name('membership.index');

Route::get('/help', [Controller::class, 'helpCenter'])
    ->name('help.view');

Route::get('/unete-a-hatchi', [Controller::class, 'workUs'])
    ->name('workus.view');

Route::get('/faq', [Controller::class, 'faq'])
    ->name('faq.view');

Route::get('about-hatchi', [Controller::class, 'aboutHatchi'])
    ->name('about-hatchi');

Route::get('delivery-policy', [Controller::class, 'delivery'])
    ->name('delivery-policy');

/* Blogs */

Route::prefix('blog')->group(function () {
    Route::get('posts', [PostController::class, 'index'])
        ->name('posts.index');

    Route::get('post/{postCategory:slug}/{post:slug}', [PostController::class, 'view'])
        ->name('post.show');
});

/* Tienda */

Route::prefix('shop')->group(function () {

    Route::get('ofertas', [ShopController::class, 'offerts'])
        ->name('shop.offert');

    Route::get('{animals:name}', [ShopController::class, 'view'])
        ->name('shop.animal');

    Route::get('{animal:name}/{animalCategory:slug}', [ShopController::class, 'category'])
        ->name('shop.category');

    Route::get('{animal:name}/{animalCategory:slug}/{product:slug}', [ShopController::class, 'product'])
        ->name('shop.product');
});

/* Carrito de compras */

Route::prefix('cart')->group(function () {
    Route::get('view', ShoppingCart::class)
        ->name('cart.view')
        ->middleware(["auth"]);

    Route::get('add/{id}', [ShoppingCart::class, 'addCart'])
        ->name('cart.add')
        ->middleware(["auth"]);
});



/* Pagos */

Route::prefix('payment')->group(function () {
    Route::get('resume', Payment::class)
        ->name('payment.view')
        ->middleware(["auth"]);
    Route::get('response', OrderCreate::class)
        ->name('payment.response')
        ->middleware(["auth"]);

    Route::get('confirmation', [Payment::class, 'success'])
        ->name('payment.confirmation')
        ->middleware(["auth"]);
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

    Route::get('/mis-direcciones', Addresses::class)
        ->name('addresses.view')
        ->middleware(["auth"]);

    Route::get('/mis-mascotas', Pets::class)
        ->name('pets.view')
        ->middleware(["auth"]);

    Route::get('/mis-pedidos', Orders::class)
        ->name('orders.view');


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
