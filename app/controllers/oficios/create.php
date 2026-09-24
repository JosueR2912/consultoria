<?php

include ('../../config.php');

$nombre_oficio = $_POST['nombre_oficio'];
$n_oficio = $_POST['n_oficio'];
$fecha_oficio = $_POST['fecha_oficio'];


// 1. Manejo del archivo subido
$doc_oficio = "";

if (isset($_FILES['doc_oficio']) && $_FILES['doc_oficio']['error'] == 0) {
    $nombre_original = $_FILES['doc_oficio']['name'];
    $ext = pathinfo($nombre_original, PATHINFO_EXTENSION);
    
    // Generar un nombre único para evitar sobrescribir archivos con el mismo nombre
    $nuevo_nombre = "doc_" . date('Ymd_His') . "_" . rand(100, 999) . "." . $ext;
    
    // Carpeta donde se guardará el archivo (asegúrate de que exista y tenga permisos de escritura)
    $carpeta_destino = "../../../docoficios/";
    
    if (!file_exists($carpeta_destino)) {
        mkdir($carpeta_destino, 0777, true);
    }
    
    $ruta_final = $carpeta_destino . $nuevo_nombre;
    
    // Mover el archivo desde la carpeta temporal al destino final
    if (move_uploaded_file($_FILES['doc_oficio']['tmp_name'], $ruta_final)) {
        $doc_oficio = $nuevo_nombre; // O puedes guardar '$ruta_final' según prefieras
    }
}

// 2. Inserción en la base de datos
$sentencia = $pdo->prepare("INSERT INTO oficios
       (nombre_oficio, n_oficio, fecha_oficio, doc_oficio)
VALUES (:nombre_oficio, :n_oficio, :fecha_oficio, :doc_oficio)");

$sentencia->bindParam(':nombre_oficio', $nombre_oficio);
$sentencia->bindParam(':n_oficio', $n_oficio);
$sentencia->bindParam(':fecha_oficio', $fecha_oficio);
$sentencia->bindParam(':doc_oficio', $doc_oficio);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se registró el oficio de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/oficios/');
    exit();
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/oficios/create.php');
    exit();
}
    
