<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/authorization.css')}}">
    <link rel="shortcut icon" href="{{asset('static/image/logo.png')}}" type="image/x-icon">

    <title>Авторизация</title>
</head>
<body>
<form class="loginForm" id="loginForm" method="post" action="{{ route('login') }}">
    @csrf
    <div class="loginForm-container">

        <a href="/"><i class="fa-solid fa-xmark" style="color: #fff;"></i></a>

        <label for="email"><b>Email</b></label>
        <input id="email" type="email" placeholder="Введите ваш email" name="email" required>

        <label for="psw"><b>Пароль</b></label>
        <input id="psw" type="password" placeholder="Введите пароль" name="password" required>

        <button id="submit" type="submit">Войти</button>

        {{--        Кнопка перехода на страницу регистрации--}}
        <div class="registration-wrapper">
            <a id="registration" href="{{ route('registration') }}">Регистрация</a>
        </div>

        {{--        Вывод ошибки при вводе неправильной почты или пароля--}}
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
</body>
</html>
