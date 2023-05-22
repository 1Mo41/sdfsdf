<div class="login">
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <h2>Авторизация</h2>
        <label> <input type="text" name="login" placeholder="Логин"></label>
        <label> <input type="password" name="password" placeholder="Пароль"></label>
        <button>Войти</button>
    </form>
</div>
<?php endif;
