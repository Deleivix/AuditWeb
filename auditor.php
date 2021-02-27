<?php

include 'conexion_database.php';


//Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["usuario"]) and $_POST["usuario"] !=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:


    $usuario = $_POST["usuario"];
    
    $usuario = utf8_decode($usuario);
    

//Preparamos la orden SQL
    $consulta = "INSERT INTO auditores (usuario) VALUES ('$usuario')";

    //Aqui ejecutaremos esa orden


 if (mysqli_query($obj_conexion, $consulta) ){
    echo "<p> Registro agregado correctamente. Redirigiendo...</p>";
    header("Location: registro_auditor.php");
    } else {
    echo "<p> No se agregó el registro correctamente. </p>";
    }}

?>
