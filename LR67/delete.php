<?php
include "servicesClass.php";
include "ConClass.php";
if($_GET['id'])
{
    Services::delete((int)$_GET['id']);
    header("Location: all.php");
}
?>