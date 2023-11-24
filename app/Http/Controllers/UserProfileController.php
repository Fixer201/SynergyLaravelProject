<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id = null) // вывод данных пользователя
    {
        $user = User::findUserOrFail($id);
        return view('userprofile', ['user' => $user]);
    }
    public function showNew()
    {
        $user = new User();
        return view('userprofile', ['user' => $user]);
    }
    public function update(Request $request, $id) // обновление данных пользователя
    {
        $user = User::FindUserOrFail($id); // Получение пользователя по ID

        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->passport_series = $request->input('passport_series');
        $user->passport_number = $request->input('passport_number');
        $user->give_passport_date = $request->input('give_passport_date');
        $user->organisation_name = $request->input('organisation_name');
        $user->code = $request->input('code');

        $user->save();

        return redirect()->route('userprofile', ['id' => $user->id])
            ->with('success', 'Профиль успешно обновлен');
    }

}
