<?php

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('dashboard');