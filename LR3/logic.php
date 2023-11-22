<?php

session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';


function authinfo()
{
    if($_SESSION['mail']!='')
    {
        echo '<form action="main.php" class="text-start justify-content-start" method="post">';
        echo 'Вы ';
        echo $_SESSION['mail'];
        echo ' <a href="main.php"><input type="submit" name="exit" value="Выйти"></a>';
        echo '</form>';
    }
    else
    {
        echo 'Вы не авторизованы. <a href = "login.php">Ввести логин и пароль</a>
            или <a href = "register.php">зарегистрироваться</a>';
    }
}

if (key_exists('exit',$_POST))
{
    $_SESSION["mail"]="";
}

