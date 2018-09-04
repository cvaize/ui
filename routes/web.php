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

Route::get('login', function () {
    return view('screens.login');
});

Route::get('1_sign-in-main', function () {
    return view('screens.1_sign-in-main');
});
Route::get('2_choose_role', function () {
    return view('screens.2_choose_role');
});
