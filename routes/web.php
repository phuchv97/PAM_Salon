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
Route::post('signup-guest','UsersController@signupGuest')->name('signup_guest');
Route::get('edit-account-guest/{id}','UsersController@editAccountGuest')->name('edit_account_guest');
Route::post('save-account-guest','UsersController@saveAccountGuest')->name('save_account_guest');


Route::post('save-contact','Home\HomeController@saveContact')->name('save_contact');
Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('service', 'Home\HomeController@service')->name('service');
Route::get('product', 'Home\HomeController@product')->name('product');
Route::get('blog', 'Home\HomeController@blog')->name('blog');
Route::get('contact', 'Home\HomeController@contact')->name('contact');
Route::get('profile', 'Home\HomeController@profile')->name('profile');

Route::get('form-book-p1/{hair_stylist_id}', 'Home\HomeController@formBookP1')->name('form_book_p1');
Route::get('form-book-p2', 'Home\HomeController@formBookP2')->name('form_book_p2');
Route::get('album', 'Home\HomeController@album')->name('album');
Route::get('product-detail/{id}', 'Home\HomeController@product_detail')->name('product_detail');
Route::get('blog-detail/{id}', 'Home\HomeController@blog_detail')->name('blog_detail');
Route::post('save-comment', 'Home\CommentController@save')->name('save_comment');
Route::post('reservation', 'Home\HomeController@save_reservation')->name('save_reservation');
Route::post('reservation', 'Home\HomeController@save_reservation')->name('save_reservation');
Route::post('save-feedback-hair-stylist', 'Home\FeedbackHairStylistController@save')->name('feedback_hair_stylist');




