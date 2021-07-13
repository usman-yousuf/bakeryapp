<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * Auth Route
 */

Route::group([ 'prefix' => 'auth'], function () {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');
    Route::post('social_login', 'App\Http\Controllers\AuthController@socialLogin');
    Route::post('forgot_password', 'App\Http\Controllers\AuthController@forgotPasswordCode');
    Route::post('recover_password', 'App\Http\Controllers\AuthController@recoverPassword');
    Route::post('verify_user', 'App\Http\Controllers\AuthController@verifyUserWithCode');

    Route::group([ 'middleware' => 'auth:api'], function() {

        Route::post('get_user', 'App\Http\Controllers\AuthController@getUser');
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('change_social_password', 'App\Http\Controllers\AuthController@changeSocialLoginPassword');
        Route::post('get_subscription', 'App\Http\Controllers\SubscriptionController@getSubscriptions');
        Route::post('update_subscription', 'App\Http\Controllers\SubscriptionController@updateSubscription');

    });

});
