<?php

include ('../../config.php');

$cedula = $_POST['cedula_servidor'];
$nombre = $_POST['nombre_servidor'];
$cargo = $_POST['cargo_servidor'];
$fecha_designacion = $_POST['fecha_designacion'];
$n_providencia = $_POST['n_providencia'];
$fecha_public = $_POST['fecha_public'];
$n_gaceta = $_POST['n_gaceta'];
$relacion_acta_entrega = $_POST['relacion_acta_entrega'];
$id_providencia = $_POST['id_providencia'];




    $sentencia = $pdo->prepare("UPDATE providencias
        SET cedula_servidor = :cedula,
            nombre_servidor = :nombre,
            cargo_servidor = :cargo,
            fecha_designacion = :fecha_designacion,
            n_providencia = :n_providencia,
            n_gaceta = :n_gaceta,
            relacion_acta_entrega = :relacion_acta_entrega,
            fecha_public = :fecha_public
        WHERE id_providencia = :id_providencia");
        

    $sentencia->bindParam(':cedula', $cedula);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':cargo', $cargo);
    $sentencia->bindParam(':fecha_designacion', $fecha_designacion);
    $sentencia->bindParam(':n_providencia', $n_providencia);
    $sentencia->bindParam(':fecha_public', $fecha_public);
    $sentencia->bindParam(':n_gaceta', $n_gaceta);
    $sentencia->bindParam(':relacion_acta_entrega', $relacion_acta_entrega);
    $sentencia->bindParam(':id_providencia', $id_providencia);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizó la providencia de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/providencias/');
    exit();

} else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar la providencia en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/providencias/update.php?id='.$id_providencia);
}

