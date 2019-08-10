<?php

Route::get('form-login','Auth\LoginController@index')->name('form_login_admin');
Route::post('login','Auth\LoginController@login')->name('login_admin');
Route::get('logout','Auth\LoginController@logout')->name('logout_admin');


Route::group(['middleware'=>'checkAdmin'],function(){
    Route::get('/','Admin\DashboardController@index')->name('dashboard');
    Route::get('services','Admin\ServiceController@index')->name('list_services');
    Route::get('services/remove/{id}', 'Admin\ServiceController@remove')->name('service_remove');
    Route::get('services/edit/{id}', 'Admin\ServiceController@edit')->name('service_edit');
    Route::get('services/add', 'Admin\ServiceController@addService')->name('add_service');
    Route::post('services/save', 'Admin\ServiceController@save')->name('service_save');
    
    Route::get('list-user','UsersController@index')->name('list_user');
    Route::get('add-user','UsersController@addUser')->name('add_user');
    Route::post('save-user','UsersController@save')->name('save_user');
    Route::get('edit-user/{id}','UsersController@editUser')->name('edit_user');
    Route::get('delete-user/{id}','UsersController@delete')->name('delete_user');



    Route::get('gallery','Admin\GalleryController@index')->name('list_gallery');
    Route::get('products','Admin\ProductController@index')->name('list_product');
    Route::get('hair-stylist','Admin\HairStylistController@index')->name('list_hair_stylist');
    Route::get('comment','Home\CommentController@index')->name('list_comment');
    Route::get('delete-comment/{id}','Home\CommentController@delete')->name('delete_comment');

    Route::get('list-post','Admin\PostsController@index')->name('list_post');
    Route::get('add-post','Admin\PostsController@addPost')->name('add_post');
    Route::get('edit-post/{id}','Admin\PostsController@editPost')->name('edit_post');
    Route::get('delete-post/{id}','Admin\PostsController@delete')->name('delete_post');
    Route::post('save-post','Admin\PostsController@save')->name('save_post');

    


    
});


