<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../static/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/registration.css">
    <script src="../js/register.js" defer></script>
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <form class="registrationForm" id="loginForm" method="POST">
            @csrf
            <div class="registrationForm-container">
                <a href="/"><i class="fa-solid fa-xmark"></i></a>
                <label for="email">email</label>
                <input id="email" type='email' placeholder="Введите ваш email" name="email" required>

                <label for="uname"><b>ФИО</b></label>
                <input id="uname" type="text" placeholder="Введите ваше ФИО (макс 100 символов)" maxlength="100" name="name" required>

                <label for="passport"><b>Серия и номер паспорта</b></label>
                <input id="passport-series" type="text" placeholder="Введите серию паспорта" maxlength="4" name="passport_series" required>
                <input id="passport-number" type="text" placeholder="Введите номер паспорта" maxlength="6" name="passport_number" required>

                <label for="passport-giveDate">Дата выдачи паспорта</label>
                <input id="passport-giveDate" type="date" name="give_passport_date" required>

                <label for="passportIssuingOrg">Данные организации, выдавшей паспорт</label>
                <input id="passport-issuingAuthority" type="text" name="organisation_name" placeholder="Введите название организации, выдавшей паспорт" required>
                <input id="passport-code" type="text" name="code" maxlength="7" placeholder="Введите код подразделения ***-***" required>

                <button id="submit" type="submit">Зарегистрироваться</button>

                <div id="authorization-wrapper">
                    <a id="authorization" href="/authorization">Авторизация</a>
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
            </div>
        </form>
    </div>
</body>
</html>
