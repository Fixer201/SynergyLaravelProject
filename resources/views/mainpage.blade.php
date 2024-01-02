<!doctype html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/mainpage.css">
    <link rel="shortcut icon" href="../static/image/logo.png" type="image/x-icon">
    <title>Главная страница</title>
</head>
<body>
<div class="wrapper">
    <nav class="navbar">
        <ul>
            <a href="{{route('about')}}">О нас</a>
            <a href="{{route('authorization')}}" id="loginButton">Войти</a>
        </ul>
        @if(isset($message))
            <p id="AuthMessage" style="
            font-size: calc(var(--index) * .85);
            color: white;
            font-family: 'Overpass', sans-serif;
            text-align: center;
            ">
                {{ $message }}
            </p>
        @endif

    </nav>

    <div class="userProfile-icon">
        @if(Auth::check())
            <a href="{{ route('userprofile', ['id' => $user -> id]) }}" class="userProfile-link">
                Личный кабинет
            </a>
            <i class="fa-solid fa-user-large" style="color: #ffffff; padding: 0 8px;margin-right: .25em;"></i>
        @endif
    </div>

    <div class="content">
        <div class="title">
            <h1>Лучшая недвижимость</h1>
            <h2>В вашем городе</h2>
        </div>
    </div>
</div>
</body>

