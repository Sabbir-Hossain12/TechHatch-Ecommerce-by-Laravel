<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Middleware\tokenMiddleware;
use Illuminate\Support\Facades\Route;

// pages

Route::view('/','mail.otp-mail');

// backend routes

//auth
Route::post('/login',[userController::class,'login']);
Route::post('/verifyLogin',[userController::class,'verifyLogin']);
Route::get('/logout',[userController::class,'logOut'])->middleware([tokenMiddleware::class]);

//brands
Route::get('/brands',[BrandController::class,'brandList']);

//categories
Route::get('/categories',[CategoryController::class,'categoryList']);

//products
Route::get('/products',[ProductController::class,'productList']);
Route::get('/productsByBrand/{brand_id}',[ProductController::class,'productListByBrand']);
Route::get('/productsByCategory/{category_id}',[ProductController::class,'productListByCategory']);
Route::get('/productsByRemark/{remark}',[ProductController::class,'productListByRemark']);
Route::get('/productsSlider',[ProductController::class,'productSlider']);
Route::get('/productsDetails/{id}',[ProductController::class,'productDetailsById']);

//profile
Route::post('/createProfile',[ProfileController::class,'createProfile'])->middleware([tokenMiddleware::class]);
Route::get('/profile',[ProfileController::class,'profileList'])->middleware([tokenMiddleware::class]);
