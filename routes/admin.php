<?php

Route::get('form-login','Auth\LoginController@index')->name('form_login_admin');
Route::post('login','Auth\LoginController@login')->name('login_admin');
Route::get('logout','Auth\LoginController@logout')->name('logout_admin');


Route::group(['middleware'=>'checkAdmin'],function(){
    Route::get('/',function(){
        return view('admin.dashboard.index');
    })->name('dashboard');
    Route::get('services','Admin\ServiceController@index')->name('list_services');
    Route::get('services/remove/{id}', 'Admin\ServiceController@remove')->name('service_remove');
    Route::get('services/edit/{id}', 'Admin\ServiceController@edit')->name('service_edit');
    Route::get('services/add', 'Admin\ServiceController@addService')->name('add_service');
    Route::post('services/save', 'Admin\ServiceController@save')->name('service_save');
    
    Route::get('gallery','Admin\GalleryController@index')->name('list_gallery');
    Route::get('products','Admin\ProductController@index')->name('list_product');
    Route::get('hair-stylist','Admin\HairStylistController@index')->name('list_hair_stylist');
    Route::get('list-post','Admin\PostsController@index')->name('list_post');
});


