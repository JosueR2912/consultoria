<?php

$id_providencia_get = $_GET['id'];

$sql_usuarios = "SELECT id_providencia, cedula_servidor, nombre_servidor, cargo_servidor, fecha_designacion, n_providencia, fecha_public,n_gaceta, relacion_acta_entrega, doc_providencia
                  FROM providencias where id_providencia = '$id_providencia_get' ";
$query_providencia = $pdo->prepare($sql_usuarios);
$query_providencia->execute();
$providencia_datos = $query_providencia->fetchAll(PDO::FETCH_ASSOC);

foreach ($providencia_datos as $providencia_dato){
    $cedula_servidor = $providencia_dato['cedula_servidor'];
    $nombre_servidor = $providencia_dato['nombre_servidor'];
    $cargo_servidor = $providencia_dato['cargo_servidor'];
    $fecha_designacion = $providencia_dato['fecha_designacion'];
    $n_providencia = $providencia_dato['n_providencia'];
    $fecha_public = $providencia_dato['fecha_public'];
    $n_gaceta = $providencia_dato['n_gaceta'];
    $relacion_acta_entrega = $providencia_dato['relacion_acta_entrega'];
    $doc_providencia = $providencia_dato['doc_providencia'];
}
?>