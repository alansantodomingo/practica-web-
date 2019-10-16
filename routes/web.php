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

Route::get('foto', function(){
    return view('foto');
})->name('fotos');

Route::get('blog', function(){
    return view('blog');
})->name('blog');

Route::get('cris', function(){
    return view('cris');
})->name('cristina');