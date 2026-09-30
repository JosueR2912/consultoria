<?php

include ('../../config.php');

    $id_documento = $_POST['id_vehiculo'];

    $sentencia = $pdo->prepare("DELETE FROM documento_vehiculo WHERE id_documento=:id_documento;");

    $sentencia->bindParam('id_documento',$id_documento);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino el documento de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/documentos_vehiculos/');

?>