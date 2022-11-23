<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="validatelogin.js"></script>
    </head>
    <body>
    
    <?php

    include("dbcon.php");
    
    if(isset($_REQUEST['login'])){
        $username = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        $confpass = $_REQUEST['confpassword'];
       

        //Inserting data to the database
        try{
            $sql = "INSERT INTO users values('$username','$pass','$confpass')";
            $statm = $conn->prepare($sql);
            $statm->execute();

            echo "Login Successful!";
        
        }catch(PDOException $e){
            echo "Error in connection : ".$e;
        }
        
    }
    ?>
       <h1>Login</h1> 
       <p id="errormsg" style="color: red;"></p>
       <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="form1" name="form1" onsubmit="return validatefields()">
           <lable for="username" id="usernamelable">UserName : </lable><input type="text" id="username" name="username" onchange="validateUsername()"><br/><br/>
           <lable for="password" id="passwordlable">Password : </lable><input type="password" id="password" name="password" onchange="validatePassword()"><br/><br/>
           <lable for="confpassword" id="Confpasslable">Confirm Password : </lable><input type="password" id="confpassword" name="confpassword"><br/><br/>
        <input type="submit" name="login" value="Login">
               
        </form>
   

    </body>
</html>