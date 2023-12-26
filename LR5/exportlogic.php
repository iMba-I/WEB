<?php

require_once "db.php";


    //$result = $mysql->query("SELECT * FROM services");
    //$data_array = array();
    //$xml = '<?xml version="1.0"';
    /*while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
       /* $data_array[] = array(
            'img_path' => $row['img_path'],
            'name' => $row['name'],
            'id_worker' => $row['id_worker'],
            'description' => $row['description'],
            'cost' => $row['cost']
        );
        $xml.='\n <item>\n\t';
        $xml.='<img_path>'.$row['img_path'].'</img_path>\n\t';
        $xml.='<name>'.$row['name'].'</name>\n\t';
        $xml.='<id_worker>'.$row['id_worker'].'</id_worker>\n\t';
        $xml.='<description>'.$row['description'].'</description>\n\t';
        $xml.='<cost>'.$row['cost'].'</cost>\n';
        $xml.='\n </item>\n';
    }*/
//логика работы с бд
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['export'])) {


        //проверка наличия символов - ..
        if (strpos('services', '..') !== false) {
            die('Ошибка: Недопустимое имя таблицы.');
        }

        //SQL запрос на выбор всех данных из указанной таблицы
        //$sql = "SELECT * FROM services";
        //$stmt = $dbh->prepare($sql);
        //$stmt->execute();
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


            $filePath = "upload/services_exported.xml";
            $url = 'http://localhost/LABA1/worker.php';
            $url2 = "http://localhost/LABA1/upload/services_exported.xml";

            if (file_exists($filePath)) {
                $postFields = [
                    'file' => new CURLFile($filePath, 'text/xml', 'services_exported.xml')
                ];

                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($curl);

                if ($response === false) {
                    throw new Exception("Ошибка отправки файла скрипту worker.php");
                }

                curl_close($curl);

                $result = "services_exported.xml передан скрипту worker.php по протоколу HTTP методом POST. ";
                $result2 = "Ссылка для просмотра файла: <a href='$url2'>$url2</a>";
            }

        }  else {
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





