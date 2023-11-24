<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MainPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registration.css web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authorization', function (){
    return view('authorization');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/registration', function (){
    return view('registration');
});

Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/', [MainPageController::class, 'index']);

Route::get('/userprofile/{id}', [UserProfileController::class, 'show'])->name('userprofile');

Route::get('/userprofile', [UserProfileController::class, 'showNew'])->name('userprofile.new');

Route::post('/userprofile/{id}', [UserProfileController::class, 'update']);
