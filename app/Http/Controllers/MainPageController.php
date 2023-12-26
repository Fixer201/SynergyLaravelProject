<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    public function mainpage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('mainpage', ['user' => $user]);
        } else {
            return view('mainpage')->with('message', 'Для входа в ваш профиль пожалуйста, авторизуйтесь');
        }
    }
}
