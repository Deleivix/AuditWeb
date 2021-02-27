<?php

include 'conexion_database.php';


//Validamos que hayan llegado estas variables, y que no esten vacias:
    if (isset($_POST["id_incidencia"], $_POST["fecha_creacion"], $_POST["fecha_resolucion"], $_POST["servicio"], $_POST["centro_afectado"], $_POST["usuario"]) and $_POST["usuario"] !="" and $_POST["centro_afectado"] !="" and $_POST["servicio"]!="" and $_POST["fecha_resolucion"]!="" and $_POST["fecha_creacion"]!="" and $_POST["id_incidencia"]!=""){

//traspasamos a variables locales, para evitar complicaciones con las comillas:


    $id = $_POST["id_incidencia"];
    $fecha_cre = $_POST["fecha_creacion"];
    $fecha_res = $_POST["fecha_resolucion"];
    $servicio = $_POST["servicio"];
    $centro_afectado = $_POST["centro_afectado"];
    $usuario = $_POST["usuario"];
    $id = utf8_decode($id);
    $fecha_cre = utf8_decode($fecha_cre);
    $fecha_res = utf8_decode($fecha_res);
    $servicio = utf8_decode($servicio);
    $centro_afectado = utf8_decode($centro_afectado);
    $usuario = utf8_decode($usuario);

    $fecha_res = date("Y-m-d H:i:s");
    $fecha_cre = date("Y-m-d H:i:s");


//Preparamos la orden SQL
    $consulta = "INSERT INTO reg_inc (id_inc,fecha_creacion,fecha_resolucion,centro_afectado,usuario,servicio_equipamiento) VALUES ('$id','$fecha_cre','$fecha_res','$centro_afectado','$usuario','$servicio')";

    //Aqui ejecutaremos esa orden


 if (mysqli_query($obj_conexion, $consulta) ){
    echo "<p> Registro agregado correctamente. </p>";

    } else {
    echo "<p> No se agregó el registro correctamente. </p>";
    }}

?>
