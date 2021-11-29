<?php 

include("conexion.php");
$con=conectar();



  $matri=$_POST['matri'];
  $names=$_POST['names'];
  $appa=$_POST['appa'];
  $apma=$_POST['apma'];
  $group=$_POST['group'];
  $hot=$_POST['hot'];
  $pasw=$_POST['pasw'];
  $comen=$_POST['comen'];
  $sql="UPDATE `usuario` SET `names`='$names',`appa`='$appa',`apma`='$apma',`group`='$group',`hot`='$hot',`pasw`='$pasw',`comen`='$comen' WHERE  matri='$matri'";
  $query=mysqli_query($con,$sql);

  
    if($query){
       Header("Location: usuario.php");
    }
    else{
      echo($sql);
    }

    ?>