<?php
    require_once '/my-project/anna-suvorova/php/class-project.php';
?>

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
            <div class="card-project">
                <div class="card-project__wrapper-photo">
                    <div class="btn_block">
                        <button class="btn prev" onclick="minSlide()">  &#10094; </button>
                    </div>
                        <div class="slider">
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 1 . ').jpg">' ?>
                            </div>
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 2 . ').jpg">' ?>
                            </div>
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 3 . ').jpg">' ?>
                            </div>
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 4 . ').jpg">' ?>
                            </div>
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 5 . ').jpg">' ?>
                            </div>
                            <div class="slide">
                                <?php echo '<img class="slide__img" src="/img/id_' . $id . '/id_' . $id . ' (' . 6 . ').jpg">' ?>
                            </div>
                        </div>
                    <div class="btn_block">
                        <button class="btn next" onclick="plusSlide()">  &#10095; </button>
                    </div>
                </div>
                <div class="card-project__atribut">
                    <div class="card-project__name"><?php echo ($project->name) . '<br>'; ?></div>
                    <div class="card-project__location">локация: <?php echo ($project->location) . '<br>'; ?></div>
                    <div class="card-project__yardag">площадь: <?php echo ($project->yardag)?>м²<br></div>
                    <div class="card-project__design">дизайн: <?php echo ($project->design) . '<br>'; ?></div>
                    <div class="card-project__photographer">
                        <?php if ($result["photographer"] == false) {
                        echo ''; 
                        }
                        else{
                            echo ("фотограф: " . $project -> photographer . '<br>');
                        }
                        ?>
                    </div>
                    <div class="card-project__year">год: <?php echo ($project->year) . '<br>'; ?></div>
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
    <script src="/javascript/script.js"></script>
</body>
</html> 