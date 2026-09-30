<?php

$id_documento_get = $_GET['id'];

$sql_documentos = "SELECT id_documento, modelo_vehiculo, marca_vehiculo, fecha_registro
                    FROM documento_vehiculo WHERE id_documento = '$id_documento_get'";
$query_documentos = $pdo->prepare($sql_documentos);
$query_documentos->execute();
$documentos_datos = $query_documentos->fetchAll(PDO::FETCH_ASSOC);

foreach ($documentos_datos as $documentos_dato){
    $modelo_vehiculo = $documentos_dato['modelo_vehiculo'];
    $marca_vehiculo = $documentos_dato['marca_vehiculo'];
    $fecha_registro = $documentos_dato['fecha_registro'];
}