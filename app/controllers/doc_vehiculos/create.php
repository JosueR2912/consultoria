<?php

include ('../../config.php');

$modelo_vehiculo = $_POST['modelo_vehiculo'];
$marca_vehiculo = $_POST['marca_vehiculo'];
$fecha_registro = $_POST['fecha_registro'];


// 1. Manejo del archivo subido
$doc_vehiculo = "";

if (isset($_FILES['doc_vehiculo']) && $_FILES['doc_vehiculo']['error'] == 0) {
    $nombre_original = $_FILES['doc_vehiculo']['name'];
    $ext = pathinfo($nombre_original, PATHINFO_EXTENSION);
    
    // Generar un nombre único para evitar sobrescribir archivos con el mismo nombre
    $nuevo_nombre = "doc_" . date('Ymd_His') . "_" . rand(100, 999) . "." . $ext;
    
    // Carpeta donde se guardará el archivo (asegúrate de que exista y tenga permisos de escritura)
    $carpeta_destino = "../../../docvehiculos/";
    
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }
    
    $ruta_final = $carpeta_destino . $nuevo_nombre;
    
    // Mover el archivo desde la carpeta temporal al destino final
    if (move_uploaded_file($_FILES['doc_vehiculo']['tmp_name'], $ruta_final)) {
        $doc_vehiculo = $nuevo_nombre; // O puedes guardar '$ruta_final' según prefieras
    }
}

// 2. Inserción en la base de datos
$sentencia = $pdo->prepare("INSERT INTO documento_vehiculo
       (modelo_vehiculo, marca_vehiculo, fecha_registro, doc_vehiculo)
VALUES (:modelo_vehiculo, :marca_vehiculo, :fecha_registro, :doc_vehiculo)");

$sentencia->bindParam(':modelo_vehiculo', $modelo_vehiculo);
$sentencia->bindParam(':marca_vehiculo', $marca_vehiculo);
$sentencia->bindParam(':fecha_registro', $fecha_registro);
$sentencia->bindParam(':doc_vehiculo', $doc_vehiculo);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se registró el documento de vehículo de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/documentos_vehiculos/');
    exit();
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/documentos_vehiculos/create.php');
    exit();
}
    