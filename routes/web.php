<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MainPageController;

Route::get('/authorization', function (){
    return view('authorization');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/registration', function (){
    return view('registration');
});

Route::get('/about', function (){
   return view('about');
});

Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/', [MainPageController::class, 'mainpage']);

Route::get('/userprofile/{id}', [UserProfileController::class, 'show'])->name('userprofile');

Route::get('/userprofile', [UserProfileController::class, 'showNew'])->name('userprofile.new');

Route::post('/userprofile/{id}', [UserProfileController::class, 'update']);
