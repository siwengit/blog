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
    // return view('hi');
    // echo "hello word";
    // echo date('Y-m-d H:i:s');
    echo Config::get('app.webname');
    // echo Config::get('app.locale');
});
