<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('index', ['user' => $user]);
        } else {
            return view('index')->with('message', 'Для входа в ваш профиль пожалуйста, авторизуйтесь');
        }
    }
}
