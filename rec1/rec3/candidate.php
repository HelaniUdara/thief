<?php
 include("dbcon.php");

 session_start();
 $order=0;
 //$recPerPage = 100;
 //checking the value of the order
 if(isset($_REQUEST['order'])){
  $order = $_REQUEST['order'];
}

if(isset($_REQUEST['reload'])){
  $_SESSION['perPage'] = $_REQUEST['selRecPerPage'];
 
}

 //Check whether the Page variable has a value or not
 //if it has a value it will be collected
 //if not it is the first time the program loads so it set page's value to 1
 if(isset($_REQUEST['page'])){
     $pageno = $_REQUEST['page'];
 }
 else{
    $pageno =1;
 }

  if(isset($_SESSION['perPage'])){
    $recPerPage = $_SESSION['perPage'];
  }
  else{
    $recPerPage = 100;
  }
  $end = $pageno * $recPerPage;

  //Setting the starting record of each page
  if($pageno == 1){
    $start = 0;
  }else{
    $start = (($pageno-1)*$recPerPage);
  }

  //Finding the full number of records in the given database - to find the ending page
  $sql1 = "SELECT * from result";
  $stmt = $conn->prepare($sql1);
  $stmt->execute();
 
  $list1 = $stmt->fetchAll();
  $numOfRec = sizeof($list1);
  //echo $numOfRec;

  //finding the ending page
  $fullNomOfPages = ceil($numOfRec/ $recPerPage); //ceil() --> rounds the value to its upper bound

  //The long way to get the integer value of full number of pages
  /*if(($numOfRec%$recPerPage)==0){
    $fullNomOfPages =  (int)$numOfRec/ $recPerPage;
  }
  else{
    $fullNomOfPages =  (int)(($numOfRec/ $recPerPage)+1);
  }*/
  //echo $fullNomOfPages;
  

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Candidate list</title>
    </head>
    <body>
       <h1>Candidates</h1><br/>

<?php

 if($order==1){
      $sql = "SELECT * from result ORDER BY Subject1_Grade asc LIMIT $start,$recPerPage";
 }
 else if ($order == 2){
      $sql = "SELECT * from result ORDER BY Subject1_Grade desc LIMIT $start,$recPerPage";
 }
 else {
      $sql = "SELECT * from result LIMIT $start,$recPerPage";
 }
 
 $stmt = $conn->prepare($sql);
 $stmt->execute();
 
 $list = $stmt->fetchAll();
 
 //var_dump($list);

?>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="form1" name="form1">
        
        <lable for="selRecPerPage">Number of records per page : </lable>
        <select id="selRecPerPage" name="selRecPerPage">
          <option value ="25">25</option>
          <option value ="50">50</option>
          <option value ="75">75</option>
          <option value ="100">100</option>
        </select>
        <input type="submit" name="reload" value="Reload">
    </form><br/><br/>
<table width = "100%" border ="1">
<tbody>
    <tr>
        <th scope = "col" >ID</th>
        <th scope = "col" >Subject 1</th>
        <th scope = "col" ><a href="candidate.php?order=1"><img src ="images/up.jpg" width= "20" height="20"></a>Subject1_Grade
        <a href="candidate.php?order=2"><img src ="images/down.jpg" width= "20" height="20"></a></th>
        <th scope = "col" >Subject 2</th>
        <th scope = "col" >Subject2-Grade</th>
        <th scope = "col" >Subject 3</th>
        <th scope = "col" >Subject3-Grade</th>
    </tr>

<?php
    
    foreach($list as $r){

        
        echo " <tr>
        <td>".$r['id']."</td> 
        <td>".$r['subject1']."</td>
        <td>".$r['subject1_grade']."</td>
        <td>".$r['subject2']."</td>
        <td>".$r['subject2_grade']."</td>
        <td>".$r['subject3']."</td>
        <td>".$r['subject3_grade']."</td>
    </tr>";
    }
      
?>
</tbody>
</table>
<br/><br/>
<?php
   if($pageno > 1){
?>
<a href="candidate.php?page=<?php echo $pageno-1?>&order=<?php echo $order?>">PREVIOUS </a>

<?php 
}

for($k = 1 ; $k <= $fullNomOfPages ; $k++){

    if($k == $pageno){
        echo " ".$k." ";
    }
    else{
    echo "<a href='candidate.php?page=$k&order=$order'> ".$k." </a>";
}
}

?>
<?php
   if($pageno < $fullNomOfPages){
?>
<a href="candidate.php?page=<?php echo $pageno+1?>&order=<?php echo $order?>"> NEXT</a>
<?php 
}
?>
</body>
</html>