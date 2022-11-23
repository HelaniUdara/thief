<?php

include("dbcon.php");


    $coun = $_REQUEST['Country'];
  
  
  $sql2 = "SELECT Sport,Athlethename,(Gold+Silver+Bronze) AS TotalNumOfMedals FROM olympic WHERE Country = '".$coun."'";
    
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $distcon = $stmt->fetchAll();
    echo "<h1>".$coun."</h1>";
    foreach($distcon as $r){

        // var_dump($row);
        echo $r['Sport']." - ".$r['Athlethename']." - ".$r['TotalNumOfMedals'].
        " <br/>";
    }



?>