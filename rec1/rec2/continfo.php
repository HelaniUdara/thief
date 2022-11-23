<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact Information</title>
    </head>
    <body>
       <h1>Contact Information</h1> 
        <?php
        // method 1:
        // $name = $_REQUEST['txtname'];
        //echo $name;

        // method 2:
        // $name2 = $_REQUEST['hname'];
        // echo $name2."<br/>";
             
        // using sessions
        session_start();
        $name = $_SESSION['s_name'];
        echo $name;

        //Remove a session variable
        unset($_SESSION['s_name']);

        //Remove the whole session
        session_unset();
        ?>


    </body>
</html>