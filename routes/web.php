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
Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('service', 'Home\HomeController@service')->name('service');
Route::get('produce', 'Home\HomeController@produce')->name('produce');
Route::get('blog', 'Home\HomeController@blog')->name('blog');

Route::get('contact', 'Home\HomeController@contact')->name('contact');
Route::get('album', 'Home\HomeController@album')->name('album');


Route::get('login', function () {
    return view('home.login');
})->name('login');
