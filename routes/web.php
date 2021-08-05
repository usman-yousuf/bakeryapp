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
Route::post('get_login', [WebController::class, 'webLogin'])->name('webLogin');

Auth::routes();

Route::get('test', [UserController::class, 'test']); 	

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/brands', function () {
    return view('pages.brands');
})->name('brands');


Route::get('/purchased_brand', function () {
    return view('pages.purchased_brand');
})->name('purchased_brand');

Route::get('/subscription_plan', function () {
    return view('pages.subscription_plan');
})->name('subscription_plan');


// Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

	Route::get('get_products', [WebController::class, 'webGetProducts'])->name('getproducts');
	Route::get('get_sellers', [WebController::class, 'webGetSellers'])->name('getsellers');
	Route::get('get_buyers', [WebController::class, 'webGetbuyers'])->name('getbuyers');
	Route::get('get_users', [WebController::class, 'webGetUsers'])->name('getusers');
	Route::get('get_purchase_list', [WebController::class, 'webGetPurchaseList'])->name('getpurchaselist');
	Route::get('get_subscription', [WebController::class, 'webGetSubscription'])->name('getsubscription');
	Route::get('get_user_management', [WebController::class, 'userManagement'])->name('usermanagement');
// }]);
