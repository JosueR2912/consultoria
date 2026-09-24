<?php

include ('../../config.php');

    $id_oficio = $_POST['id_oficio'];

    $sentencia = $pdo->prepare("DELETE FROM oficios WHERE id_oficio=:id_oficio;");

    $sentencia->bindParam('id_oficio',$id_oficio);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino el oficio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/oficios/');

?>