<?php
 include("conexion.php");
 $con=conectar();

 $id=$_GET['id'];

 $sql="SELECT *  FROM  usuario  WHERE  matri='$id'";
 $query=mysqli_query($con,$sql);

 $row=mysqli_fetch_array($query);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Actualizar</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>
     <div class="container mt-5">
     <h1>Cambiar datos (verifica que los datos son correctos)</h1>
     <form action="update.php" method="POST">
         
            
         <input type ="hidden" name="matri"   value="<?php echo $row['matri']?>">

                    <input type ="text" class="form-control mb-4"  name="names" placeholder="Nombre" value="<?php echo $row['names']  ?>">
                    <input type ="text" class="form-control mb-4"  name="appa" placeholder="Apellido paterno" value="<?php echo $row['appa']  ?>">
                    <input type ="text" class="form-control mb-4"  name="apma" placeholder="Apellido materno" value="<?php echo $row['apma']  ?>">
                    <input type ="text" class="form-control mb-4" name="group"  placeholder="Grupo" value="<?php echo $row['group']  ?>">
                    <input type ="text" class="form-control mb-4"  name="hot" placeholder="Correo"value="<?php echo $row['hot']  ?>">
                    <input type ="text" class="form-control mb-4"  name="pasw" placeholder="Contraseña" value="<?php echo $row['pasw']  ?>">
                    <input type ="text" class="form-control mb-4"  name="comen" placeholder="Comentario" value="<?php echo $row['comen']  ?>">

                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
         </form>
     </div>
     
 </body>
 </html>
