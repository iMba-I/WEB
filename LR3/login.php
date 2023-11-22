<?php
require_once 'loglogic.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'?>
    <title>Авторизация</title>
</head>
<body>
    <?php require_once 'header.php'?>
    <div class = "container">
        <div class="d-flex justify-content-center">
            <form action="login.php" class="text-center justify-content-center" method="post">
                <div class="justify-content-center">
                    <p class="text-primary">Логин</p>
                    <input type="email" name="logmail" value=""
                           placeholder="Введите логин" class="form-control mb-3">
                </div>
                <div class = "justify-content-center">
                    <p class="text-primary">Пароль</p>
                    <input type="password" name="logpass" placeholder="Введите пароль"
                           class="form-control mb-3 mb-3">

                </div>
                <input type="submit" value="Войти" name="login" class="btn btn-primary">
            </form>
        </div>
    </div>

</center>
</BODY>
</HTML>
