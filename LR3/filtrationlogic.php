<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

// сохраняем результаты фильтра
$cost='';
if (isset($_GET['cost']))
{
    $cost = $_GET['cost'];
}
$title = '';
if (isset($_GET['title']))
{
    $title = $_GET['title'];
}
$desc = '';
if (isset($_GET['description']))
{
    $desc = $_GET['description'];
}
$name = '';
if (isset($_GET['name']))
{
    $name = $_GET['name'];
}
// очищаем поля, если нажали очистить фильтр
if (key_exists('clearFilter', $_GET))
{
    $desc = '';
    $name = '';
    $title = '';
    $cost='';
}
    function showlistel ($db,$numt){ // Добавляем элементы выпадающего списка
        $que = "SELECT * FROM workers
                ORDER BY id";
        //$res = mysqli_query($db,$que);

        $stmt = $db->prepare($que);
        $stmt->execute();

        echo '<option value="">Сотрудник</option>';

        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            if ($numt === $rows['id'])
            {
            echo '<option value="'.$rows['id'].'" selected>'.$rows['title'].'</option>';
            } else {
                echo '<option value="'.$rows['id'].'">'.$rows['title'].'</option>';
            }
        }

    }

    function filtration($GET,$db) //  формируем запрос, возвращаем его результат, на вход получаем pdo экземпляр и метод $_get
    {
        $query = "SELECT img_path,name,description,cost,title FROM services
                                    inner join workers on services.id_worker=workers.id ";
        $arBinds = [];
        $stmt='';



        if (key_exists('Filter', $GET) and ($GET['cost']!='' or $GET['title']!='' or $GET['description']!='' or $GET['name']!=''))
        {
                $query.="WHERE ";

                if ($GET['cost']!="")
                {
                    $query .= "cost = :cost AND ";
                    $arBinds['cost'] = htmlspecialchars($GET['cost']);
                }

                if ($GET['title']!="")
                {
                    $query .= "workers.id = :title AND " ;
                    $arBinds['title'] = htmlspecialchars($GET['title']);
                }

                if ($GET['description']!="")
                {
                    $query .= "description RLIKE :description AND ";
                    $arBinds['description'] = htmlspecialchars($GET['description']);
                }

                if ($GET['name']!="")
                {
                    $query .= "name RLIKE :name AND ";
                    $arBinds['name'] = htmlspecialchars($GET['name']);
                }

        }

        $helpstr=rtrim($query,'AND ');
        $query = $helpstr;
        $query.= ' ORDER BY workers.id';
        $stmt = $db->prepare($query);
        $stmt->execute($arBinds);

        return $stmt;

    }

    function showtable($queryres) // выводим строки таблицы, на вход получаем результат запроса
    {
    while ($row = $queryres->fetch(PDO::FETCH_ASSOC)) { // собираем строку
        $imgpath = $row['img_path'];
        $pasteimg = '<img src="' . $imgpath . '" alt class ="img100x100"> </img>';
        $pasterow  = '<tr class = "rowh110">';
        $pasterow .= '<th>'  .  $pasteimg           . '</th>';
        $pasterow .= '<th>'  .  $row['name']        . '</th>';
        $pasterow .= '<th>'  .  $row['title']       . '</th>';
        $pasterow .= '<th>'  .  $row['description'] . '</th>';
        $pasterow .= '<th>'  .  $row['cost']        . '</th></tr>';

        echo $pasterow;
    }
    }


?>
