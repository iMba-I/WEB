<?php

$p1 = "localhost";
$p2 = "root";
$p3 = "";
$p4 = "hoa_services";
$mysql = mysqli_connect($p1, $p2, $p3, $p4);
$mysql1 = new PDO("mysql:host=localhost;dbname=hoa_services;charset=utf8","root","");
?>