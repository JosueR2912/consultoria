<?php

include ('../../config.php');

$nombre_convenio = $_POST['nombre_convenio'];
$empresa_convenio = $_POST['empresa_convenio'];
$fecha_convenio = $_POST['fecha_convenio'];
$fecha_culminacion = $_POST['fecha_culminacion'];

// 1. Manejo del archivo subido
$doc_convenio = "";

if (isset($_FILES['doc_convenio']) && $_FILES['doc_convenio']['error'] == 0) {
    $nombre_original = $_FILES['doc_convenio']['name'];
    $ext = pathinfo($nombre_original, PATHINFO_EXTENSION);
    
    // Generar un nombre único para evitar sobrescribir archivos con el mismo nombre
    $nuevo_nombre = "doc_" . date('Ymd_His') . "_" . rand(100, 999) . "." . $ext;
    
    // Carpeta donde se guardará el archivo (asegúrate de que exista y tenga permisos de escritura)
    $carpeta_destino = "../../../docconvenios/";
    
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }
    
    $ruta_final = $carpeta_destino . $nuevo_nombre;
    
    // Mover el archivo desde la carpeta temporal al destino final
    if (move_uploaded_file($_FILES['doc_convenio']['tmp_name'], $ruta_final)) {
        $doc_convenio = $nuevo_nombre; // O puedes guardar '$ruta_final' según prefieras
    }
}

// 2. Inserción en la base de datos
$sentencia = $pdo->prepare("INSERT INTO convenios
       (nombre_convenio, empresa_convenio, fecha_convenio, fecha_culminacion, doc_convenio)
VALUES (:nombre_convenio, :empresa_convenio, :fecha_convenio, :fecha_culminacion, :doc_convenio)");

$sentencia->bindParam(':nombre_convenio', $nombre_convenio);
$sentencia->bindParam(':empresa_convenio', $empresa_convenio);
$sentencia->bindParam(':fecha_convenio', $fecha_convenio);
$sentencia->bindParam(':fecha_culminacion', $fecha_culminacion);
$sentencia->bindParam(':doc_convenio', $doc_convenio);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se registró el documento de convenio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/convenios/');
    exit();
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/convenios/create.php');
    exit();
}
    