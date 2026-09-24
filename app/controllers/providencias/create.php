<?php

include ('../../config.php');

$cedula_servidor = $_POST['cedula_servidor'];
$nombre_servidor = $_POST['nombre_servidor'];
$cargo_servidor = $_POST['cargo_servidor'];
$fecha_designacion = $_POST['fecha_designacion'];
$n_providencia = $_POST['n_providencia'];
$fecha_public = $_POST['fecha_public'];
$n_gaceta = $_POST['n_gaceta'];
$relacion_acta_entrega = $_POST['relacion_acta_entrega'];

// 1. Manejo del archivo subido
$doc_providencia = "";

if (isset($_FILES['doc_providencia']) && $_FILES['doc_providencia']['error'] == 0) {
    $nombre_original = $_FILES['doc_providencia']['name'];
    $ext = pathinfo($nombre_original, PATHINFO_EXTENSION);
    
    // Generar un nombre único para evitar sobrescribir archivos con el mismo nombre
    $nuevo_nombre = "doc_" . date('Ymd_His') . "_" . rand(100, 999) . "." . $ext;
    
    // Carpeta donde se guardará el archivo (asegúrate de que exista y tenga permisos de escritura)
    $carpeta_destino = "../../../docprovidencias/";
    
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }
    
    $ruta_final = $carpeta_destino . $nuevo_nombre;
    
    // Mover el archivo desde la carpeta temporal al destino final
    if (move_uploaded_file($_FILES['doc_providencia']['tmp_name'], $ruta_final)) {
        $doc_providencia = $nuevo_nombre; // O puedes guardar '$ruta_final' según prefieras
    }
}

// 2. Inserción en la base de datos
$sentencia = $pdo->prepare("INSERT INTO providencias
       (cedula_servidor, nombre_servidor, cargo_servidor, fecha_designacion, n_providencia, fecha_public, n_gaceta, relacion_acta_entrega, doc_providencia)
VALUES (:cedula_servidor, :nombre_servidor, :cargo_servidor, :fecha_designacion, :n_providencia, :fecha_public, :n_gaceta, :relacion_acta_entrega, :doc_providencia)");

$sentencia->bindParam(':cedula_servidor', $cedula_servidor);
$sentencia->bindParam(':nombre_servidor', $nombre_servidor);
$sentencia->bindParam(':cargo_servidor', $cargo_servidor);
$sentencia->bindParam(':fecha_designacion', $fecha_designacion);
$sentencia->bindParam(':n_providencia', $n_providencia);
$sentencia->bindParam(':fecha_public', $fecha_public);
$sentencia->bindParam(':n_gaceta', $n_gaceta);
$sentencia->bindParam(':relacion_acta_entrega', $relacion_acta_entrega);
$sentencia->bindParam(':doc_providencia', $doc_providencia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se registró la providencia de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/providencias/');
    exit();
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/providencias/create.php');
    exit();
}
    
