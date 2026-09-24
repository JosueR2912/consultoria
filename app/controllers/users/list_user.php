<?php

$sql_usuarios = "SELECT id_user, name_user, user, tipo_user
                  FROM users";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);