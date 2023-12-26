<?php
require_once('db.php');

function createKeyValue($key, $value) {
    return [$key => $value];
}
//функция создания таблицы
function createTable($dbh, $tableName, $columns)
{
//формируем SQL-запрос для создания таблицы, если она не существует
    $createTableSQL = "CREATE TABLE IF NOT EXISTS $tableName (";
    foreach ($columns as $column) {
        $createTableSQL .= "$column VARCHAR(255), ";
    }
    $createTableSQL = rtrim($createTableSQL, ', '); //удаляем последнюю запятую
    $createTableSQL .= ")";

//выполняем запрос
    $dbh->exec($createTableSQL);
}

//функция вставки или обновления данных в таблице
function insertOrUpdateData($dbh, $tableName, $columns, $data)
{
    foreach ($data as $row) {
//защита от SQL инъекций - обрамляем значения кавычками
        $values = array_map(function ($value) use ($dbh) {
            return $dbh->quote($value);
        }, $row);

//Подготовка SQL для вставки или обновления записи
        $insertOrUpdateSQL = "INSERT INTO $tableName (" . implode(', ', $columns) . ") VALUES (" . implode(', ', $values) . ") ON DUPLICATE KEY UPDATE ";
        foreach ($columns as $column) {
            $insertOrUpdateSQL .= "$column = VALUES($column), ";
        }
        $insertOrUpdateSQL = rtrim($insertOrUpdateSQL, ', ');

//подготавливка и выполняет SQL запрос
        $stmtInsertOrUpdate = $dbh->prepare($insertOrUpdateSQL);
        $stmtInsertOrUpdate->execute();
    }
}
$impres="";
//проверяем, запрос пришел методом POST и существует параметр import
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["import"])) {
        // Проверяем, был ли выбран файл
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            // Проверяем размер файла
            if ($_FILES["file"]["size"] > 30000) {
                $impres = "Ошибка: Файл слишком большой (максимальный размер 30000 байт).";
            } else {
                // Директория для сохранения загруженных файлов
                $uploadDir = 'uploads/';

                // Создаем директорию, если она не существует
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                // Перемещаем загруженный файл в желаемую директорию
                $filePath = $uploadDir . basename($_FILES['file']['name']);


            }
//проверяем, файл существует
            if (file_exists($filePath)) {
//получаем файл
                $handle = fopen($filePath, "r");
                $xmlContent = fread($handle, filesize($filePath));
                //$xmlContent = file_get_contents($filePath);

//Проверка, является ли загруженное содержимое действительным хмл
                $isValidXml = simplexml_load_string($xmlContent) !== false;

                if ($isValidXml) {
                    $xmlData = simplexml_load_string($xmlContent);
                    $dataArray = [];

//преобразуем данные из XML в массив
                    foreach ($xmlData->service as $service) {
                       /* $dataArray[] = [
                            'id' => (string)$service->id,
                            'name' => (string)$service->name,
                            'img_path' => (string)$service->img_path,
                            'id_worker' => (string) $service->id_worker,
                            'description'=>(string) $service->description,
                            'cost' => (string) $service->cost,

                        ];*/

                        $serviceData = [];

                        foreach ($service->children() as $child) {
                            $serviceData[$child->getName()] = (string)$child;
                        }

                        $dataArray[] = $serviceData;

                    }

//проверяем что массив данных не пустой
                    if (!empty($dataArray)) {
//создаем имя таблицы, используя имя файла
                        $tableName = pathinfo($filePath, PATHINFO_FILENAME) . '_imported';

//изменяем имена столбцов, чтобы они не начинались с цифр
                        $columns = array_keys($dataArray[0]);
                        $columns = array_map(function ($col) {
                            return 'col_' . $col;
                        }, $columns);

//создаем таблицу, если она не существует
                        createTable($mysql, $tableName, $columns);

//вставляем или обновляем данные в таблице
                        insertOrUpdateData($mysql, $tableName, $columns, $dataArray);

//выводим сообщение об успешной обработке данных
                        $rowCount = count($dataArray);
                        $impres = "Файл с данными обработан. Создана таблица $tableName и добавлено/обновлено $rowCount записей.";
                    } else {
                        $impres = "Ошибка при извлечении данных из XML.";
                    }
                } else {
                    $impres = "Ошибка при загрузке файла. Некорректный XML.";
                }
            } else {
                $impres = "Файл не существует.";
            }
        }else {
            $impres = "Ошибка при загрузке файла.";
        }
} else {
    $impres = "";
}
?>