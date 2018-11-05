<?php

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/donor', function () {
//     return view('pmi/index');
// });
Route::get('index', 'ControllerDonor@index');
//Route::get('home', function(){return Auth::user();})->name('home'); //Siapa yg Login

Route::get('konten', 'ControllerDonor@konten1');
Route::get('register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('register', 'AuthController@postRegister')->middleware('guest');
Route::get('login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('login', 'AuthController@postlogin')->middleware('guest');
Route::get('home', function(){return view('auth/home');})->middleware('auth')->name('home');
// Route::get('index', function(){return view('pmi/index');})->middleware('auth')->name('index');

Route::get('logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('inputkantong','ControllerDonor@input');
