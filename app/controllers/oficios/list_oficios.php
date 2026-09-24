<?php

$sql_providencia = "SELECT id_oficio, nombre_oficio, n_oficio, fecha_oficio, doc_oficio
                  FROM oficios";
$query_providencia = $pdo->prepare($sql_providencia);
$query_providencia->execute();
$oficio_datos = $query_providencia->fetchAll(PDO::FETCH_ASSOC);