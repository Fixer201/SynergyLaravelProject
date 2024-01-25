<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/register.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('static/image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">

    <title>Регистрация</title>
</head>
<body>
<div class="wrapper">
    <form class="registrationForm" id="loginForm" method="POST">
        @csrf
        <div class="registrationForm-container">
            <a href="/"><i class="fa-solid fa-xmark"></i></a>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ваш Email" value="{{ $user->email ?? '' }}" required>

            <label for="name">ФИО</label>
            <input type="text" id="name" name="name" maxlength="100" placeholder="Ваше ФИО (макс 100 символов)" required>

            <label for="passport_series">Серия и номер паспорта</label>
            <!-- Добавлен атрибут pattern для проверки ввода -->
            <input type="text" id="passport_series" pattern="[0-9]{4}" name="passport_series" placeholder="Серия вашего паспорта (4 цифры)" required>
            <input type="text" id="passport_number" maxlength="6" name="passport_number" placeholder="Номер вашего паспорта (6 цифр)">

            <label for="give_passport_date">Дата выдачи паспорта</label>
            <input type="date" id="give_passport_date" name="give_passport_date" placeholder="Дата выдачи паспорта">

            <label for="organisation_name">Название организации, выдавшей паспорт</label>
            <input type="text" id="organisation_name" name="organisation_name" placeholder="Введите название организации">

            <label for="code">Код подразделения</label>
            <!-- Добавлен атрибут pattern для проверки ввода -->
            <input type="text" id="code" pattern="[0-9]{3}-[0-9]{3}" name="code" placeholder="Код подразделения (три цифры, дефис, три цифры)" required>

            <button id="submit" type="submit">Зарегистрироваться</button>

            {{--Кнопка возвращения на страницу авторизации--}}
            <div id="authorization-wrapper">
                <a id="authorization" href="{{ route('authorization') }}">Авторизация</a>
            </div>
            {{--Вывод ошибки при вводе существующей почты--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </form>
</div>
</body>
</html>
