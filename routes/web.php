<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/menu-page/{id}', [WebsiteController::class, 'menuPage'])->name('menu.page');
Route::get('/order-online', [WebsiteController::class, 'orderOnline'])->name('order.online');
Route::get('/story', [WebsiteController::class, 'story'])->name('story');
Route::get('/detail/{id}', [WebsiteController::class, 'detail'])->name('detail');

Route::get('/cart',[CartController::class,'cart'])->name('cart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


Route::get('/search', [WebsiteController::class, 'search'])->name('search');
Route::get('/search-result', [WebsiteController::class, 'searchResult'])->name('search.result');

Route::get('/user-login', [WebsiteController::class, 'login'])->name('user-login');
Route::get('/user-register', [WebsiteController::class, 'register'])->name('user-register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//    Category

    Route::resource('category',CategoryController::class);
    Route::get('/category-change-status/{id}',[CategoryController::class,'categoryChangeStatus'])->name('category-change-status');


//    Item

    Route::resource('item',ItemController::class);
    Route::get('/item-change-status/{id}',[ItemController::class,'itemChangeStatus'])->name('item-change-status');


});
