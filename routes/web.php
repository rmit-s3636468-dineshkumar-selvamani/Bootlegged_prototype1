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


Route::get('register', function(){
    return View('register'); // Your Blade template name
});

Route::get('home', function(){
    return View('welcome'); // Your Blade template name
});


Route::get('login', function(){
    return View('login'); // Your Blade template name
});