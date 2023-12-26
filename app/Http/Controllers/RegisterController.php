<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:150|unique:users',
            'name' => 'required|max:100',
            'passport_series' => 'required|max:40',
            'passport_number' => 'required|max:60',
            'give_passport_date' => 'required|date',
            'organisation_name' => 'required|max:255',
            'code' => 'required|max:60',
        ]);

        // Проверяем, существует ли пользователь с таким email
        $existingUser = User::where('email', $validatedData['email'])->exists();

        if ($existingUser) {
            // Если пользователь существует, возвращаем ошибку
            return back()->withErrors([
                'message' => 'Пользователь с таким email уже существует',
            ]);
        }

        // генерируем случайный пароль
        $password = Str::random(8);

        // создаём пользователя

        $user = User::create([
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'passport_series' => $validatedData['passport_series'],
            'passport_number' => $validatedData['passport_number'],
            'give_passport_date' => $validatedData['give_passport_date'],
            'organisation_name' => $validatedData['organisation_name'],
            'code' => $validatedData['code'],
            'password' => bcrypt($password), // bcrypt шифруем пароль
            'decPassword' => $password, // хранение незашифрованного пароля для удобства разработки
        ]);

        // отправляем пароль на почту пользователя
        Mail::raw("Ваш сгенерированный пароль: " . $password, function ($message) use ($user) {
            $message->to($user->email)->subject('Ваш сгенерированный пароль: ');
        });

        Auth::login($user);

        return redirect('/');
    }
}
