<?php

include("dbcon.php");
$aname =null;
$sport =null;
$age =null;

if(isset($_REQUEST['subcheck'])){
    $aname = $_REQUEST['name'];
    $sport = $_REQUEST['selSport'];
    $age = $_REQUEST['age'];

    $sql = "SELECT * FROM olympic WHERE Athlethename ='".$aname."' AND Age=".$age." AND Sport = '".$sport."'";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->rowcount();
    $res = $stmt->fetchAll();

    if($row > 0){


        ?>

        <h3 style="color: red">You have already registered.</h3>

<?php
    }
    else{
        $sql2 = "SELECT * FROM olympic WHERE Athlethename ='".$aname."' AND Age=".$age;
    
        $stmt1 = $conn->prepare($sql2);
        $stmt1->execute();
        $row1 = $stmt1->rowcount();
        $res1 = $stmt1->fetchAll();
        if($row1 > 0){
            foreach($res1 as $r){

                $country = $_REQUEST['selCoun'];
            
            }
        
        }

        

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Entering Sports Records</title>
    </head>
    <body>

    <h1>Entering Sports Records</h1>
        
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="form1" name="form1">
        <table width="50%" border="0">
            <tbody>
                
                <tr>
                    <td width="35%" align="right">Athlethe's Name :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left"><input type="text"
                        id="name" name="name" value="<?php echo $aname;?>"></td>
                </tr>
                <tr>
                    <td width="35%" align="right">Age :</td>
                    <td width="3%"> </td>
                    <td width="76%" align="left"><input type="text"
                        id="age" name="age" value="<?php echo $age;?>"></td>
                </tr>
                <tr>
                    <td width="35%" align="right">Sport :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <select id="selSport" name="selSport" >
                        <option value="Swimming">Swimming</option>
                        <option value="Gymnastics">Gymnastics</option>
                        <option value="Speed Skating">Speed Skating</option>
                        <option value="Table Tennis">Table Tennis</option>
                        <option value="Badminton">Badminton</option>
                        <option value="Vollyball">Vollyball</option>
                        <option value="Netball">Netball</option>
                        <option value="Football">Football</option>
                    </select>
                    <input type="submit" name="subcheck" id="subcheck" value="Check">
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right">Country :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <select id="selCoun" name="selCoun" Value = "aa" <?php
                        if(isset($country)){
                            echo "value = '".$country."' disabled";
                        }
                    ?>>
                        <option value="United States">United States</option>
                        <option value="Australia">Australia</option>
                        <option value="Japan">Japan</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="China">China</option>
                        <option value="India">India</option>
                        <option value="Russia">Russia</option>
                    </select></td>
                </tr>
                <tr>
                    <td width="35%" align="right">Year :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <select id="selyear" name="selyear">
                        <?php
                         for($i = 2005; $i <=2022;$i++){
                            echo "<option value =".$i.">".$i."</option>";
                         }
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right">Gold Medals :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <input type="number" id="goldmed" name="goldmed" min="0" max="25">
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right">Silver Medals :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <input type="number" id="goldsil" name="goldsil" min="0" max="25">
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right">Bronze Medals :</td>
                    <td width="3%"></td>
                    <td width="76%" align="left">
                    <input type="number" id="goldbron" name="goldbron" min="0" max="25">
                    </td>
                </tr>
             
                <tr>
                    <th colspan="3" scope="col"> <input type="submit" name="submit"></th>
                </tr>
            </tbody>
        </table>
      
    </form>