<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'RouteController@index')->name('home');
Route::get('/category', 'RouteController@category')->name('category');
Route::get('/contact', 'RouteController@contact')->name('contact');
Route::get('/ad-details', 'RouteController@ad_details')->name('ad-details');

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', 'RouteController@register')->name('register');
    Route::post('/register', 'RegisterController@register')->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', 'RouteController@login')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.perform');    

});
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    /**
     * post-ad routes
     */
    Route::get('/post-ad', 'PostAdController@index')->name('post-ads.show');
    Route::get('/add-product/{category}/{subcategory}', 'PostAdController@index')->name('add-product');
});
