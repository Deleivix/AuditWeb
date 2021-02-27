
<?php
include "conexion_database.php";
$sin_errores="SELECT count(distinct id_inc) FROM auditorias where nombre_error='Sin errores'";
$con_errores="SELECT count(distinct id_inc) FROM auditorias where nombre_error!='Sin errores'";
$res1 = mysqli_query($obj_conexion,$sin_errores);
$res2 = mysqli_query($obj_conexion,$con_errores);
$row1 = mysqli_fetch_array($res1);
$row2 = mysqli_fetch_array($res2);

$dataPoints = array(
	array("label"=> "Con errores", "y"=> $row2[0]),
	array("label"=> "Sin errores", "y"=> $row1[0]),
	
);
	
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
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
<br>
<br>
 <h3 class="text-center p-5">Incidencias Auditadas</h3>
<div class="container">
 <canvas id="grafica1" width="400" height="400"></canvas> 
</div>


<script>

var ctx= document.getElementById("grafica1").getContext("2d");
var grafica1 = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Con errores', 'Sin errores'],
        datasets: [{label:'',
                    data: [<?php echo $row2[0]?>,<?php echo $row1[0]?>],
                    backgroundColor: ['rgb(66, 85, 99)','rgb(100, 167, 11)']
                  }]
          },
    options: {responsive: true, maintainAspectRatio: false}
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

