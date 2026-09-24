<?php

$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT id_user, name_user, user, tipo_user
                  FROM users where id_user = '$id_usuario_get' ";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios_datos as $usuarios_dato){
    $nombres = $usuarios_dato['name_user'];
    $user = $usuarios_dato['user'];
    $rol = $usuarios_dato['tipo_user'];
}