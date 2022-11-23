<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Student Registration</title>
    </head>
    <body>

    <?php

    include("db.php");
    
    if(isset($_REQUEST['submit'])){
        
        $stdno = $_REQUEST['stdno'];
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $city = $_REQUEST['city'];

        $sql = "INSERT INTO student values('".$stdno."','".$name."',".$age.",'".$city."')";
        $result = $conn->query($sql);

        if($result){
            echo "You have successfully registered.<br/><br/><br/>";
        }else{
            echo "Error ...<br/><br/><br/>";
        }
    
    }
    ?>
       <h1>Student Registration</h1> 
       <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="form1" name="form1">
            <table width="50%" border="0">
                <tbody>
                
                <tr>
                    <td width="30%" align="right">Student Number :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="stdno" name="stdno"></td>
                </tr>
                <tr>
                    <td width="30%" align="right">Name :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="name" name="name"></td>
                </tr>
                <tr>
                    <td width="30%" align="right">Age :</td>
                    <td width="3%"> </td>
                    <td width="76%" align="left"><input type="text"
                        id="age" name="age"></td>
                </tr>
                <tr>
                    <td width="30%" align="right">City :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="city" name="city"></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <th colspan="3" scope="col" > <input type="submit" name="submit"></th>
                </tr>
                </tbody>
            </table>
        </form>
   

    </body>
</html>