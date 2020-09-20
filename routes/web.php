<?php

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

use App\Http\Middleware\Admin;

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//Auth routes
Route::group(['middleware' => 'auth'], function() {
    Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        //Admin routes
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'user', 'as' => 'user.'], function() {
        //Client routes
        Route::get('/', 'DashboardController@index');
    });
});
Route::get('/products', 'ProductController@index')->name('productos');
Route::get('/product/{id}', 'ProductController@show')->name('producto');

Route::get('/list_product', 'ProductController@list_product');
Route::get('/get_product/{id}', 'ProductController@getProduct');
Route::post('add_product', 'ProductController@addProduct');
Route::get('cartProduct', 'ProductController@cartProduct');

Route::get('cart', 'CartController@index')->name('carro');
Route::get('getCart', 'CartController@show');
Route::post('updateCart', 'CartController@update');
Route::get('emptyCart', 'CartController@delete');
Route::get('/contact', 'ContactController@index')->name('contacto');

 