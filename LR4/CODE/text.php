<?php
require_once 'logic.php';
require_once 'preset.php';
$preset = isset($_GET['preset']) ? getPreset($_GET['preset']) : '';

include 'textlogic.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'head.php'?>
    <title>Текстовая страница</title>
</head>
<body>

<?php require 'header.php';?>
<div class = "main">
    <div class="container">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <form action="text.php" name="textPageArea" method="POST">
                Введите текст:
                <textarea name="POST_text" class="form-control" cols="200"
                          rows="5">
                    <?php
                    if ($preset) {
                        echo htmlspecialchars($preset);
                    } elseif (isset($_POST['POST_text'])) {
                        echo htmlspecialchars($_POST['POST_text']);
                    } else {
                        echo '';
                    }
                    ?>
                </textarea>
                <div class="col-12 mt-2 d-flex justify-content-start align-items-center">
                    <input type="submit" class="btn btn-primary me-5" value="Отправить" name="post_data">
                </div>
            </form>
        </div>
        <div class="mt-5 d-flex justify-content-start align-items-center">
            <h1>Ответ:</h1>
        </div>
        <div class="col-12 mt-5 form-control">
            <h4 class="col-12">Задание 4. Автоматически расставить дефисы в обезличенных местоимениях и междометиях
                (напр.: кто то → кто-то, где то → где-то, то-то, вот-вот, из-за, из-под, перед -ка, -де, -кась.)
            </h4>
            <div class="col-12 mt-1">
                <?php isset($_POST['POST_text']) ? case4($_POST['POST_text']) : ''; ?>
            </div>
        </div>

        <div class="col-12 mt-3 form-control">
            <h4 class="col-12">Задание 10. “Обрезка новости”.
                Найти в тексте самое длинное предложение.
                Обрезать его до 80 содержательных символов и вывести это предложение, закончив многоточием.</h4>
            <div class="col-12 mt-1">
                <?php isset($_POST['POST_text']) ? case10($_POST['POST_text']) : ''; ?>
            </div>
        </div>

        <div class="col-12 mt-3 form-control">
            <h4 class="col-12">Задание 14. Автоматически сформировать “Указатель ссылок”.</h4>
            <div class="col-12 mt-1">
                <?php isset($_POST['POST_text']) ? $anchorLinks = case14($_POST['POST_text']) : ''; ?>
                <?php echo isset($_POST['POST_text']) ? insertAnchorLinks($_POST['POST_text'], $anchorLinks) : 'Empty'; ?>
            </div>
        </div>

        <div class="col-12 mt-3 form-control">
            <h4 class="col-12">Задание 16. Фильтр запретных слов. “Запретными словами” в рамках ЛР признаются (в любом регистре) слова “пух”, “рот”, “делать”, “ехать”, “около”, “для”.
                Задача – заменить на ### (нужное количество символов) запрещенные слова в тексте.
            </h4>
            <div class="col-12 mt-1">
                <?php echo isset($_POST['POST_text']) ? case16($_POST['POST_text']) : ''; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
