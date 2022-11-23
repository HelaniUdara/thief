<?php

include("dbcon.php");

$sql = "SELECT * from test";
$stmt = $conn->prepare($sql);
$stmt->execute();
$list = $stmt->fetchAll();
var_dump($list);

foreach($list as $r){
   echo $r['Name']."  |  ".$r['Age']."  |  ".$r['Gender']."  |  ".$r['City']."<br/>";
}

if(sizeof($list) > 0){
    $n = sizeof($list);
    echo "You have got ".$n." results.<br/><br/>";

?>

<table width = "50%" border ="1">
<tbody>
    <tr>
        <th scope = "col" ></th>
        <th scope = "col" >Name</th>
        <th scope = "col" >Age</th>
        <th scope = "col" >Gender</th>
        <th scope = "col" >City</th>
    </tr>

<?php

    $i = 1;
   foreach($list as $r){

        // var_dump($row);
        echo " <tr>
        <td>$i</td> 
        <td>".$r['Name']."</td>
        <td>".$r['Age']."</td>
        <td>".$r['Gender']."</td>
        <td>".$r['City']."</td>
    </tr>";
   // $uppername = strtoupper($row['Name']);
   // $id = $row['Stdno'];
   // $sql3 = "UPDATE student set Name = '".$uppername."' WHERE Stdno = '".$id."'";
   // $conn->query($sql3);
   // $i++;
      
    }
}else{
    echo "No result found";
}





?>