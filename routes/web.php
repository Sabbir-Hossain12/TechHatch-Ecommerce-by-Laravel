<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProductSliderController;
use App\Http\Controllers\ProductWishlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use App\Http\Middleware\tokenMiddleware;
use Illuminate\Support\Facades\Route;

//*****************************************************************
//********************* Frontend Page Routes ***********************
//******************************************************************

Route::get('/',[HomeController::class,'viewHome'])->name('home');

Route::get('/productsByCategory',[ProductController::class,'viewProduct']);

Route::view('/productsByBrand','pages.productByBrand-page');
Route::view('/productDetails','pages.productDetails-page');


// *****************************************************************
//*********************** Backend API routes************************
//******************************************************************

//auth
Route::post('/login', [userController::class, 'login']);
Route::post('/verifyLogin', [userController::class, 'verifyLogin']);
Route::get('/logout', [userController::class, 'logOut'])->middleware([tokenMiddleware::class]);
//brands
Route::get('/brands', [BrandController::class, 'brandList']);
//categories
Route::get('/categories', [CategoryController::class, 'categoryList']);
//products
Route::get('/products', [ProductController::class, 'productList']);
Route::get('/productsByBrand/{id}', [ProductController::class, 'productListByBrand']);
Route::get('/productsByCategory/{id}', [ProductController::class, 'productListByCategory']);
Route::get('/productsByRemark/{remark}', [ProductController::class, 'productListByRemark']);
Route::get('/productsSlider', [ProductSliderController::class, 'productSlider']);
Route::get('/productsDetails/{id}', [ProductController::class, 'productDetailsById']);
//policy
Route::get('/policy/{type}', [PolicyController::class, 'showPolicy']);
//profile
Route::post('/createProfile', [ProfileController::class, 'createProfile'])->middleware([tokenMiddleware::class]);
Route::get('/profile', [ProfileController::class, 'profileList'])->middleware([tokenMiddleware::class]);
//product Review
Route::post('/CreateReview', [ProductReviewController::class, 'createReview'])->middleware([tokenMiddleware::class]);
Route::get('/review/{product_id}', [ProductReviewController::class, 'listReview']);
//product wish
Route::get('/createWish/{product_id}', [ProductWishlistController::class, 'createWish'])->middleware([tokenMiddleware::class]);
Route::get('/wishList', [ProductWishlistController::class, 'wishList'])->middleware([tokenMiddleware::class]);
Route::post('/removeWish/{product_id}', [ProductWishlistController::class, 'removeWish'])->middleware([tokenMiddleware::class]);
//product Cart
Route::post('/createCart', [ProductCartController::class, 'createCart'])->middleware([tokenMiddleware::class]);
Route::get('/cartList', [ProductCartController::class, 'cartList'])->middleware([tokenMiddleware::class]);;
Route::get('/removeCart/{product_id}', [ProductCartController::class, 'removeCart'])->middleware([tokenMiddleware::class]);
//invoice
Route::post('/createInvoice', [InvoiceController::class, 'createInvoice'])->middleware([tokenMiddleware::class]);
Route::get('/invoiceList', [InvoiceController::class, 'invoiceList'])->middleware([tokenMiddleware::class]);
Route::get('/invoiceProductList/{invoice_id}', [InvoiceController::class, 'invoiceProductList'])->middleware([tokenMiddleware::class]);

