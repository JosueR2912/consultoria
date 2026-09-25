<?php

$id_providencia_get = $_GET['id'];

$sql_providencias = "SELECT id_providencia, cedula_servidor, nombre_servidor, cargo_servidor, fecha_designacion, n_providencia, fecha_public,n_gaceta, relacion_acta_entrega
                  FROM providencias where id_providencia = '$id_providencia_get' ";
$query_providencias = $pdo->prepare($sql_providencias);
$query_providencias->execute();
$providencias_datos = $query_providencias->fetchAll(PDO::FETCH_ASSOC);

foreach ($providencias_datos as $providencias_dato){
    $cedula = $providencias_dato['cedula_servidor'];
    $nombre = $providencias_dato['nombre_servidor'];
    $cargo = $providencias_dato['cargo_servidor'];
    $fecha_designacion = $providencias_dato['fecha_designacion'];
    $n_providencia = $providencias_dato['n_providencia'];
    $fecha_public = $providencias_dato['fecha_public'];
    $n_gaceta = $providencias_dato['n_gaceta'];
    $relacion_acta_entrega = $providencias_dato['relacion_acta_entrega'];
    
}