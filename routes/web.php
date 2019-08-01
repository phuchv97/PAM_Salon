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
    return view('home.index');
})->name('/');
Route::get('/service', function () {
    return view('home.service');
})->name('service');
Route::get('album', function () {
    return view('home.album');
})->name('album');
Route::get('blog', function () {
    return view('home.blog');
})->name('blog');
Route::get('contact', function () {
    return view('home.contact');
})->name('contact');
Route::get('login', function () {
    return view('home.login');
})->name('login');
