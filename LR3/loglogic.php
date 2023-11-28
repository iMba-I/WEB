<?php
require_once 'logic.php';
require_once 'db.php';

$login = '';
if (isset($_POST['logmail']))
{
    $login = htmlspecialchars($_POST['logmail']);
}
if (isset($_POST['logpass']))
{
    $password = htmlspecialchars($_POST['logpass']);
}

$Salt = "1afa148eb41f2e7103f21410bf48346c";
$pass_hash ="";
$arrerr= [
    'login' =>"",
    'pass' =>"",
    'nouser'=>"",
];

$errs = 0;

if (isset($_POST['login'])) {


    if ($login == "") {
        $arrerr['login'] = 'Введите логин';
        $errs++;
    }
    if ($password == "") {
        $arrerr['pass'] = 'Введите пароль';
        $errs++;
    }

    if ($errs == 0) {
        $PasswordHash = md5($Salt . $password);
        $query = "SELECT * FROM users WHERE mail = :mail AND password_hash = :PasswordHash";
        $user = $mysql->prepare($query);
        $user->execute([
            ':mail' => $login,
            ':PasswordHash'=>$PasswordHash,
        ]);
        $res=$user->fetch(PDO::FETCH_ASSOC);
        if (!$res)
        {
            $arrerr['nouser'] = "Пользователей с такими данными нет.";
            $errs++;
        } else
        {
            $_SESSION['mail'] = $login;
            header(header: 'Location: services.php');
        }
    }
}?>