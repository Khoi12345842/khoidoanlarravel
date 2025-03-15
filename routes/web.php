<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('admin.layouts.home');

});

Route::get('/contact', function () {
    return view('admin.layouts.contact', ['name' => 'Test User']);
});


Route::get('/home', function () {
    return view('admin.layouts.home');
});
 

Route::get('/master', function () {
    return view('admin.layouts.master'); // Trả về view master.blade.php
});

Route::get('/top', function () {
    return view('admin.layouts.elements.top'); // Trả về view top.blade.php
});
// routes/web.php



Route::resource('admincp/category', AdminCategoryController::class);

Route::resource('news', NewsController::class);
Route::resource('categories', CategoryController::class);
