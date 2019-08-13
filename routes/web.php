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
Route::get('login', function () {
    return view('home.login');
})->name('login');
Route::get('logout','Auth\LoginController@logoutGuest')->name('logout_guest');
Route::post('login','Auth\LoginController@loginGuest')->name('login_guest');
Route::get('signup', function () {
    return view('home.signup');
})->name('signup');
Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('service', 'Home\HomeController@service')->name('service');
Route::get('product', 'Home\HomeController@product')->name('product');
Route::get('blog', 'Home\HomeController@blog')->name('blog');
Route::get('contact', 'Home\HomeController@contact')->name('contact');
Route::get('profile', 'Home\HomeController@profile')->name('profile');
Route::get('formdatlich', 'Home\HomeController@formdatlich')->name('formdatlich');
Route::get('album', 'Home\HomeController@album')->name('album');
Route::get('product-detail/{id}', 'Home\HomeController@product_detail')->name('product_detail');
Route::get('blog-detail/{id}', 'Home\HomeController@blog_detail')->name('blog_detail');
Route::post('save-comment', 'Home\CommentController@save')->name('save_comment');

