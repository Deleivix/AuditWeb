<?php

include 'conexion_database.php';


//Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["nombre"], $_POST["apellidos"], $_POST["centro"], $_POST["usuario"], $_POST["contra"]) and $_POST["nombre"] !="" and $_POST["email"] !="" and $_POST["apellidos"]!="" and $_POST["centro"]!="" and $_POST["usuario"]!="" and $_POST["contra"]!=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:


    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $centro = $_POST["centro"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $contra = $_POST["contra"];
    $nombre = utf8_decode($nombre);
    $apellidos = utf8_decode($apellidos);
    $centro = utf8_decode($centro);
    $usuario = utf8_decode($usuario);
    $email = utf8_decode($email);
    $cont = md5(utf8_decode($contra));

//Preparamos la orden SQL
    $consulta = "INSERT INTO usuarios (nombre,apellidos,centro,usuario,email,pass) VALUES ('$nombre','$apellidos','$centro','$usuario','$email','$cont')";

    //Aqui ejecutaremos esa orden


 if (mysqli_query($obj_conexion, $consulta) ){
    echo "<p>Registro agregado.</p>";
    header("Location: index.php");
$para      = $email;
$titulo    = 'Registro Correcto';
$mensaje   = 'Te has registrado correctamente en AuditWeb Contraseña: ' ;
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@auditweb.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

    } else {
    echo "<p>No se agregó...</p>";
    }

     } else {

     echo '<p>Por favor, complete el <a href="index.html">formulario</a></p>';
            }

?>
