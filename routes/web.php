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

Route::get('/home', 'HomeController@index')->name('home');
//Rutas protegidas por autenticación
Route::group(['middleware' => 'auth'], function() {
    Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        //Rutas del administrador
        Route::get('/', 'DashboardController@index')->name('dashboard');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function() {
        //Rutas del cliente
        Route::get('/', 'DashboardController@index');
    });
});

