<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP-Usage of loops</title>
    </head>
    <body>
        
    <?php
    //switch statement
    //In php we can use variables and also the comarison operators in the case 
    $x =37;

    switch($x){
        case $x > 80 : echo "Your grade is : A+";break;
        case $x > 60 : echo "Your grade is : A";break;
        case $x > 40 : echo "Your grade is : B";break;
        case $x <= 40 : echo "Your grade is : C";break;
    }
    
    ?>
    <?php
    //Using loops to print values to a table
    $name = array("Ishini", "Gimhani","Isuru","Kavindu","Sahan");
    $marks = array(78, 89, 56, 74, 83);


    ?>
    <table width="250" border = "1">
        <tbody?>
            <tr>
                <th>Name</th>
                <th>Marks</th>
            </tr>
    <?php
        for($i = 0; $i < count($name); $i++){
             echo"<tr>
                <td>$name[$i]</td>
                <td>$marks[$i]</td>
            </tr>";
        }
          
    ?>
        </tbody>
    </table>
        <br/><br/>
    <select>
        <?php 
            for($i =0 ;$i < count($name); $i++){
                echo "<option>$name[$i]</option>";
            }
        ?>
    <select>


    </body>
</html>