<?php
// include('../consultoria/app/config.php');

session_start();
if(isset($_SESSION['sesion_user'])){
    // echo "si existe sesion de ".$_SESSION['sesion_email'];
    $user_sesion = $_SESSION['sesion_user'];
    $sql = "SELECT id_user, name_user , user, tipo_user 	
                  FROM users WHERE user='$user_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario){
        $id_usuario_sesion = $usuario['id_user'];
        $nombres_sesion = $usuario['name_user'];
        $rol_sesion = $usuario['tipo_user'];
    }
}else{
    echo "no existe sesion";
    header('Location: '.$URL.'/login');
}

 ?>