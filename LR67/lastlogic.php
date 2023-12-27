<?php
$id="";
if(isset($_POST['id']))
    $id = $_POST['id'];

$name="";
if(isset($_POST['name']))
    $name = $_POST['name'];

$des="";
if(isset($_POST['des']))
    $des = $_POST['des'];

$cost="";
if(isset($_POST['cost']))
    $cost = $_POST['cost'];

$errors = array();

if(isset($_POST['otprav']))
{
    $filename = $_FILES['file'];
    if($id==="" || $name==="" || $des==="" || $cost==="" || $filename['name']==="")
    {
        array_push($errors, 'Заполните все поля');
    }
    if($cost<=0)
    {
        array_push($errors, 'Введите нормальную цену');
    }
    $regex = '/\.jpg$/i';
    if (!preg_match($regex, $filename['name']))
    {
        array_push($errors, 'Расширение файла должно быть .jpg');
    }
    $query = Services::ById((int)$_POST['id']);
    if(!empty($query[0]))
    {
        array_push($errors, 'Такой id уже зарегистрирован');
    }
    if(empty($errors))
    {
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];
        if($fileError === 0)
        {
            move_uploaded_file($fileTmpName, 'inc/catalogue_images/' . $fileName);
        }
        $aaaa = Services::add((int)$id,(int)$_POST['worker'],$filename['name'],$name,$des,(int)$cost);
        array_push($errors, 'Запись успешно добавлена');
    }
}

function ed($POST,$id){
    $errors = array();
    if(isset($POST['redakt']))
    {
        $filename = $_FILES['file'];
        if($POST['name']==="" || $POST['des']==="" || $POST['cost']==="" || $filename['name']==="")
        {
            array_push($errors, 'Заполните все поля');
        }
        if($POST['cost']<=0)
        {
            array_push($errors, 'Введите нормальную цену');
        }
        $regex = '/\.jpg$/i';
        if (!preg_match($regex, $filename['name']))
        {
            array_push($errors, 'Расширение файла должно быть .jpg');
        }
        if(empty($errors))
        {
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileError = $file['error'];
            if($fileError === 0)
            {
                move_uploaded_file($fileTmpName, 'inc/catalogue_images' . $fileName);
            }
            $aaaa = Services::edit((int)$id,(int)$POST['worker'],$filename['name'],$POST['name'],$POST['des'],(int)$POST['cost']);
            array_push($errors, 'Запись успешно отредактирована');
        }
    }
    array_push($errors, '');
    return $errors;
}
?>