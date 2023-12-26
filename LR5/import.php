<?php
require "db.php";

require_once "importlogic.php";
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
    <form method="post" action="import.php" enctype="multipart/form-data">
        <label for="file">Выберите файл:</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="file" name="file" />
        <input type="submit" name="import" value="Загрузить" />
    </form>
    <div class = 'text-center'>
        <?php echo $impres;?>
    </div>
</div>

