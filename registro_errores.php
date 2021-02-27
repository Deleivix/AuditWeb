
<!doctype html>
<html lang="es">
 
<?php
 session_start();
 // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){

  }else{
    // Si no está logueado lo redireccion a la página de login.
    
    header("Location: index.php"); 
  }
?>
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
  <a class="navbar-brand" href="principal.php">AuditWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="registro_incidencia.php">Registro incidencia <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="registro_auditor.php">Registro auditor</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="registro_errores.php">Registro Errores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auditoria.php">Auditoría</a>
      </li> 
    </ul>
  </div>

<a href="" class="btn btn-primary" role="button" aria-pressed="false"> <?php echo $_SESSION['email'];?> </a>
<a href="cerrar_sesion.php" class="btn btn-success" role="button" aria-pressed="true">Cerrar Sesión</a>

</nav>


  <body>

<h3 class="text-center p-5">Errores registrados</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre Error</th>
      <th scope="col">Tipo Error</th>
    </tr>
  </thead>
  <tbody>
    <?php 
  include "conexion_database.php";
  $sql = "select * from reg_errores";
  $res = mysqli_query($obj_conexion,$sql);

  while($row = mysqli_fetch_array($res)){
    echo "<tr><td scope='col'>".utf8_encode($row['nombre_error'])."</td>";
    echo "<td scope='col'>".utf8_encode($row['tipo_error'])."</td></tr>";
    }
    ?>

  </tbody>
</table>


   <h3 class="text-center p-5">Registra un nuevo Error</h3>

<div class="container">
  <form action="registro_err.php" method="post">

    
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre del error</label>
    <input type="text" name="nombre_error" class="form-control" id="exampleInputPassword1" placeholder="Nombre del error">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tipo de error</label>
    <input type="text" name="tipo_error" class="form-control" id="exampleInputPassword1" placeholder="Tipo de error">
  </div>
  <button type="submit" class="btn btn-primary">Añadir</button>

  </form> </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

