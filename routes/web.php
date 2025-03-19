<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('admin.home');

});




Route::resource('admincp/category', AdminCategoryController::class);

Route::resource('news', NewsController::class);
Route::resource('categories', CategoryController::class);

Route::get('/downloadImage', function() {
    include base_path('downloadImage.php'); // Dùng base_path() để đảm bảo đường dẫn chính xác
})->name('download.image');
