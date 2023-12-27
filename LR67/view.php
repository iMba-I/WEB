<?php
include "ConClass.php";
include "servicesClass.php";
include "logic.php";
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
    <div class="taab">
        <a href="add.php"><input type="submit" name="dobavit" value="Добавить новю запись"></a>
    </div>
    <div class="tp">
        <table border="1">
            <thead>
            <tr class = 'text-center'>
                <th>id услуги</th>
                <th>картинка</th>
                <th>Название услуги</th>
                <th>id работника</th>
                <th>Описание</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $arr = Services::show();
            foreach( $arr as $elem)
            {
                echo "<tr><td align='center'>" . htmlspecialchars($elem['col_id']) . "</td>
                            <td align='center'><img src='".htmlspecialchars($elem['col_img_path'])."' height='200px' widht='300px'></td>
                            <td align='center'>" . htmlspecialchars($elem['col_name']) . "</td>
                            <td align='center'>" . htmlspecialchars($elem['col_id_worker']) . "</td>
                            <td align='center'>" . htmlspecialchars($elem['col_description']) . "</td>
                            <td align='center'>" . htmlspecialchars($elem['col_cost']) . "</td>
                            <td align='center'><a href='edit.php?id=".htmlspecialchars($elem['col_id'])."' type='button' id='edit' class='btn btn-primary'><button>Редактировать</button></a></td>
                            <td align='center'><a href='delete.php?id=".htmlspecialchars($elem['col_id'])."' type='button' id='edit' class='btn btn-primary'><button>Удалить</button></a></td>
                        </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


</center>

</body>
</html>
