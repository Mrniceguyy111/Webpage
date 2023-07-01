<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\{
    DefaultController,
    UserController
};
use App\Http\Controllers\PostController;
use App\Http\Livewire\Backend\Posts;
use App\Http\Livewire\Backend\Shop;
use App\Http\Livewire\Backend\Userlist;

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

Route::get('/', function () {
    return view('website.theme-1.index');
})->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show'])
    ->name('post.show');

Route::get('post/{post:id}/delete', [PostController::class, 'delete'])
    ->name('post.delete');

Route::get('post/{post:id}/edit', [PostController::class, 'edit'])
    ->name('post.edit');



/* Dashboard */


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DefaultController::class, 'index'])
        ->name('dashboard')
        ->middleware(["auth"]);


    Route::prefix('staff')->group(function () {

        Route::get('/usuarios', Userlist::class)->name('users.index');

        Route::get('/purchases', Shop::class)->name('purchases')
            ->middleware(["auth"]);

        Route::get('/post', Posts::class)
            ->name('post.view')
            ->middleware(["auth"]);

        Route::get('/post/create', [PostController::class, 'create'])
            ->name('post.create');
    });
});
