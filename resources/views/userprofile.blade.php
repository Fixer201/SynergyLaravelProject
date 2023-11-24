<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../static/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/userProfile.css">
    <title>User Profile</title>
</head>
<body>
    <div class="profile-form">
        <form method="post" action="/userprofile/{{$user->id ?? ''}}">
            @csrf
            <a href="/"><i class="fa-solid fa-xmark"></i></a>
            <h1 class="headerText">Если вы желаете изменить значения введите новые ниже и нажмите кнопку сохранить</h1>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Ваш Email" value="{{ $user->email ?? '' }}" required>

            <label for="name">ФИО</label>
            <input type="text" id="name" name="name" maxlength="100" placeholder="Ваше ФИО(макс 100 символов)" required>

            <label for="passport_series">Серия и номер паспорта</label>
            <input type="text" id="passport_series" maxlength="4" name="passport_series" placeholder="Серия вашего паспорта" required>
            <input type="text" id="passport_number" maxlength="6" name="passport_number" placeholder="Номер вашего паспорта">

            <label for="give_passport_date">Дата выдачи паспорта</label>
            <input type="date" id="give_passport_date" name="give_passport_date" placeholder="Дата выдачи паспорта">

            <label for="organisation_name">Название организации, выдавшей паспорт</label>
            <input type="text" id="organisation_name" name="organisation_name" placeholder="Введите название организации">

            <label for="code">Код подразделения</label>
            <input type="text" id="code" maxlength="7" name="code" placeholder="Код подразделения ***-***">

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
