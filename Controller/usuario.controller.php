<?php
    
       require_once("../Model/db.conn.php");

       require_once("../Model/contactos.class.php");

       $accion=$_REQUEST["acc"];
       switch ($accion) {
        case 'c':

        $id_usuario   =$_POST["id_usuario"];
        $cod_rol      =$_POST["cod_rol"];
        $id_barberia  =$_POST["id_barberia"];
        $nombre       =$_POST["nombre"];
        $apellido     =$_POST["apellido"];
        $telefono     =$_POST["telefono"];
        $direccion    =$_POST["direccion"];
        $id_ciudad    =$_POST["id_ciudad"];
        $correo       =$_POST["email"];
        $clave        =$_POST["clave"];
        $estado       =$_POST["estado"];

        try {
          usuario::Create($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$clave,$estado);
          $mensaje="su registro se creo correctamente";
        
        } catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }

        header("location: ../registrarse.php?msn=".$mensaje);

       break;
        case 'u':

        $id_usuario      =$_POST["id_usuario"];
        $cod_rol         =$_POST["cod_rol"];
        $id_barberia     =$_POST["id_barberia"];
        $nombre          =$_POST["nombre"];
        $apellido        =$_POST["apellido"];
        $telefono        =$_POST["telefono"];
        $direccion       =$_POST["direccion"];
        $id_ciudad       =$_POST["id_ciudad"];
        $correo          =$_POST["email"];
        $estado          =$_POST["estado"];

        try {
          usuario::Update($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$estado);
          $mensaje="Se Actualizo Correctamente";
        
        } catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }

        header("location: ../consultarcliente.php?msn=".$mensaje);

        break;
         case 'd':
        try{
          $usuario = usuario::Delete(base64_decode($_REQUEST["ui"]));
          $mensaje="Se ah Eliminado Correctamente";
        }catch (Exception $e){
          $mensaje="ah ocurrido un error, el error fue: ".$e->getMessage()." en ".$e->getFile(). " en la linea".$e->getLine();
        }
        header("location: ../consultarcliente.php?msn=".$mensaje);

        break;
      }
?>