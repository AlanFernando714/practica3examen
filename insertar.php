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



  $sql="INSERT INTO usuario Values('$matri','$names','$appa','$apma','$group','$hot','$pasw','$comen')";
  $query=mysqli_query($con,$sql);
  


  if($query){
      Header("Location: usuario.php");
  }
  else{}
  ?>
