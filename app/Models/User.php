<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use HasFactory;

    public static function create(array $validatedData): User
    {
        $user = new User();
        $user->email = $validatedData['email'];
        $user->name = $validatedData['name'];
        $user->passport_series = $validatedData['passport_series'];
        $user->passport_number = $validatedData['passport_number'];
        $user->give_passport_date = $validatedData['give_passport_date'];
        $user->organisation_name = $validatedData['organisation_name'];
        $user->code = $validatedData['code'];
        $user->password = $validatedData['password'];
        $user->decPassword = $validatedData['decPassword']; // Поле создано для удобства и хранит дешифрованные пароли.

        $user->save();
        return $user;
    }
    public static function findUserOrFail($id): ?User
    {
        $user = static::find($id);

        if (!$user) {
            throw new ModelNotFoundException("Пользователь с id $id не найден");
        }

        return $user;
    }
}
