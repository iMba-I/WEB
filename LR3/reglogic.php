<?php
$Salt = "1afa148eb41f2e7103f21410bf48346c";
$name = '';
if (isset($_POST['name']))
{
    $name = htmlspecialchars($_POST['name']);
}

$log='';
if (isset($_POST['log']))
{
    $log = htmlspecialchars($_POST['log']);
}

$mail='';
if (isset($_POST['mail']))
{
    $mail = htmlspecialchars($_POST['mail']);
}
$RHfactor = '';
if (isset($_POST['RHfactor']))
{
    $RHfactor = htmlspecialchars($_POST['RHfactor']);
}

$vk_link='';
if (isset($_POST['vk_link']))
{
    $vk_link = htmlspecialchars($_POST['vk_link']);
}

$GroupBlood = '';
if (isset($_POST['GroupBlood']))
{
    $GroupBlood=htmlspecialchars($_POST['GroupBlood']);
}
$sex = 'M';
$M='checked';
$W='';
if(isset($_POST['sex']))
{
    $sex=htmlspecialchars($_POST['sex']);
    if($sex=='W')
    {
        $M='';
        $W='checked';
    }
    else
    {
        $M='checked';
        $W='';
    }
}

$date='';
if (isset($_POST['birthdate']))
{
    $date = htmlspecialchars($_POST['birthdate']);
}

$interests = '';
if (isset($_POST['interests']))
{
    $interests = htmlspecialchars($_POST['interests']);
}

$adres='';
if (isset($_POST['adres']))
{
    $adres = htmlspecialchars($_POST['adres']);
}



$optionItemBlood = [
    1,
    2,
    3,
    4
];

$optionItemResus = [
    "Положительный",
    "Отрицательный"
];

$arrayerrors = [
    "errname" => "",
    "errvk_link" => "",
    "errmail" => "",
    "errpassword" => "",
    "erradres" =>"",
    "errinterests" =>"",
    "errbirthdate" =>"",
];
if(isset($_POST['register'])){

    $patern_VK = '/^https?:\/\/(www\.)?vk\.com\/([a-zA-Z0-9_]+)/i';
    $patern_email = '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/';
    $patern_password ='/^(?=.*[\-])(?=.*[\ ])(?=.*[\!@#$%^&*()+.,<>])(?=.*[\_])(?=.*\d)[A-Za-z0-9\-_ \!@#$%^&*()+.,<>]{7,}$/u';
    $users = $mysql->prepare("SELECT * FROM users WHERE mail=:Mail");
    $users->execute([
        ':Mail' => $mail,
    ]);


    $usernum = $users->fetchColumn();
    $errors = 0;

    if($usernum){
        $arrayerrors['errmail'] = 'Пользователь с таким логином уже существует';
        $errors++;
    }

    if(preg_match($patern_email,$mail)){
        // proverka proshla
    }
    else {
        $arrayerrors['errmail'] = 'Невалидный email';
        $errors++;
    }

    if ($mail == ""){
        $arrayerrors['errmail'] = 'Заполните поле';
        $errors++;
    }

    if($name == ""){
        $arrayerrors['errname'] = 'Заполните ФИО полностью';
        $errors++;
    }

    if(!filter_var($vk_link, FILTER_VALIDATE_URL)){
        $arrayerrors['errvk_link'] = 'Заполните корректно поле ВКонтакте';
        $errors++;
    }

    $Password1 = $_POST['Password1'];
    $Password2 = $_POST['Password2'];
    echo $Password1;

    if(!preg_match($patern_password,$Password1)){
        $arrayerrors['errpassword'] = "Пароль должен быть длиннее 6 символов, обязательно содержит большие латинские буквы, маленькие латинские буквы, спецсимволы (знаки препинания, арифметические действия и тп), пробел, дефис, подчеркивание и цифры.";
        $errors++;
    }

    if($Password1 != $Password2 ){
        $arrayerrors['errpassword'] = 'Пароли не совпадают';
        $errors++;
    }

    if($Password1 == ""){
        $arrayerrors['errpassword'] = 'Введите пароль';
        $errors++;
    }

    if ($adres == "")
    {
        $arrayerrors['erradres'] = 'Заполните поле адреса';
        $errors++;
    }

    if ($interests == "")
    {
        $arrayerrors['errinterests'] = 'Напишите сюда хоть что нибудь';
        $errors++;
    }
     if ($date == "")
     {
         $arrayerrors['errbirthdate'] = 'Укажите дату рождения';
         $errors++;
     }


    if($errors==0){
        $PasswordHash = md5($Salt . $Password1);
        $query = "INSERT INTO users (mail, password_hash, name,birth_date,adress,sex,interests, vk_link, blood_type, RH_factor) VALUES (:mail, :password_hash, :name, :birth_date,:adres, :sex, :interests, :vk_link, :blood_type, :RH_factor)";
        $resultQuery = $mysql->prepare($query);
        $resultQuery->execute([
            ':mail' => $mail,
            ':password_hash' => $PasswordHash,
            ':name' => $name,
            ':birth_date'=>$date,
            ':adres'=>$adres,
            ':sex' => $sex,
            ':interests' => $interests,
            ':vk_link' => $vk_link,
            ':blood_type' => $GroupBlood,
            ':RH_factor' => $RHfactor,
        ]);

        session_start();
        $_SESSION["mail"] = $mail;

        header("Location: index.php");
    }

}