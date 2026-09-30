<?php

include ('../../config.php');

$modelo_vehiculo = $_POST['modelo_vehiculo'];
$marca_vehiculo = $_POST['marca_vehiculo'];
$fecha_registro = $_POST['fecha_registro'];

$id_documento = $_POST['id_documento'];


    $sentencia = $pdo->prepare("UPDATE documento_vehiculo
        SET modelo_vehiculo = :modelo_vehiculo,
            marca_vehiculo = :marca_vehiculo,
            fecha_registro = :fecha_registro
        WHERE id_documento = :id_documento");
        

    $sentencia->bindParam(':modelo_vehiculo', $modelo_vehiculo);
    $sentencia->bindParam(':marca_vehiculo', $marca_vehiculo);
    $sentencia->bindParam(':fecha_registro', $fecha_registro);
    $sentencia->bindParam(':id_documento', $id_documento);
        

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el documento de vehículo de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/documentos_vehiculos/');
    exit();

} else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar el documento de vehículo en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/documentos_vehiculos/update.php?id='.$id_documento);
}

