<?php

$id_oficio_get = $_GET['id'];

$sql_oficios = "SELECT id_oficio, nombre_oficio, n_oficio, fecha_oficio
                FROM oficios WHERE id_oficio = '$id_oficio_get'";
$query_oficios = $pdo->prepare($sql_oficios);
$query_oficios->execute();
$oficios_datos = $query_oficios->fetchAll(PDO::FETCH_ASSOC);

foreach ($oficios_datos as $oficios_dato){
    $nombre_oficio = $oficios_dato['nombre_oficio'];
    $n_oficio = $oficios_dato['n_oficio'];
    $fecha_oficio = $oficios_dato['fecha_oficio'];
}