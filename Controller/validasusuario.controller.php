<?php
   session_start();

    require_once("../Model/db.conn.php");

    require_once("../Model/autentificarusuario.class.php");

    $id_usuario = $_POST["id_usuario"];
    $clave      = $_POST["clave"];


    try {
    	$usuario = Gestion_Usuarios::ValidaUsuario($id_usuario, $clave);

        $usuario_existe = count($usuario[0]);

    	if($usuario_existe == 0){

    		$msn = base64_encode("ES NECESARIO REGISTRARSE PRIMERO");
    		$tipo_msn = base64_encode("Advertencia");

    		header("location: ../iniciarsesion.php?m=".$msn."&tm=".$tipo_msn);
    	}else{

    		$_SESSION["id_usuario"]     = $usuario[0];
    		$_SESSION["cod_rol"]        = $usuario[1];
    		$_SESSION["id_barberia"]    = $usuario[2];
    		$_SESSION["nombre"]         = $usuario[3];
    		$_SESSION["apellido"]       = $usuario[4];
    		$_SESSION["telefono"]       = $usuario[5];
    		$_SESSION["direccion"]      = $usuario[6];
    		$_SESSION["id_ciudad"]      = $usuario[7];
    		$_SESSION["email"]          = $usuario[8];
    		$_SESSION["estado"]         = $usuario[10];

    		header("location: ../deshboard.php");
    		

    	}
    } catch (Exception $e) {

    	$msn = base64_encode("A ocurrido un erro".$e->getMessage());
    	$tipo_msn = base64_encode("Advertencia");

    	header("Location: iniciarsesion.php?m=".$msn."&tm=".$tipo_msn);
    }