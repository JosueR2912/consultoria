<?php

include ('../../config.php');

$nombre_oficio = $_POST['nombre_oficio'];
$n_oficio = $_POST['n_oficio'];
$fecha_oficio = $_POST['fecha_oficio'];

$id_oficio = $_POST['id_oficio'];


    $sentencia = $pdo->prepare("UPDATE oficios
        SET nombre_oficio = :nombre_oficio,
            n_oficio = :n_oficio,
            fecha_oficio = :fecha_oficio
        WHERE id_oficio = :id_oficio");
        

    $sentencia->bindParam(':nombre_oficio', $nombre_oficio);
    $sentencia->bindParam(':n_oficio', $n_oficio);
    $sentencia->bindParam(':fecha_oficio', $fecha_oficio);
    $sentencia->bindParam(':id_oficio', $id_oficio);
        

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el oficio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/oficios/');
    exit();

} else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar el oficio en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/oficios/update.php?id='.$id_oficio);
}

