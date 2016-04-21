<?php
    
       require_once("../Model/db.conn.php");

       require_once("../Model/citas.class.php");

       $accion=$_REQUEST["acc"];
       switch ($accion) {
        case 'c':

        $cod_servicio =$_POST["cod_servicio"];
        $id_empresa   =$_POST["id_empresa"];
        $descripcion  =$_POST["descripcion"];
        $valor        =$_POST["valor"];
        $id_barberia  =$_POST["id_barberia"];
        $fecha        =$_POST["fecha"];
        $horario      =$_POST["horario"];

        try{
        	cita::Create($cod_servicio,$id_empresa,$descripcion,$valor,$id_barberia,$fecha,$horario);
        	$mensaje="su registro se creo correctamente";
        

        } catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }

        header("location: ../registrarcitalosyankees.php?msn=".$mensaje);

        break;

       }

?>