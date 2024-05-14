<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanphamController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;

Route::get('/', [HomeController::class,'index']); //Trang chủ
Route::get('san-pham', [SanphamController::class,'index']); //Tất cả sản phẩm
Route::get('chi-tiet-san-pham/{slug}', [SanphamController::class,'product_detail']); //chi tiết sản phẩm
Route::get('lien-he', [ContactController::class,'index']); //liên hệ

Route::prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);//Bảng điều khiển -- home admin

    Route::prefix('category')->group(function(){
        Route::get('/', [CategoryController::class,'index']);//Danh sách danh mục
        Route::get('edit/{id}', [CategoryController::class,'edit']);//Edit danh mục
        Route::get('delete/{id}', [CategoryController::class,'delete']);//Xóa danh mục
    });

    Route::prefix('brand')->group(function(){
        Route::get('/', [BrandController::class,'index']);//Danh sách thương hiệu 
        Route::get('edit/{id}', [BrandController::class,'edit']);//Edit thương hiệu
        Route::get('delete/{id}', [BrandController::class,'delete']);//Xóa thương hiệu
    });

    Route::prefix('product')->group(function(){
        Route::get('/', [ProductController::class,'index']);//Danh sách sản phẩm
        Route::get('insert', [ProductController::class,'index']);//Thêm sản phẩm
        Route::get('edit/{id}', [ProductController::class,'edit']);//Edit sản phẩm
        Route::get('delete/{id}', [ProductController::class,'delete']);//Xóa sản phẩm
    });

});