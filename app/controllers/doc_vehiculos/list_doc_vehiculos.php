<?php

$sql_vehiculo = "SELECT id_documento, modelo_vehiculo, marca_vehiculo, doc_vehiculo
                  FROM documento_vehiculo";
$query_vehiculo = $pdo->prepare($sql_vehiculo);
$query_vehiculo->execute();
$vehiculo_datos = $query_vehiculo->fetchAll(PDO::FETCH_ASSOC);