<?php

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('dashboard');
Route::get('services','Admin\ServiceController@index')->name('list_services');
Route::get('gallery','Admin\GalleryController@index')->name('list_gallery');
Route::get('products','Admin\ProductController@index')->name('list_product');
Route::get('hair-stylist','Admin\HairStylistController@index')->name('list_hair_stylist');
Route::get('list-post','Admin\PostsController@index')->name('list_post');
