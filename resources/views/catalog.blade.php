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
            <a href="#details1"><button>Подробнее</button></a>
            <div id="details1" class="details" style="display: none;">
                <ul>
                    <li>Количество этажей: 2 </li>
                    <li>Количество комнат: 6 </li>
                    <li>Наличие гаража: да </li>
                    <li>Популярность: 6/10 </li>
                </ul>
            </div>

        </div>
        <div class="item" id="item2">
            <h3>Дом 2</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Описание дома или квартиры</p>
            <p>Цена: $100,000</p>
            <a href="#details2"><button>Подробнее</button></a>
            <div id="details2" class="details" style="display: none;">
                <ul>
                    <li>Количество этажей: 2 </li>
                    <li>Количество комнат: 6 </li>
                    <li>Наличие гаража: да </li>
                    <li>Популярность: 6/10 </li>
                </ul>
            </div>
        </div>
        <div class="item" id="item3">
            <h3>Дом 3</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Описание дома или квартиры</p>
            <p>Цена: $100,000</p>
            <a href="#details3"><button>Подробнее</button></a>
            <div id="details3" class="details" style="display:none;">
                <ul>
                    <li>Количество этажей: 2 </li>
                    <li>Количество комнат: 6 </li>
                    <li>Наличие гаража: да </li>
                    <li>Популярность: 6/10 </li>
                </ul>
            </div>
        </div>
        <div class="item" id="item4">
            <h3>Дом 4</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Описание дома или квартиры</p>
            <p>Цена: $100,000</p>
            <a href="#details4"><button>Подробнее</button></a>
            <div id="details4" class="details" style="display: none;">
                <ul>
                    <li>Количество этажей: 2 </li>
                    <li>Количество комнат: 6 </li>
                    <li>Наличие гаража: да </li>
                    <li>Популярность: 6/10 </li>
                </ul>
            </div>
        </div>
        <div class="item" id="item5">
            <h3>Дом 5</h3>
            <img src="{{asset('/static/image/test.jpeg')}}" alt="Дом">
            <p>Описание дома или квартиры</p>
            <p>Цена: $100,000</p>
            <a href="#details5"><button>Подробнее</button></a>
            <div id="details5" class="details" style="display: none;">
                <ul>
                    <li>Количество этажей: 2 </li>
                    <li>Количество комнат: 6 </li>
                    <li>Наличие гаража: да </li>
                    <li>Популярность: 6/10 </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
