<?php

if(isset($_REQUEST['submit'])){

   

    $filename = $_FILES['myfile']['name'];
    $filetype = $_FILES['myfile']['type'];
    $filesize = $_FILES['myfile']['size'];

    
    echo $filename."<br/>".$filetype."<br/>".($filesize/1024)." KB<br/><br/>";

    $max = 2 * 1024 * 1024;
    $allowtypes = array("image/jpg","image/png","image/jpeg");


    // checking the file type
    if(!(in_array($filetype,$allowtypes))){
        die("Unmatching File type.");
    }


    // checking the file size
    if($filesize > $max){
        die("Maximum upload file size is 2MB.");
    }


    // checking the file name
    if(file_exists("userupload/".$_FILES['myfile']['name'])){
        echo $_FILES['myfile']['name']." is already submitted. Please upload another file or rename.";
    }
    else{
        move_uploaded_file($_FILES['myfile']['tmp_name'],"userupload/".$_FILES['myfile']['name']);
        echo "Upload success!";
    }

    
}






?>