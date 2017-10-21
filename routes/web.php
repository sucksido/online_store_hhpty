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

Route::get('/', 'PagesController@index');
Route::get('/purchase', 'PagesController@purchase');
Route::get('/top_up', 'PagesController@top_up');
Route::get('/transactions', 'PagesController@transactions');

/*Route::get('/purchase',function () {
    return view('pages.purchase');
});*/
Auth::routes();
Route::get('/home', ['middleware' => 'auth', function () {
    return view('home');
}]);
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('purchases', 'PurchasesController');
Route::resource('products', 'ProductsController');