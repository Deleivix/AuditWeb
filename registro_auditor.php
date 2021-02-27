
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
<?php
 session_start();
 // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
  }else{
    // Si no está logueado lo redireccion a la página de login.
    
    header("Location: index.php"); 
  }
?>

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





   <h3 class="text-center p-5">Darse de alta como Auditor</h3>

<div class="container">
  <form action="auditor.php" method="post">

    
  <div class="form-group">
    <label for="exampleInputPassword1">Usuario</label>
    <input type="text" name="usuario" class="form-control" id="exampleInputPassword1" placeholder="Introduce tu usuario">
  </div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Darme de alta como auditor
  </label>
<br>
<br>
<div class="form-group">
<button type="submit" class="btn btn-primary">Enviar</button>
</div>
  </form> </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

