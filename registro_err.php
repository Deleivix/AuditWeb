<?php

include 'conexion_database.php';


//Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["nombre_error"], $_POST["tipo_error"]) and $_POST["nombre_error"] !="" and $_POST["tipo_error"] !=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:


    $tipo_error = $_POST["tipo_error"];
    $nombre_error = $_POST["nombre_error"];
    $tipo_error = utf8_decode($tipo_error);
    $nombre_error = utf8_decode($nombre_error);

//Preparamos la orden SQL
    $consulta = "INSERT INTO reg_errores (nombre_error,tipo_error) VALUES ('$nombre_error','$tipo_error')";

    //Aqui ejecutaremos esa orden


 if (mysqli_query($obj_conexion, $consulta) ){
    echo "<p> Registro agregado correctamente. Redirigiendo...</p>";
    header("Location: registro_errores.php");
    } else {
    echo "<p> No se agregó el registro correctamente. </p>";
    }}

?>
