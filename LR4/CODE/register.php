<?php
require "db.php";

require_once "reglogic.php";
require_once "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'?>
    <title>Регистрация</title>
</head>
<body>

<?php require_once 'header.php'?>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <div class="h3 mb-4">
                    Регистрация нового пользователя
                </div>
                <div class="mb-3">
                    <a class="txt" href="login.php">
                        У вас уже есть аккаунт?
                    </a>
                </div>

                    <form action="register.php" class="text-start justify-content-start" method="post">
                    <div class = 'brdrbtm'>
                        <div class="  justify-content-start">
                            <p class="text-primary ">Фамилия, Имя и Отчество</p>
                            <input type="text " name="name" value="<?= $name ?>" placeholder="Введите ФИО"
                                   class="form-control mb-3  ">
                        </div>
                        <?php if($arrayerrors['errname']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errname'] . '</div>';}
                        ?>

                        <div class="justify-content-start">
                            <p class="text-primary">Логин</p>
                            <input type="email" name="mail" value="<?=$mail?>"
                                   placeholder="Введите логин" class="form-control mb-3">
                        </div>
                        <?php if($arrayerrors['errmail']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errmail'] . '</div>';}
                        ?>

                        <div class="justify-content-start ">
                            <p class="text-primary">Резус-фактор</p>
                            <select name="RHfactor" required class="form-control mb-3">
                                <?php
                                foreach ($optionItemResus as $id => $item) {
                                    $attr = ($RHfactor == $id) ? 'selected' : '';
                                    echo '<option value="' . $id . '"' . $attr . '>' . $item . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class=" justify-content-start">
                            <p class="text-primary">Пароль</p>
                            <input type="password" name="Password1" placeholder="Введите пароль"
                                   class="form-control mb-3 mb-3">
                        </div>

                        <div class="justify-content-start ">

                            <p class="text-primary">Повторите пароль</p>
                            <input type="password" name="Password2"  placeholder="Введите пароль"
                                   class="form-control mb-3">
                        </div>

                        <?php if($arrayerrors['errpassword']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errpassword'] . '</div>';}
                        ?>

                        <div class=" justify-content-start">
                            <p class="text-primary">Ссылка на профиль VK</p>
                            <input type="text" name="vk_link" value="<?= $vk_link ?>" placeholder="Введите ссылку на vk"
                                   class="form-control mb-3  ">
                        </div>
                        <?php if($arrayerrors['errvk_link']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errvk_link'] . '</div>';}
                        ?>
                        <div class = "mb-2">
                            <p class="text-primary">Пол</p>
                            <div class="form-check form-check-reverse">
                                <label class="form-check-label">
                                    Мужской
                                </label>
                                <input class="form-check-input " type="radio" name="sex" value = "M" <?php echo $M?>>

                            </div>
                            <div class="form-check form-check-reverse">
                                <input class="form-check-input" type="radio" name="sex" value = "W" <?php echo $W?>>
                                <label class="form-check-label">
                                    Женский
                                </label>

                            </div>
                        </div>


                        <div class = "mb-2">
                            <p class = "text-primary"> Дата рождения</p>
                            <input type="date" id="birthdate" name="birthdate" value="<?=$date?>" min="1950-01-01" max="2100-12-31" />
                        </div>
                        <?php if($arrayerrors['errbirthdate']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errbirthdate'] . '</div>';}
                        ?>

                        <div class="justify-content-start">
                            <p class="text-primary">Группа крови</p>
                            <select name="GroupBlood" required class="form-control mb-3">
                                <?php
                                foreach ($optionItemBlood as $id => $item) {
                                    $attr = ($GroupBlood == $id) ? 'selected' : '';
                                    echo '<option value="' . $id . '"' . $attr . '>' . $item . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="justify-content-start">
                            <p class="text-primary">Интересы</p>
                            <textarea class="form-control mb-3  " name="interests" id="interests" rows="7" placeholder="Напишите пару слов"><?php echo $interests;?></textarea>
                        </div>
                        <?php if($arrayerrors['errinterests']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['errinterests'] . '</div>';}
                        ?>

                        <div class="justify-content-start">
                            <p class="text-primary">Адрес</p>
                            <input type="text " name="adres" value="<?= $adres ?>" placeholder="Введите адрес"
                                   class="form-control mb-3  ">

                        </div>
                        <?php if($arrayerrors['erradres']){
                            echo ' <div class = "err mb-2 text-danger">'.$arrayerrors['erradres'] . '</div>';}
                        ?>


                    </div>



                    <input type="submit" value="Отправить" name="register" class="btn btn-danger">
                </form>
                </br>
            </div>
        </div>
    </div>

</body>
</html>