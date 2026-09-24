<?php

$sql_providencia = "SELECT id_providencia, cedula_servidor, nombre_servidor, cargo_servidor, fecha_designacion, n_providencia,n_gaceta, relacion_acta_entrega, fecha_public, doc_providencia
                  FROM providencias";
$query_providencia = $pdo->prepare($sql_providencia);
$query_providencia->execute();
$providencia_datos = $query_providencia->fetchAll(PDO::FETCH_ASSOC);