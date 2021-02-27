
<?php
  session_start();
    // Datos para conectar a la base de datos.
 include "conexion_database.php";
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = md5($_POST['contraseña']);

  // Consulta segura para evitar inyecciones SQL.
  $sql = "SELECT * FROM usuarios where email='$email' and pass='$password'";
  $resultado = mysqli_query($obj_conexion,$sql);
  $list = mysqli_fetch_array($resultado);
  $contra = $list['pass'];
  if($contra==$password){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.php">vuelva a intentarlo</a>.<br/>';
  }
 
?>
