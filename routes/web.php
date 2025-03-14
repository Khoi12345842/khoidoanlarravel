<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layouts.home');

});

Route::get('/contact', function () {
    return view('admin.layouts.contact', ['name' => 'Test User']);
});

Route::get('/news', function () {
    return view('admin.layouts.news'); // Trả về view news.blade.php
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
