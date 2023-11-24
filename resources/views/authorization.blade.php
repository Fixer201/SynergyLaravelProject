<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../static/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/authorization.css">
    <script src="../js/authorization.js" defer></script>
    <title>Authorization</title>
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
        <div class="registration-wrapper">
            <a id="registration" href="/registration">Регистрация</a>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
</body>
</html>
