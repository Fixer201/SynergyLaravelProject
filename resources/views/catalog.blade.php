<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/b10e1735e2.js" crossorigin="anonymous"></script>
    <script src=" {{asset('/js/catalog.js')}}"></script>

    <link rel="stylesheet" href="{{asset('/css/catalog.css')}}">
    <link rel="shortcut icon" href="{{asset('/static/image/logo.png')}}" type="image/x-icon">

    <title>Каталог</title>
</head>
<body>
<header>
    <nav class="navbar">
        <ul>
            <a href="{{route('about')}}">О нас</a>
            <a href="{{route('authorization')}}" id="loginButton">Войти</a>
            <a href="{{route('mainpage')}}">На главную</a>
        </ul>
    </nav>
</header>

<div class="wrapper">
    <div class="catalogGrid">
        <div class="item" id="item1">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Уютный двухэтажный дом с небольшим, но ухоженным участком, в котором удачно сочетаются функциональность и стиль. Великолепный гараж дополняет его удобство, обеспечивая место для вашего автомобиля и хранения инструментов. Этот дом — идеальное место для спокойной и комфортной жизни.</p>
                <p>Цена: $50,000</p>
            <button data-target="details1">Подробнее</button>
        </div>
        <div id="details1" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 5 (2 спальни) </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 6/10 </li>
            </ul>
            <button data-target="details1">Закрыть</button>
        </div>

        <div class="item" id="item2">
            <h3>Сибитный двухэтажный дом</h3>
            <img src="{{asset('/static/image/69-49house.jpg')}}" alt="Дом">
            <p>Милый и уютный двухэтажный дом, который может быть маленьким по размеру, но большим по своему уюту и очарованию. С его компактным дизайном он приглашает вас насладиться теплой атмосферой и комфортным пространством, где вы можете создать свой уголок спокойствия и уюта.</p>
            <p>Цена: $45,000</p>
            <button data-target="details2">Подробнее</button>
        </div>
        <div id="details2" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 3 (1 спальня) </li>
                <li>Наличие гаража: нет </li>
                <li>Популярность: 8/10 </li>
            </ul>
            <button data-target="details2">Закрыть</button>
        </div>

        <div class="item" id="item3">
            <h3>Современный монолитный дом</h3>
            <img src="{{asset('/static/image/M432house.jpg')}}" alt="Дом">
            <p>Превосходный просторный дом с обширной прилегающей территорией, идеально подходящей для активного образа жизни или уединенного отдыха. Наличие удобного гаража обеспечивает безопасное и удобное хранение вашего автомобиля, а также место для хобби или мастерской. Этот дом станет вашим укрытием, где вы сможете наслаждаться пространством и комфортом в любое время года.</p>
            <p>Цена: $93,000</p>
            <button data-target="details3">Подробнее</button>
        </div>
        <div id="details3" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 13 (2 спальни) </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 5/10 </li>
            </ul>
            <button data-target="details3">Закрыть</button>
        </div>

        <div class="item" id="item4">
            <h3>Пеноблочный дом с гаражом</h3>
            <img src="{{asset('/static/image/AS138house.png')}}" alt="Дом">
            <p>Двухэтажный дом с гаражом и колоннами на крыльце и балконе - это величественное здание, обладающее классическим стилем и изысканной архитектурой.</p>
            <p>Цена: $80,000</p>
            <button data-target="details4">Подробнее</button>
        </div>
        <div id="details4" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 6 (4 спальни) </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 7/10 </li>
            </ul>
            <button data-target="details4">Закрыть</button>
        </div>

        <div class="item" id="item5">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/AS2578house.png')}}" alt="Дом">
            <p>Милый одноэтажный дом с маленькими уличными фонарями, окруженный ухоженной и заботливо благоустроенной прилегающей территорией. Здесь каждый кустик цветет, каждый газон стрижен, создавая умиротворенную и гармоничную обстановку. Этот дом - идеальное место для отдыха и наслаждения природой прямо у вашего порога</p>
            <p>Цена: $53,000</p>
            <button data-target="details5">Подробнее</button>
        </div>
        <div id="details5" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 1 </li>
                <li>Количество комнат: 5(4 спальни)</li>
                <li>Наличие гаража: нет </li>
                <li>Популярность: 10/10 </li>
            </ul>
            <button data-target="details5">Закрыть</button>
        </div>

        <div class="item" id="item6">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/lasthouse.png')}}" alt="Дом">
            <p>Изысканный одноэтажный дом, окрашенный в нежные оттенки песочного бежа, который призван создать атмосферу уюта и тепла. Ухоженный прилегающий участок, усыпанный яркими цветами и ухоженной зеленью, приглашает к отдыху на свежем воздухе. Виранда, расположенная в боковой части здания, предоставляет идеальное место для отдыха и общения с семьей и друзьями в уединенной обстановке.</p>
            <p>Цена: 75 ,000</p>
            <button data-target="details6">Подробнее</button>
        </div>
        <div id="details6" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 7 (3 спальни) </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 2/10 </li>
            </ul>
            <button data-target="details6">Закрыть</button>
        </div>
    </div>
</div>
</body>
</html>
