<?php
   include("conexion.php");
   $con=conectar();
   $codigo=$_POST['codigo'];

   $sql="SELECT *  FROM  usuario  WHERE  matri='$codigo'";
   $query=mysqli_query($con,$sql);

   

   while($registro=mysqli_fetch_array($query)){
      echo $registro ['matri'].".............Nombre: ".$registro ['names'].".........Apellido paterno: ".$registro ['appa'].".......Apellido materno: ".
           $registro ['apma'].".............Grupo: ".$registro ['group'].".............Correo: ".
           $registro ['hot']."..........Contraseña: ".$registro ['pasw']."............Comentario: ".$registro ['comen'];


   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  <div class="container" align="center" style="margin-top: 20px;" >
     
      <form action="usuario.php">
          
      <input  type="submit" name="regresar" class="btn btn-info" value="Volver" style="background-color: red;">



      </form>

      </div>
     
</body>
</html>

