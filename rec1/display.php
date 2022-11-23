<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Display inputed form data</title>
    </head>
    <body>
        
    <?php
    /*One method of displaying data
    echo "Name : ".$_REQUEST['name']."<br/>";
    echo "Age : ".$_REQUEST['age']."<br/>";
    echo "City : ".$_REQUEST['city']."<br/>";
    */

    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $teli = $_POST['teli'];
    

    echo $name."<br/>".$age."<br/>".$city.
        "<br/>".$email."<br/>".$password."<br/>".
        $color."<br/>".$date."<br/>".$time."<br/>".$teli;
    
    ?>

    </body>
</html>