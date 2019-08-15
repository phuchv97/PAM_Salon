<?php
//login and logout
Route::get('form-login','Auth\LoginController@index')->name('form_login_admin');
Route::post('login','Auth\LoginController@login')->name('login_admin');
Route::get('logout','Auth\LoginController@logout')->name('logout_admin');


Route::group(['middleware'=>'checkAdmin'],function(){
    //dashboard
    Route::get('/','Admin\DashboardController@index')->name('dashboard');
    //service
    Route::get('services','Admin\ServiceController@index')->name('list_services');
    Route::get('services/remove/{id}', 'Admin\ServiceController@remove')->name('service_remove');
    Route::get('services/edit/{id}', 'Admin\ServiceController@edit')->name('service_edit');
    Route::get('services/add', 'Admin\ServiceController@addService')->name('add_service');
    Route::post('services/save', 'Admin\ServiceController@save')->name('service_save');
    //user
    Route::group(['middleware'=>'checkBoss'],function(){
        Route::get('list-user','UsersController@index')->name('list_user');
        Route::get('add-user','UsersController@addUser')->name('add_user');
        Route::post('save-user','UsersController@save')->name('save_user');
        Route::get('edit-user/{id}','UsersController@editUser')->name('edit_user');
        Route::get('delete-user/{id}','UsersController@delete')->name('delete_user');
    });

    //gallery
    Route::get('gallery','Admin\GalleryController@index')->name('list_gallery');
    Route::get('add-image-in-gallery','Admin\GalleryController@addImage')->name('add_image_gallery');
    Route::get('delete-image-in-gallery/{id}','Admin\GalleryController@delete')->name('delete_gallery');
    Route::post('save-image-in-gallery','Admin\GalleryController@save')->name('save_gallery');

    // product
    Route::get('products','Admin\ProductController@index')->name('list_product');
    Route::get('add-products','Admin\ProductController@addProduct')->name('add_product');
    Route::get('edit-product/{id}','Admin\ProductController@edit')->name('edit_product');
    Route::get('delete-product/{id}','Admin\ProductController@delete')->name('delete_product');
    Route::post('save-product','Admin\ProductController@save')->name('save_product');



    // hair stylist
    Route::get('hair-stylist','Admin\HairStylistController@index')->name('list_hair_stylist');
    //comment
    Route::get('comment','Home\CommentController@index')->name('list_comment');
    Route::get('delete-comment/{id}','Home\CommentController@delete')->name('delete_comment');
    //post
    Route::get('list-post','Admin\PostsController@index')->name('list_post');
    Route::get('add-post','Admin\PostsController@addPost')->name('add_post');
    Route::get('edit-post/{id}','Admin\PostsController@editPost')->name('edit_post');
    Route::get('delete-post/{id}','Admin\PostsController@delete')->name('delete_post');
    Route::post('save-post','Admin\PostsController@save')->name('save_post');
    //reservation payment and revenue
    Route::group(['middleware'=>'checkRolePayment'],function(){
        Route::get('list-reservation','Admin\ReservationController@index')->name('list_reservation');
        Route::post('update-status-reservation/{id}','Admin\ReservationController@updateStatus')->name('update_status_reservation');
        Route::get('revenue-management','Admin\ReservationController@revenueManagement')->name('revenue_management');
    }); 
});


