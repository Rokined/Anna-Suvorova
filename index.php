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
            <div class="project-container">
                <form id="form" action="/php/class-project.php" target="_blank"></form>
                <input type="checkbox" name="checkbox" id="checkbox">
                    <div class="table">
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="1">
                            <input type="image" class="project-table__img" src="/img/id_1/id_1 (1).jpg" alt="ПРЕСС-БАР ВГТРК">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="2">
                            <input type="image" class="project-table__img" src="/img/id_2/id_2 (1).jpg" alt="РЕСТОРАН #FARШ ПУШКИНСКАЯ">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="3">
                            <input type="image" class="project-table__img" src="/img/id_3/id_3 (1).jpg" alt="РЕСТОРАН #FARШ РОСТОВ">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="4">
                            <input type="image" class="project-table__img" src="/img/id_4/id_4 (1).jpg" alt="ТЕРРАКОТОВАЯ ПЕКАРНЯ">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="5">
                            <input type="image" class="project-table__img" src="/img/id_5/id_5 (5).jpg" alt="СТОЛОВАЯ ВГТРК">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="6">
                            <input type="image" class="project-table__img" src="/img/id_6/id_6 (1).jpg" alt="МАГАЗИН МАРМЕЛАДА">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="7">
                            <input type="image" class="project-table__img" src="/img/id_7/id_7 (3).jpg" alt="КВАРТИРА НА АРБАТЕ">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="8">
                            <input type="image" class="project-table__img" src="/img/id_8/id_8 (3).jpg" alt="КВАРТИРА В СТИЛЕ СОВРЕМЕННАЯ КЛАССИКА">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="9">
                            <input type="image" class="project-table__img" src="/img/id_9/id_9 (1).jpg" alt="КВАРТИРА В ЖК ОТРАЖЕНИЕ">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="10">
                            <input type="image" class="project-table__img" src="/img/id_10/id_10 (1).jpg" alt="КВАРТИРА В ЖК ТЕТРИС">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="11">
                            <input type="image" class="project-table__img" src="/img/id_11/id_11 (5).jpg" alt="БАР TWISTED">
                        </button>
                        <button form="form" class="project-table__btn" type="sumbit" formmethod="GET" name="id" value="12">
                            <input type="image" class="project-table__img" src="/img/id_12/id_12 (1).jpg" alt="КВАРТИРА В ЖК ЗИЛАРТ">
                        </button>
                    </div>
                    <label id="tuk" for="checkbox"  value="ТЫК" type="button">
                    <span id="tuk">ТЫК</span>
                </label>
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
</html> 