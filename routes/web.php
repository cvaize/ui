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
Route::get('1_sign-in-main', function () {
    return view('screens.1_sign-in-main');
});
Route::get('2_choose_role', function () {
    return view('screens.2_choose_role');
});
Route::get('3_table', function () {
    return view('screens.3_table');
});
Route::get('4_templates', function () {
    return view('screens.4_templates');
});
Route::get('5_wallet', function () {
    return view('screens.5_wallet');
});
Route::get('6_create-your-wallet', function () {
    return view('screens.6_create-your-wallet');
});
Route::get('7_restore-account', function () {
    return view('screens.7_restore-account');
});
Route::get('8_confirm-backup', function () {
    return view('screens.8_confirm-backup');
});
Route::get('7_2_saving-secret-phrase', function () {
    return view('screens.7_2_saving-secret-phrase');
});
