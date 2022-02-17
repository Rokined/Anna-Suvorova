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
            <div class="contacts-table">
                <a  href="mailto:asuvorova7@mail.ru">asuvorova7@mail.ru</a><br> 
                <a  href="tel:+79169166878">+7 (916) 916 68 78</a><br> 
                <br>
                Нахожусь в Москве, но<br>
                создаю проекты по <br>
                всему миру!<br>
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