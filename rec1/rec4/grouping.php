<?php

include("dbcon.php");

$sql = "SELECT distinct Country from olympic";
$stmt = $conn->prepare($sql);
$stmt->execute();
$distcon = $stmt->fetchAll();
var_dump($distcon);

foreach($distcon as $r){

    // var_dump($row);
    echo "<h2>".$r['Country']."</h2>";
    $coun = $r['Country'];
    $sql2 = "SELECT Sport,Athlethename,(Gold+Silver+Bronze) AS TotalNumOfMedals FROM olympic WHERE Country = '".$coun."'";
    
    $stmt = $conn->prepare($sql2);
    $stmt->execute();
    $distcon = $stmt->fetchAll();
    foreach($distcon as $r){

        // var_dump($row);
        echo $r['Sport']." - ".$r['Athlethename']." - ".$r['TotalNumOfMedals'].
        " <br/>";
    }

    echo "<a href='_bycountry.php?Country=".$coun."'>dsf</a>";
}

?>
