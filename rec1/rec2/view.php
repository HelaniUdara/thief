<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View Information</title>
    </head>
    <body>
       <h1>View Information</h1> 
       <?php 
       
       if(isset($_REQUEST['submit'])){
         $name = $_REQUEST['name'];
         
        // passing values to the next page using a session
         session_start();
         $_SESSION['s_name'] = $name;

         //redirecting to the continfo.php
         header('Location:continfo.php');

       }
       
       ?>
    <!-- 1 method : using a query string we can pass information got from the first page to the third page -->
   <!-- <a href="continfo.php?txtname=perera">NEXT PAGE</a>-->

   <!-- 2 method : using a form with hidden  input types we can pass information got from the first page to the third page -->
    <!--<form action="continfo.php" method="post" id="form2" name="form2">
        
        <input type="hidden" id="hname" name="hname" value ="<?php echo $name?>"><
        <input type="submit" name="submit">
    </form>
    -->

    <!-- <a href="continfo.php">NEXT PAGE</a> -->

    </body>
</html>