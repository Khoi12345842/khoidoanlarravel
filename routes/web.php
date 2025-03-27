<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('layouts.app');

})->name('home');


Route::get('/admin', function () {
    return view('admin.admin');

});



Route::resource('admincp/category', AdminCategoryController::class);
Route::resource('news', NewsController::class);
Route::resource('categories', CategoryController::class);



//tải hình ảnh tĩnh lên puclic
Route::get('/downloadImage', function() {
    include base_path('downloadImage.php'); // Dùng base_path() để đảm bảo đường dẫn chính xác
})->name('download.image');





//router cho đăng nhập đăng kí
use App\Http\Controllers\Controller; 
use App\Http\Controllers\Auth\AuthController; 
// Hiển thị form đăng nhập
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');

// Xử lý đăng nhập
Route::post('/admin/login', [AuthController::class, 'login']);

// Hiển thị form đăng ký
Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');

// Xử lý đăng ký
Route::post('/admin/register', [AuthController::class, 'register']);

// Đăng xuất
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');



//đăng nhập bằng google 
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);


//quản lí header trên UI
use App\Http\Controllers\AdminMenuController;

Route::prefix('admin')->group(function () {
    Route::get('/menus', [AdminMenuController::class, 'index'])->name('admin.menus.index');
    Route::get('/menus/create', [AdminMenuController::class, 'create'])->name('admin.menus.create');
    Route::post('/menus', [AdminMenuController::class, 'store'])->name('admin.menus.store');
    Route::get('/menus/{menu}/edit', [AdminMenuController::class, 'edit'])->name('admin.menus.edit');
    Route::put('/menus/{menu}', [AdminMenuController::class, 'update'])->name('admin.menus.update');
    Route::delete('/menus/{menu}', [AdminMenuController::class, 'destroy'])->name('admin.menus.destroy');
});



// Route động cho menus sản phẩm 
Route::get('/san-pham/{category}', [AdminMenuCOntroller ::class, 'productCategory'])->name('products.category');

// Route sản phẩm 
use App\Http\Controllers\AdminProductController;

Route::get('/san-pham/{category}', [AdminProductController::class, 'productCategory'])->name('products.category');
Route::get('/kho', [AdminMenuController::class, 'warehouse'])->name('warehouse');
Route::get('/tin-tuc', [AdminMenuController::class, 'news'])->name('news.index');


//router thêm sản phẩm use App\Http\Controllers\AdminProductController;


Route::prefix('admin')->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
});

