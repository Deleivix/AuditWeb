
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
  <a class="navbar-brand" href="index.php">AuditWeb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="registro_incidencia.php">Registro incidencia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro_usuario.php">Registro usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro_auditor.php">Registro auditor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auditoria.php">Auditoría</a>
      </li>
<li>
  <a href="cerrar_sesion.php" class="btn btn-warning" role="button" aria-pressed="true">Cerrar Sesión</a>
</li>  
    </ul>
  </div>
</nav>

<?php
  session_start();
   
  // Elimina la variable email en sesión.
  unset($_SESSION['email']); 
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  echo "Sesión cerrada";
header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: index.php");
?>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

