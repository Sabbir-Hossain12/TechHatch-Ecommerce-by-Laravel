<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\tokenMiddleware;
use Illuminate\Support\Facades\Route;

// pages

Route::view('/','mail.otp-mail');

// backend routes

Route::post('/login',[userController::class,'login']);
Route::post('/verifyLogin',[userController::class,'verifyLogin']);
Route::get('/logout',[userController::class,'logOut']);

