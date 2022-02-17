<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,regular,500,600,700,800,300italic,italic,500italic,600italic,700italic,800italic" rel="stylesheet" />
    <title>Anna Suvorova</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
        <div class="header">
                <form class="title" action="/index.php" >
                    <button class="title__button">Анна Суворова</button>
                </form>
                <div class="menu-burger">
                    <input  class="icons menu-burger" type="image" src="/img/icons/icons8-меню-50.png" onclick="activeBurgerMenu()">
                    <div class="menu-burger__slide ">
                        <form action="/index.php">
                            <button class="h4">Проекты</button>
                        </form>
                        <form action="/template/about-me.php">
                            <button class="h4">Обо мне</button>
                        </form>
                        <form action="/template/publication.php">
                            <button class="h4">Публикации</button>
                        </form>
                        <form action="/template/price.php">
                            <button class="h4">Цены</button>
                        </form>
                        <form action="/template/contacts.php">
                            <button class="h4">Контакты</button>
                        </form>
                    </div>
                </div>
                <div class="menu">
                    <form action="/index.php">
                        <button class="h4">Проекты</button>
                    </form>
                    <form action="/template/about-me.php">
                        <button class="h4">Обо мне</button>
                    </form>
                    <form action="/template/publication.php">
                        <button class="h4">Публикации</button>
                    </form>
                    <form action="/template/price.php">
                        <button class="h4">Цены</button>
                    </form>
                    <form action="/template/contacts.php">
                        <button class="h4">Контакты</button>
                    </form>
                </div>
        </div>
            <div class="price-table">
                <div class="price-blok">
                    <div class="price-blok__head">
                        <div class="price-blok__title">
                            Эскизный дизайн-проект<br>
                            2500 руб./м2<br>
                            <br>
                        </div>
                        <div class="price-blok__icons">
                                <img src="/img/icons/icons8-дизайн-50.png" alt="дизайн">
                        </div>
                    </div>
                    <div class="price-blok__body">
                        <br>
                        1. ПЛАНИРОВОЧНОЕ РЕШЕНИЕ<br>
                        2. СТРОИТЕЛЬНЫЕ ЧЕРТЕЖИ<br>
                        3. КОНЦЕПТУАЛЬНЫЕ КОЛЛАЖИ<br>
                        4. ВЕДОМОСТЬ ОТДЕЛКИ<br>
                        5. ВЕДОМОСТЬ МЕБЕЛИ И ОСВЕЩЕНИЯ<br>
                    </div>
                </div>
                <div class="price-blok">
                    <div class="price-blok__head">
                        <div class="price-blok__title">
                            Полный дизайн-проект<br>
                            3000 руб./м2<br>
                            <br>
                        </div>
                        <div class="price-blok__icons">
                            <img src="/img/icons/icons8-поэтажный-план-50.png" alt="план">
                            <img src="/img/icons/icons8-дизайн-50.png" alt="дизайн">
                        </div>
                    </div>
                    <div class="price-blok__body">
                        <br>
                        1. ПЛАНИРОВОЧНОЕ РЕШЕНИЕ<br>
                        2. СТРОИТЕЛЬНЫЕ ЧЕРТЕЖИ<br>
                        3. 3D ВИЗУАЛИЗАЦИИ<br>
                        4. ЭСКИЗЫ ЗАКАЗНЫХ ПОЗИЦИЙ МЕБЕЛИ<br>
                        5. ВЕДОМОСТЬ ОТДЕЛКИ<br>
                        6. ВЕДОМОСТЬ МЕБЕЛИ И ОСВЕЩЕНИЯ<br>
                        7. ИНТЕГРАЦИЯ ИНЖЕНЕРНЫХ ПРОЕКТОВ<br>
                    </div>
                </div>
                <div class="price-blok">
                    <div class="price-blok__head">
                        <div class="price-blok__title">
                            Доп. услуги: Авторский надзор<br>
                            50000 руб./мес<br>
                            <br>
                        </div>
                        <div class="price-blok__icons">
                            <img src="/img/icons/icons8-смотреть-50.png" alt="смотреть">
                            <img src="/img/icons/icons8-поэтажный-план-50.png" alt="план">
                            <img src="/img/icons/icons8-дизайн-50.png" alt="дизайн">
                        </div>
                    </div>
                    <div class="price-blok__body">
                        <br>
                        1. ВЫЕЗДЫ НА ОБЪЕКТ ДЛЯ КОНТРОЛЯ<br>
                        ВЫПОЛНЯЕМЫХ РЕМОНТНЫХ И<br>
                        ОТДЕЛОЧНЫХ РАБОТ НА СООТВЕТСТВИЕ<br>
                        ДИЗАЙН-ПРОЕКТУ<br>
                        2. ОНЛАЙН-КОНСУЛЬТАЦИИ ПО ТЕЛЕФОНУ<br>
                        3. ПОДБОР ДЕКОРА ПО ЗАВЕРШЕНИЮ<br>
                        РЕМОНТНЫХ И ОТДЕЛОЧНЫХ РАБОТ<br>
                    </div>
                </div>
            </div>
            <div class="footer">
                    <div class="messenger">
                        <form  action="https://www.behance.net/asuvorova" target="_blank">
                            <input class="icons" type="image" src="/img/icons/icons8-behance-50.png" alt="behance">
                        </form>
                        <form action=" https://wa.me/+79169166878" target="_blank">
                            <input  class="icons" type="image" src="/img/icons/icons8-whatsapp-50.png" alt="whatsapp">
                        </form>
                        <form action="https://www.instagram.com/suvorova_design" target="_blank">
                            <input  class="icons" type="image" src="/img/icons/icons8-instagram-50.png" alt="instagram">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>
    <script src="/javascript/script.js"></script>
</html> 