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

Route::get('/', function () {
    return view('welcome');
    // return redirect('login')
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Controller untuk user

// create user
Route::resource('user','UserController');
Route::resource('pelanggan','PelangganController');
Route::resource('hewan','HewanController');
Route::resource('shop','ShopController');

?>