<?php
    
    include("db.php");

    $sql = "SELECT * from student WHERE Age = 21";
    $sql2 = "SELECT * from student";

    $result = $conn->query($sql2);

    var_dump($result);

   
      //Test to check how this array store records
      /*
       $row = $result->fetch_array();
        foreach($row as $x =>$x_value){
        echo $x." : ".$x_value." , ";
        }
   
      //results --> Records store like a table/multidimentional array
      //row     --> Contain an associative array of one record
       */

    if($result->num_rows > 0){
        $n = $result->num_rows;
        echo "You have got ".$n." results.<br/><br/>";

?>

<table width = "50%" border ="1">
    <tbody>
        <tr>
            <th scope = "col" ></th>
            <th scope = "col" >Stdno</th>
            <th scope = "col" >Name</th>
            <th scope = "col" >Age</th>
            <th scope = "col" >City</th>
        </tr>

<?php

        $i = 1;
        while($row = $result->fetch_array()){

            // var_dump($row);
            echo " <tr>
            <td>$i</td> 
            <td>".$row['Stdno']."</td> 
            <td>".strtoupper($row['Name'])."</td>
            <td>".$row['Age']."</td>
            <td>".$row['City']."</td>
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
   
    </tbody>
</table>