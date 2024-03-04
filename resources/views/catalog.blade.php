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
<div class="wrapper">
    <div class="catalogGrid">
        <div class="item" id="item1">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $65,000</p>
            <button data-target="details1">Подробнее</button>
        </div>
        <div id="details1" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 6 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 6/10 </li>
            </ul>
            <button data-target="details1">Закрыть</button>
        </div>

        <div class="item" id="item2">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details2">Подробнее</button>
        </div>
        <div id="details2" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 7 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 8/10 </li>
            </ul>
            <button data-target="details2">Закрыть</button>
        </div>

        <div class="item" id="item3">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details3">Подробнее</button>
        </div>
        <div id="details3" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 4 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 2/10 </li>
            </ul>
            <button data-target="details3">Закрыть</button>
        </div>

        <div class="item" id="item4">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details4">Подробнее</button>
        </div>
        <div id="details4" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 12 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 1/10 </li>
            </ul>
            <button data-target="details4">Закрыть</button>
        </div>

        <div class="item" id="item5">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details5">Подробнее</button>
        </div>
        <div id="details5" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 9 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 10/10 </li>
            </ul>
            <button data-target="details5">Закрыть</button>
        </div>

        <div class="item" id="item6">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details6">Подробнее</button>
        </div>
        <div id="details6" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 3 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 2/10 </li>
            </ul>
            <button data-target="details6">Закрыть</button>
        </div>

        <div class="item" id="item7">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details7">Подробнее</button>
        </div>
        <div id="details7" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 5 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 6/10 </li>
            </ul>
            <button data-target="details7">Закрыть</button>
        </div>

        <div class="item" id="item8">
            <h3>Двухэтажный дом с гаражом</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Удобный дом с небольшой прилегающей территорией</p>
            <p>Цена: $100,000</p>
            <button data-target="details8">Подробнее</button>
        </div>
        <div id="details8" class="details" style="display: none;">
            <ul>
                <li>Количество этажей: 2 </li>
                <li>Количество комнат: 6 </li>
                <li>Наличие гаража: да </li>
                <li>Популярность: 3/10 </li>
            </ul>
            <button data-target="details8">Закрыть</button>
        </div>
    </div>
</div>
</body>
</html>
