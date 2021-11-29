<?php
   include("conexion.php");
   $con=conectar();

   $sql="SELECT *  FROM  usuario";
   $query=mysqli_query($con,$sql);

   
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PAGINA USUARIO</title>
    <style>
        body{
            background-image: url("img/espacio.jpg");
        }

    </style>
</head>

<!--Buscador-->
<body>
     <div class="container" align="right">
         <h5 style="color: white;">Buscar algún usuario</h5>
           <form action="buscar.php" method="post">
               <input type="text" name="codigo" id=""placeholder="Buscar matricula"><br>
                <input type="submit" name="enviar" value="Buscar">
         </form>
     </div>
<!--toma de datos-->
    <div class="container mt-5">
        <div class="row">

        <div class="col-md-3">
        <h1 style="color: #1091E7;">Registrate</h1>
            <form action="insertar.php" method="POST">
                <input type="text" class="form-control mb-3" name="matri" placeholder="Matricula">
                <input type="text" class="form-control mb-3" name="names" placeholder="Nombre">
                <input type="text" class="form-control mb-3" name="appa" placeholder="Apellido paterno">
                <input type="text" class="form-control mb-3" name="apma" placeholder="Apellido materno">
                <input type="text" class="form-control mb-3" name="group" placeholder="Grupo">
                <input type="text" class="form-control mb-3" name="hot" placeholder="Correo electronico">
                <input type="text" class="form-control mb-3" name="pasw" placeholder="Contraseña">
                <input type="text" class="form-control mb-3" name="comen" placeholder="Comentario">

                <button type="submit" class="btn btn-primary">Insertar</button>

              </form>
        </div>
           <div class="col-md-8">
               <table class="table">
                   <thead>
                   <tr>
                       <th scope="col" style="color:#1091E7;">Matricula</th>
                       <th scope="col" style="color:#1091E7;">Nombre</th>
                       <th scope="col" style="color:#1091E7;">Ap Paterno </th>
                       <th scope="col" style="color:#1091E7;">Ap Materno</th>
                       <th scope="col" style="color:#1091E7;">Grupo</th>
                       <th scope="col" style="color:#1091E7;">Correo</th>
                       <th scope="col" style="color:#1091E7;">Contraseña</th>
                       <th scope="col" style="color:#1091E7;">Comentario</th>
                   </tr>
                   
                   </thead>
                   <tbody>
                        
                       <?php
                        while($row=mysqli_fetch_array($query)){
                          ?>  

                            <tr>
                                <th style="color: white;"><?php  echo $row['matri']  ?></th>
                                <th style="color: white;"><?php  echo $row['names']  ?></th>
                                <th style="color: white;"><?php  echo $row['appa']  ?></th>
                                <th style="color: white;"><?php  echo $row['apma']  ?></th>
                                <th style="color: white;"><?php  echo $row['group']  ?></th>
                                <th style="color: white;"><?php  echo $row['hot']  ?></th>
                                <th style="color: white;"><?php  echo $row['pasw']  ?></th>
                                <th style="color: white;"><?php  echo $row['comen']  ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['matri']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['matri']?>" class="btn btn-danger">Eliminar</a></th>

                            </tr>
                        <?php
                           }
                        ?>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
</body>
</html>


