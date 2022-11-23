<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>

    <?php

    include("dbcon.php");
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $city = $_REQUEST['city'];
        $email = $_REQUEST['email'];
        $color = $_REQUEST['color'];
        $teli = $_REQUEST['teli'];

        //Inserting data to the database
       /* try{
            $sql = "INSERT INTO datatable values('$username','$pass','$confpass')";
            $statm = $conn->prepare($sql);
            $statm->execute();

            echo "Login Successful!";
        
        }catch(PDOException $e){
            echo "Error in connection : ".$e;
        }
        */
    }
    ?>
       <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="form1" name="form1">
        <table width="30%" border="0">
            <tbody>
                <tr>
                    <th colspan="3" scope="col">Student Information</th>
                </tr>
                <tr>
                    <td width="21%" align="right">Name :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="name" name="name"></td>
                </tr>
                <tr>
                    <td width="21%" align="right">Age :</td>
                    <td width="3%"> </td>
                    <td width="76%" align="left"><input type="text"
                        id="age" name="age"></td>
                </tr>
                <tr>
                    <td width="21%" align="right">City :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="city" name="city"></td>
                </tr>
                <tr>
                    <td width="21%" align="right">Email :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="email"
                        id="email" name="email"></td>
                </tr>
                <tr>
                    <td width="21%" align="right">Color :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="color"
                        id="color" name="color"></td>
                </tr>
                <tr>
                    <td width="21%" align="right">Telephone :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="tel"
                        id="teli" name="teli"></td>
                </tr>
                <tr>
                    <th colspan="3" scope="col"> <input type="submit" name="submit"></th>
                </tr>
            </tbody>
        </table>

    </body>
</html>