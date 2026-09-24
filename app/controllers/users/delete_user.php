<?php

include ('../../config.php');

    $id_user = $_POST['id_usuario'];

    $sentencia = $pdo->prepare("DELETE FROM users WHERE id_user=:id_user ");

    $sentencia->bindParam('id_user',$id_user);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino al usuario de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/usuarios/');

