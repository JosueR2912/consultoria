<?php

$id_oficio_get = $_GET['id'];

$sql_oficio = "SELECT id_oficio, nombre_oficio, n_oficio, fecha_oficio, doc_oficio
                  FROM oficios where id_oficio = '$id_oficio_get' ";
$query_oficio = $pdo->prepare($sql_oficio);
$query_oficio->execute();
$providencia_datos = $query_oficio->fetchAll(PDO::FETCH_ASSOC);

foreach ($providencia_datos as $providencia_dato){
    $nombre_oficio = $providencia_dato['nombre_oficio'];
    $n_oficio = $providencia_dato['n_oficio'];
    $fecha_oficio = $providencia_dato['fecha_oficio'];
    $doc_oficio = $providencia_dato['doc_oficio'];
}
?>