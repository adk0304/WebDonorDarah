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
});
// Route::get('/donor', function () {
//     return view('pmi/index');
// });
Route::get('index', 'ControllerDonor@index');
//Route::get('home', function(){return Auth::user();})->name('home'); //Siapa yg Login
Route::get('home', function(){return view('auth/home');})->name('home');
Route::get('konten', 'ControllerDonor@konten1');
Route::get('regis', 'AuthController@getRegis')->name('regis');
Route::post('regis', 'AuthController@postRegis');
Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postlogin');
Route::post('logout', 'AuthController@logout')->name('logout');
