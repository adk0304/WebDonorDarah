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
Route::get('dbuser', 'ControllerDonor@konten1');
Route::get('db', 'ControllerDonor@dbuser');

Route::get('/daftar', function () {
    return view('pmi/daftar');
});
Route::get('/master', function () {
    return view('layout/master');
});
