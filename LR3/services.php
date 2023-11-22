<?php
require_once 'filtrationlogic.php';
require_once 'logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Управляющая компания «Жэк», Волгоград - адрес и телефон, официальный сайт...</title>
    <?php require_once 'head.php';?>

</head>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; //шапка сайта
?>

<div class="container text-center"> <!-- параметры фильтра-->
    <form action = "services.php" method="get">
        <label>Фильтрация результатов поиска</label>
        <div class ="brdrbtm">
            <label>По стоимости:</label>
            <input type="number" name="cost" placeholder="Стоимость" value="<?php echo $cost?>" class="form-control">
        </div>
        <div class ="brdrbtm">
            <label>По сотруднику</label>
            <select name="title" class="form-control">

                <?php showlistel($mysql,$title)?>
            </select>
        </div>
        <div class ="brdrbtm">
            <label>По описанию</label>
            <input type="text" name="description" placeholder="Описание услуги" value="<?php echo "$desc"?>" class="form-control">
        </div>
        <div class ="brdrbtm">
            <label>По названию</label>
            <input type="text" name="name" placeholder="Название услуги" value="<?php echo "$name"?>" class="form-control">
        </div>
        <input type="submit" name="Filter" value="Применить фильтр" class="btn btn-primary">
        <input type="submit" name="clearFilter" value="Очистить фильтр" class="btn btn-danger">
    </form>
</div>

<?php $queryres = filtration($_GET,$mysql); ?>

<div class = "container text-center align-content-center">

        <table class = "table border-1 align-content-center">
            <thead>
            <tr>
                <th>Картинка</th>
                <th>Название услуги</th>
                <th>Сотрудник</th>
                <th>Описание</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
        <?php showtable($queryres);?>
            </tbody>
        </table>

</div>
</body>
</html>