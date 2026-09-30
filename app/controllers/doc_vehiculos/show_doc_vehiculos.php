<?php

$id_vehiculo_get = $_GET['id'];

$sql_vehiculo = "SELECT id_documento, modelo_vehiculo, marca_vehiculo, fecha_registro, doc_vehiculo
                  FROM 	documento_vehiculo	 where id_documento = '$id_vehiculo_get' ";
$query_vehiculo = $pdo->prepare($sql_vehiculo);
$query_vehiculo->execute();
$providencia_datos = $query_vehiculo->fetchAll(PDO::FETCH_ASSOC);

foreach ($providencia_datos as $providencia_dato){
    $modelo_vehiculo = $providencia_dato['modelo_vehiculo'];
    $marca_vehiculo = $providencia_dato['marca_vehiculo'];
    $fecha_registro = $providencia_dato['fecha_registro'];
    $doc_vehiculo = $providencia_dato['doc_vehiculo'];
}
?>