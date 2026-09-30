<?php

$sql_convenio = "SELECT id_convenio, nombre_convenio, empresa_convenio, fecha_convenio, fecha_culminacion,doc_convenio
                  FROM convenios";
$query_convenio = $pdo->prepare($sql_convenio);
$query_convenio->execute();
$convenio_datos = $query_convenio->fetchAll(PDO::FETCH_ASSOC);