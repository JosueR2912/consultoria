<?php

include ('../../config.php');

    $id_providencia = $_POST['id_providencia'];

    $sentencia = $pdo->prepare("DELETE FROM providencias WHERE id_providencia=:id_providencia;");

    $sentencia->bindParam('id_providencia',$id_providencia);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino la providencia de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/providencias/');

?>