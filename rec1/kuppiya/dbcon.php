<?php

$host = "localhost";
$user = "root";
$passwd = "";
$db = "kuppiya";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=UTF8",$user,$passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Error in connection : ".$e;
}


?>