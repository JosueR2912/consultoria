<?php

$id_convenio_get = $_GET['id'];

$sql_convenio = "SELECT id_convenio, nombre_convenio, empresa_convenio, fecha_convenio, fecha_culminacion, doc_convenio
                  FROM 	convenios where id_convenio = '$id_convenio_get' ";
$query_convenio = $pdo->prepare($sql_convenio);
$query_convenio->execute();
$convenio_datos = $query_convenio->fetchAll(PDO::FETCH_ASSOC);

foreach ($convenio_datos as $convenio_dato){
    $nombre_convenio = $convenio_dato['nombre_convenio'];
    $empresa_convenio = $convenio_dato['empresa_convenio'];
    $fecha_convenio = $convenio_dato['fecha_convenio'];
    $fecha_culminacion = $convenio_dato['fecha_culminacion'];
    $doc_convenio = $convenio_dato['doc_convenio'];
}
?>