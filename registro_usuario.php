
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>AuditWeb</title>
  </head>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">
          <img src="logo.png" alt="">
        </a>
  <a class="navbar-brand" href="">AuditWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">Registro incidencia <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="">Registro auditor</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="">Registro Errores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Auditoría</a>
      </li>
 
    </ul>
  </div>
</nav>


  <body>
   <h3 class="text-center p-5">Registro Usuario</h3>
 <div class="container">

<?php 
  include "conexion_database.php";
  $sql = "select centro from centros";
  $res = mysqli_query($obj_conexion,$sql);
  $selectResult="";
  while($list = mysqli_fetch_array($res)){
    $Machine_vin = $list['centro'];
    $selectResult.="<option>$Machine_vin</option>";
    }
    ?>
  <form action="registro.php" method="post">
    <div class="form-row">
    <div class="col">
	  <label for="exampleInputEmail1">Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="col">
	  <label for="exampleInputEmail1">Apellidos</label>
      <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca su email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
      <label for="inputState">Centro</label>
      <select id="inputState" name="centro" class="form-control">
        <?php echo utf8_encode($selectResult); ?>
      </select>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
  </div>
  <div class="form-group">

    <label for="exampleInputPassword1">Contraseña</label>

    <input type="password" name="contra" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">

  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
<a href="index.php" class="btn btn-success" role="button" aria-pressed="true">Atrás</a>
  </form> </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

