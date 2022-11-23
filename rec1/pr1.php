<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Lesson 1</title>
    </head>
    <body>
        
    <?php
    
     $name = "University of Kelaniya";
     echo "<h1> $name </h1><br/>";
    
    echo "String Length :".strlen($name)."<br/>";
    echo "Word Count :".str_word_count($name)."<br/>";

    echo strrev($name)."<br/>";
    echo strpos("University of Kelaniya","of")."<br/>";
    echo str_replace("Kelaniya","Moratuwa",$name)."<br/>";
    echo var_dump($name)."<br/>";
    echo is_int($name)."<br/>";   //did not work


    $c = 1;
    while($c <= 10){
        echo "This is $c row.<br/>";
        $c++;
    }

    for($i = 0; $i < 5 ; $i++){
        echo 'I like ice cream<br/><br/><br/>';
    }


    /*Arrays :-

        1. Numaric
        2. Associative
        3. Multidimentional

    */

    //To declare arrays ---> We use array() function
    $arr = array(1,2,3,4,5);
    for($i = 0; $i < count($arr) ; $i++){
        echo $arr[$i]."<br/>";
    }

    
    $arr[1] = 25;
    echo $arr[1]."<br/>";
    for($i = 0; $i < count($arr) ; $i++){
        echo $arr[$i]."<br/>";
    }

   
    var_dump($arr)."<br/><br/>";

    //Associative arrays
    $marks = array("Nimal"=>78, "Kamal"=>86, "Ragav"=>96);
    var_dump($marks)."<br/><br/>";

    foreach($marks as $x =>$x_value){
        echo $x." : ".$x_value."<br/>";
    }

    //Multidimentiona arrays
    $allmarks = array(
        "Nimal"=>array("seng1"=>78,"seng2"=>85,"seng3"=>65),
        "Sera"=>array("seng1"=>97,"seng2"=>53,"seng3"=>77),
        "Piyath"=>array("seng1"=>42,"seng2"=>90,"seng3"=>59)
    );
    var_dump($allmarks)."<br/><br/>";

   
        foreach($allmarks as $x =>$x_value){
            echo $x." : ";
            foreach($x_value as $y =>$y_value){
                echo $y." : ".$y_value." , ";
            }
            echo "<br/>";
        
           
        }
    

    ?>

    </body>
</html>