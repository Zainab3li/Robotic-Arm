<?php 


DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'engine');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql2="SELECT * FROM engaine where EID between 1 and 6  ";
 $result=$dbc->query($sql2);



if(isset($_POST['save'])){
    
$R1=$_POST["rangeInput"];
if ($R1==0){
$s="off";

}
else{

    $s="on";

}
  
$R2=$_POST["rangeInput2"];
if ($R2==0){
    $s2="off";
    
    }
    else{
    
        $s2="on";
    
    }

$R3=$_POST["rangeInput3"];
if ($R3==0){
    $s3="off";
    
    }
    else{
    
        $s3="on";
    
    }


    $R4=$_POST["rangeInput4"];
if ($R4==0){
    $s4="off";
    
    }
    else{
    
        $s4="on";
    
    }


    $R5=$_POST["rangeInput5"];
    if ($R5==0){
        $s5="off";
        
        }
        else{
        
            $s5="on";
        
        }


        $R6=$_POST["rangeInput6"];
        if ($R6==0){
            $s6="off";
            
            }
            else{
            
                $s6="on";
            
            }




    $sql1=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R1', `Status` = '$s' WHERE `engaine`.`EID` = 1;");
    $sql2=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R2', `Status` = '$s2' WHERE `engaine`.`EID` = 2;");
    $sql3=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R3', `Status` = '$s3' WHERE `engaine`.`EID` = 3;");
    $sql4=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R4', `Status` = '$s4' WHERE `engaine`.`EID` = 4;");
    $sql5=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R5', `Status` = '$s5' WHERE `engaine`.`EID` = 5;");
    $sql6=mysqli_query($dbc,"UPDATE `engaine` SET `Engine-Range` = '$R6', `Status` = '$s6' WHERE `engaine`.`EID` = 6;");
if($sql1){
                $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
 
  }
  else{
      
      echo "error";
      
  }



  if($sql2){
    $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}
else{

echo "error";

}
if($sql3){
    $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}
else{

echo "error";

}

if($sql4){
    $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}
else{

echo "error";

}

if($sql5){
    $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}
else{

echo "error";

}


if($sql6){
    $referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");

}
else{

echo "error";

}
}
?>


<?php 
if(isset($_POST['Run'])){
    
    
//Display the value of 
	
while($value= mysqli_fetch_assoc($result)){
	
	


	?>
	<h3>
   <?php
         echo($value['Engine-name'] ) ; ?>
         </h3><h3 >
         <?php
             echo ($value['Engine-Range']  );
        ?>
        </h3>
        <h3>
        <?php
         echo ($value['Status']  ) ;?>
        </h3><hr>
         

<?php
    }
}
?>




<?php 

mysqli_close($dbc);


?>
<!DOCTYPE html>
<html>
<head>
<title> Robotic Arm </title>
<style type="text/css">
  
h3{color:#c49494;
    text-align: center;
    padding: 0 200px 0 200px;
    font-size: 20px;
   
    }
    </style>
    </head>
    </html>

