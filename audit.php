<?php

include 'conexion_database.php';


//Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["id_inc"], $_POST["fecha_audit"], $_POST["error"], $_POST["usuario"], $_POST["auditor"], $_POST["comentarios"]) and $_POST["id_inc"] !="" and $_POST["fecha_audit"] !="" and $_POST["error"]!="" and $_POST["usuario"]!="" and $_POST["auditor"]!="" and $_POST["comentarios"]!=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:


    $id_inc = $_POST["id_inc"];
    $fecha_audit = $_POST["fecha_audit"];
    $error = $_POST["error"];
    $usuario = $_POST["usuario"];
    $auditor = $_POST["auditor"];
    $comentarios = $_POST["comentarios"];
    $id_inc = utf8_decode($id_inc);
    $fecha_audit = utf8_decode($fecha_audit);
    $error = utf8_decode($error);
    $usuario = utf8_decode($usuario);
    $auditor = utf8_decode($auditor);
    $comentarios = utf8_decode($comentarios);

    $fecha_audit = date("Y-m-d H:i:s");
    


//Preparamos la orden SQL
    $consulta = "INSERT INTO auditorias (id_inc,fecha_audit,nombre_error,usuario,auditor,comentarios) VALUES ('$id_inc','$fecha_audit','$error','$usuario','$auditor','$comentarios')";

    //Aqui ejecutaremos esa orden


 if (mysqli_query($obj_conexion, $consulta) ){
    echo "<p> Registro agregado correctamente. </p>";
 header("Location: auditoria.php");
    } else {
    echo "<p> No se agregó el registro correctamente. </p>";
    }}

?>
