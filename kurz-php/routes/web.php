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

Route::get('/', 'Controller@index');

Route::get('/site1', function () {
    return view('responzivita2');
});

Route::get('/site2', function () {
    return view('responzivita3');
});

Route::get("/login" , "Controller@login");

Route::get("/logout" , "Controller@logout");

Route::get("/cart" , "Controller@cart");

Route::get("/add/{id}" , "Controller@add");