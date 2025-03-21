<?php



use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('layouts.app');

});

Route::get('/home', function () {
    return view('home');

});
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