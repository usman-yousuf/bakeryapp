<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/brands', function () {
    return view('pages.brands');
})->name('brands');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/purchased_brand', function () {
    return view('pages.purchased_brand');
})->name('purchased_brand');

Route::get('/purchased_item', function () {
    return view('pages.purchased_item');
})->name('purchased_item');

Route::get('/subscription', function () {
    return view('pages.subscription');
})->name('subscription');

Route::get('/subscription_plan', function () {
    return view('pages.subscription_plan');
})->name('subscription_plan');

Route::get('/top_buyers', function () {
    return view('pages.top_buyers');
})->name('top_buyers');

Route::get('/top_seller', function () {
    return view('pages.top_seller');
})->name('top_seller');

Route::get('/user_management', function () {
    return view('pages.user_management');
})->name('user_management');

Route::get('/users', function () {
    return view('pages.users');
})->name('users');


Route::get('get_products', [WebController::class, 'webGetProducts'])->name('getproducts');
Route::get('get_sellers', [WebController::class, 'webGetSellers'])->name('getsellers');
Route::get('get_buyers', [WebController::class, 'webGetbuyers'])->name('getsellers');
