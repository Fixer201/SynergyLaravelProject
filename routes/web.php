<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MainPageController;

// Блок основной страницы
Route::get('/', [MainPageController::class, 'mainpage'])->name('mainpage');

// Блок авторизации
Route::get('/authorization', function (){
    return view('authorization');
})->name('authorization');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

// Блок регистрации
Route::get('/registration', function (){
    return view('registration');
})->name('registration');

Route::post('/registration', [RegisterController::class, 'store']);

// Блок профиля пользователя
Route::get('/userprofile/{id}', [UserProfileController::class, 'show'])->name('userprofile');

Route::get('/userprofile', [UserProfileController::class, 'showNew'])->name('userprofile.new');

Route::post('/userprofile/{id}', [UserProfileController::class, 'update']);

// Блок каталога

// Блок страницы 'О нас'
Route::get('/about', function (){
    return view('about');
})->name('about');
