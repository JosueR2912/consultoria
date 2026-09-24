<?php

include ('../../config.php');

$nombres = $_POST['nombres'];
$user = $_POST['user'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_user = $_POST['id_usuario'];
$rol = $_POST['rol'];

// Si no se ingresó una nueva contraseña, solo actualiza los demás datos
if (empty($password_user)) {
    $sentencia = $pdo->prepare("UPDATE users
        SET name_user = :nombres,
            user = :user,
            tipo_user = :rol
        WHERE id_user = :id_user");

    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':user', $user);
    $sentencia->bindParam(':rol', $rol);
    $sentencia->bindParam(':id_user', $id_user);
    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Se actualizó al usuario de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/usuarios/');
    exit();

} else {
    // Si ingresó contraseña, verifica que ambas coincidan
    if ($password_user == $password_repeat) {
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);

        $sentencia = $pdo->prepare("UPDATE users
            SET name_user = :nombres,
                user = :user,
                tipo_user = :rol,
                password_user = :password_user
            WHERE id_user = :id_user");

        $sentencia->bindParam(':nombres', $nombres);
        $sentencia->bindParam(':user', $user);
        $sentencia->bindParam(':rol', $rol);
        $sentencia->bindParam(':password_user', $password_user);
        $sentencia->bindParam(':id_user', $id_user);
        $sentencia->execute();

        session_start();
        $_SESSION['mensaje'] = "Se actualizó al usuario de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/usuarios/');
        exit();

    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/usuarios/update.php?id='.$id_user);
        exit();
    }
}