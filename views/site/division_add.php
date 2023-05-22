
<h3><?= $message ?? ''; ?></h3>
<div class="chair-division">
    <h2>Обзор подразделений</h2>
    <div class="division">
        <img src="/pop-it-mvc/public/img/chair.jpg" alt><a href="<?= app()->route->getUrl('/chairs') ?>">ЭКОНОМИЧЕСКИЙ ФАКУЛЬТЕТ</a>
    </div>
    <p>кономический факультет успешно осуществляет - </p>
    <p>подготовку в области экономики и менеджмента.</p>
    <div class="division2">
        <img src="/pop-it-mvc/public/img/chair2.jpg" alt><a href="<?= app()->route->getUrl('/chairs_tex') ?>">ФАКУЛЬТЕТ ЭЛЕКТРОННОЙ ТЕХНИКИ</a>
    </div>
    <p>На факультете готовят специалистов по самым - </p>
    <p> современным направлениям науки и техники.</p>
    <div class="division3">
        <img src="/pop-it-mvc/public/img/chair3.jpg" alt><a href="<?= app()->route->getUrl('/chairs_mat') ?>">ФАКУЛЬТЕТ СИСТЕМ УПРАВЛЕНИЯ</a>
    </div>
    <p>Факультет систем управления является одним - </p>
    <p>из самых престижных факультетов вузов Томска.</p>
</div>
