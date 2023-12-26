<?php

require_once "db.php";
require_once "logic.php";
require_once "exportlogic.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'?>
    <title>Регистрация</title>
</head>
<body>

<?php require_once 'header.php'?>
<div class ="container">
    <div class="text-center">
        <h1>Экспорт данных в XML</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="export" value="1">
            <input type="hidden" name="action" value="export">
            <input type="submit" value="Экспортировать в XML">
            <div>
                <?php
                echo $result;
                echo $result2;
                ?>
            </div>
        </form>
    </div>

</body>
</html>