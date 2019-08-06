<?php

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('dashboard');
Route::get('list-services','Admin\ServiceController@index')->name('list-services');
Route::get('gallery','Admin\GalleryController@index')->name('gallery');