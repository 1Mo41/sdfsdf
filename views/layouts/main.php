<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/assets/css/style.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <img src="/pop-it-mvc/public/img/workes.jpg" alt>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <a href="<?= app()->route->getUrl('/workers') ?>">Сотрудники</a>
        <a href="<?= app()->route->getUrl('/add_workers') ?>">Добавить сотрудника</a>
        <a href="<?= app()->route->getUrl('/divisions_view') ?>">Подразделения</a>
        <a href="<?= app()->route->getUrl('/add_division') ?>">Добавить подразделения</a>
        <a href="<?= app()->route->getUrl('/room') ?>">Помещение</a>
        <a href="<?= app()->route->getUrl('/add_room') ?>">Добавить помещение</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
<!--       //  <a href="--><?php //= app()->route->getUrl('/signup') ?><!--">Регистрация</a>//-->
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>
<footer>
<!--    <nav class="podval">-->
<!--        <a href="--><?php //= app()->route->getUrl('/hello') ?><!--">Главная</a>-->
<!--        <a href="--><?php //= app()->route->getUrl('/workers') ?><!--">Сотрудники</a>-->
<!--        <a href="--><?php //= app()->route->getUrl('/divisions') ?><!--">Подразделения</a>-->
<!--        <a href="--><?php //= app()->route->getUrl('/room') ?><!--">Помещение</a>-->
<!--    </nav>-->
</footer>

</body>
</html>
