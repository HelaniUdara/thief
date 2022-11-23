<?php
    //Procedural method --> mysqli_connect('servername','username of the database','password','database name');
    //$conn = mysqli_connect('localhost','root','','seng21253');

    //Object oriented method
    //$conn = new MySQLi('localhost','root','','seng21253');

    //Best practice - MySQL method
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "seng21253";

    $conn = new MySQLi($host,$user,$passwd,$db);


    /*To connect with any kind of database (MySQL, Oracle,....)
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "seng21253";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=UTF8",$user,$passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error in connection : ".$e;
    }

    */
/*
    if($conn){
        echo "connect to the server successfully!";
    }
*/
/*
    //Inserting records to database
    $sql = "INSERT INTO student values('SE/2019/024','Diyon Amarasekare',22,'Kegalle')";

    //Updating records in the database
    $sql2 = "UPDATE student set Age = 21 WHERE Stdno ='SE/2019/019'";

    //Deleting records in the database
    $sql3 = "DELETE from student WHERE City = 'Matara'";

    //$result = $conn->query($sql3);

    if($result){
        echo "Deleted the Records in DB";
    }else{
        echo "Error in SQL...";
    }

*/

?>