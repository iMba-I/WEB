<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

    function showlistel ($db,$numt){
        $que = "SELECT * FROM workers
                ORDER BY id";
        $res = mysqli_query($db,$que);

        echo '<option value="">Сотрудник</option>';

        while ($rows = mysqli_fetch_assoc($res))
        {
            if ($numt === $rows['id'])
            {
            echo '<option value="'.$rows['id'].'" selected>'.$rows['title'].'</option>';
            } else {
                echo '<option value="'.$rows['id'].'">'.$rows['title'].'</option>';
            }
        }

    }

    function filtration($GET,$db,&$cost,&$title,&$desc,&$name)
    {
        $query = "SELECT img_path,name,description,cost,title FROM services
                                    inner join workers on services.id_worker=workers.id ";
        $arBinds = [];
        if (!key_exists('clearFilter', $GET))
        {

            if (count($GET) > 0)
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
                    $query .= "description LIKE :description AND ";
                    $arBinds['description'] = htmlspecialchars($GET['description']);
                }

                if ($GET['name']!="")
                {
                    $query .= "name LIKE :name AND ";
                    $arBinds['name'] = htmlspecialchars($GET['name']);
                }
                $helpst=rtrim($query,'AND ');
                $query = $helpst;
            }
            $stmt = $db->prepare($query);
            echo "$query <br>";
            $stmt->execute($arBinds);
            $aboba = $stmt->fetchAll();
            //echo "$stmt <br>";

            print_r($aboba);
            echo $aboba['0''1'];

        } else
        {
            $cost ='';
            $title ='';
            $name ='';
            $desc ='';
        }

        $query.= ' ORDER BY workers.id';
        echo "$query";
        return $query;

    }

    function showtable($queryres)
    {
    while ($row = mysqli_fetch_assoc($queryres)) { // собираем строку
        $imgpath = $row['img_path'];
        $pasteimg = '<img src="' . $imgpath . '" alt class ="img100x100"> </img>';
        $pasterow = '<tr class = "rowh110"><th>' . $pasteimg . '</th><th>' . $row['name'] . '</th><th>' . $row['title'] . '</th><th>';
        $pasterow .= $row['description'] . '</th><th>' . $row['cost'] . '</th></tr>';

        echo $pasterow;
    }
    }

    $cost='';
    $title = '';
    $desc = '';
    $name = '';
?>
