<?php
require "db.php";

include "ConClass.php";
include "servicesClass.php";
include "Workers.php";
require_once "logic.php";
require_once "lastlogic.php"

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require_once 'head.php'?>
        <title>Регистрация</title>
    </head>
    <body>
<?php require_once 'header.php'?>
<center>
    <?php
    if(isset($_GET['id']))
    {
        $elem = Services::ById((int)$_GET['id']);
        $row = $elem[0];
        $id = $row['col_id'];
        $name = $row['col_name'];
        $des = $row['col_description'];
        $cost = $row['col_cost'];
        $id_worker = $row['col_id_worker'];
    }
    ?>
    <form method="post" enctype="multipart/form-data" class="d-flex flex-wrap">
        <h1>Редактирование заказа номер <?php echo $id?></h1>
        <input style='width: 200px; margin-left: 15px; margin-bottom: 15px' class="form-control" type="file" name="file" >
        <input style='width: 200px; margin-left: 15px; margin-bottom: 15px' class="form-control" type="text" name="name" placeholder="Адрес" value="<?php echo htmlspecialchars($name)?>">
        <input style='width: 200px; margin-left: 15px; margin-bottom: 15px' class="form-control" type="text" name="des" placeholder="Описание"value="<?php echo htmlspecialchars($des)?>">
        <input style='width: 200px; margin-left: 15px; margin-bottom: 15px' class="form-control" type="text" name="cost" placeholder="Цена"value="<?php echo htmlspecialchars($cost)?>">
        <select style='width: 200px; margin-left: 15px; margin-bottom: 15px' class="form-select" name="worker" aria-label="">
            <?php
            $arr = Workers::show();
            foreach( $arr as $elem)
            {
                if($id_worker == $elem['id'])
                    echo " <option selected value='" . $elem['id'] . "'>" . $elem['title'] . "</option>";
                else
                    echo " <option value='" . $elem['id'] . "'>" . $elem['title'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="redakt" value="Отправить">
    </form>
    <?php
    $err1 = ed($_POST,$id);
    foreach ($err1 as $err) {
        echo $err ."<br>";
    }
    ?>
</center>
    </BODY>
</HTML>
