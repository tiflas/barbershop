<?php
    
       require_once("../Model/db.conn.php");

       require_once("../Model/barberia.class.php");

       $accion=$_REQUEST["acc"];
       switch ($accion) {
       	case 'c':

        $id_barberia    =$_POST["id_barberia"];
       	$nombre         =$_POST["nombre"];
       	$direccion      =$_POST["direccion"];
        $dias_detrabajo =$_POST["dias_de_trabajo"];
        $horario        =$_POST["horario"];
       	$id_ciudad      =$_POST["id_ciudad"];
        $telefono       =$_POST["telefono"];
       	$correo         =$_POST["correo"];
       	$celular        =$_POST["celular"];
  

       	try {
       		Barberia::Create($id_barberia,$nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular);
       		$mensaje="su registro se creo correctamente";
       	
       	} catch (Exception $e){
        	$mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }

        header("location: ../registrarbarberia.php?msn=".$mensaje);

        break;
        case 'u':
            
        $id_barberia    =$_POST["id_barberia"];
        $nombre         =$_POST["nombre"];
        $direccion      =$_POST["direccion"];
        $dias_detrabajo =$_POST["dias_de_trabajo"];
        $horario        =$_POST["horario"];
        $id_ciudad      =$_POST["id_ciudad"];
        $telefono       =$_POST["telefono"];
        $correo         =$_POST["correo"];
        $celular        =$_POST["celular"];
  

        try {
          Barberia::Update($id_barberia,$nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular);
          $mensaje="Se Actualizo Correctamente";
        
        } catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }

        header("location: ../consultarbarbeadmi.php?msn=".$mensaje);

        break;
        case 'd':
        try{
          $barberia = barberia::Delete(base64_decode($_REQUEST["ui"]));
          $mensaje="Se ah Eliminado Correctamente";
        }catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }
        header("location: ../consultarbarbeadmi.php?msn=".$mensaje);

        break;
      }

?>