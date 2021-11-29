<?php


include("conexion.php");
$con=conectar();

$matri=$_GET['id'];

$sql="DELETE FROM usuario  WHERE  matri='$matri'";
$query=mysqli_query($con,$sql);


      if($query){
          Header("Location: usuario.php");
      }

?>