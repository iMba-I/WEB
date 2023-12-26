<?php

require_once "db.php";
require_once "logic.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['export'])) {

        $result = $mysql->query("SELECT * FROM services");
        //получаем данные в виде ассоциативного массива
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        //создаем новый объект SimpleXMLElement для формирования хмл
        $xml = new SimpleXMLElement('<services/>');

        //преобразуем массив данных в хмл
        array_to_xml($data, $xml);

        $pathToSave = 'upload\\services_exported.xml';

        //формируем путь для сохранения файла хмл в директории сервера
        $filePath = $_SERVER['DOCUMENT_ROOT'] . "\\" . $pathToSave;
        echo $xml;
        //записываем данные в файл XML
        if ($xml->asXML($filePath)) {


            $url = 'http://localhost:63342/LABA1/worker.php';
            $url2 = "http://localhost:63342/LABA1/upload/services_exported.xml";
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, [
                'file' => new CURLFile("upload/services_exported.xml", 'application/xml', "services_exported1.xml")
            ]);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);


            if ($response === false) {
                throw new Exception("Ошибка отправки файла скрипту worker.php");
            }

            $result = "services_exported.xml передан скрипту worker.php по протоколу HTTP методом POST. ";
            $result2 = "Ссылка для просмотра файла: <a href='$url2'>$url2</a>";
            curl_close($curl);

        }
        else {
            echo 'Не удалось создать файл XML.';
        }


    }
}

//функция преобразования ассоциативного массива в хмл
function array_to_xml($data, &$xml) {
    foreach ($data as $row) {
        $gunNode = $xml->addChild('service');

        foreach ($row as $key => $value) {
        //Добавляем элементы хмл, экранируя специальные символы
        $gunNode->addChild($key, htmlspecialchars("$value"));
        }
    }
}



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