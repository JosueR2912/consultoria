<?php

include ('../../config.php');

$nombres = $_POST['nombres'];
$user = $_POST['user'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];


if($password_user == $password_repeat){
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO users
       ( name_user, user, password_user,tipo_user) 
VALUES (:nombres,:user,:password_user,:rol)");

    $sentencia->bindParam('nombres',$nombres);
    $sentencia->bindParam('user',$user);
    $sentencia->bindParam('rol',$rol);
    $sentencia->bindParam('password_user',$password_user);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se registro al usuario de la manera correcta";
    header('Location: '.$URL.'/usuarios/');

}else{
   // echo "error las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
    header('Location: '.$URL.'/usuarios/create.php');
}
