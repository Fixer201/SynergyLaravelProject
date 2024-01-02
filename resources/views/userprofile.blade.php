<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- разделитель -->
    <link rel="stylesheet" href="{{asset('/css/userProfile.css')}}">
    <!-- разделитель -->
    <link rel="shortcut icon" href="{{asset('/static/image/logo.png')}}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <form class="userProfileForm" method="post" action="/userprofile/{{$user->id ?? ''}}">
        @csrf
        <a href="/"><i class="fa-solid fa-xmark"></i></a>
        <h1 class="headerText">Если вы желаете изменить данные, введите новые ниже и нажмите кнопку сохранить</h1>
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

        <button type="submit">Сохранить изменения</button>

        @if(session('success'))
            <div class="alert-success" style="color: white;
                font-family: 'Overpass', sans-serif;
                font-weight: 300;
                margin-top: 12px;
                margin-bottom: -24px;
                font-size: calc(var(--index) * 1.2);
                ">
                {{session('success')}}
            </div>
        @endif
    </form>
</div>
</body>
</html>
