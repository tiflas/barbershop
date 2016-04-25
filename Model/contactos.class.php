<?php

class usuario{

	function Create($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$clave,$estado)
	{
		$conexion=barbershopweb::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="INSERT INTO usuario (id_usuario,cod_rol,id_barberia,nombre,apellido,telefono,direccion,id_ciudad,email,clave,estado) values(?,?,?,?,?,?,?,?,?,?,?)";

		$query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$clave,$estado));

		barbershopweb::Disconnect();
	}  
	
	function Update($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$estado){
    $conexion=barbershopweb::Connect();
    $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="UPDATE usuario SET cod_rol=?,id_barberia=?,nombre=?,apellido=?,telefono=?,direccion=?,id_ciudad=?,email=?,estado=? WHERE id_usuario=?";

    $query=$conexion->prepare($consulta);
    $query->execute(array($id_usuario,$cod_rol,$id_barberia,$nombre,$apellido,$telefono,$direccion,$id_ciudad,$correo,$estado));

    barbershopweb::Disconnect();
  }

  function ReadAll(){
        $conexion = barbershopweb::Connect();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuario";
        $query = $conexion->prepare($sql);
        $query->execute();
        
        $results = $query->fetchALL(PDO::FETCH_BOTH);
        barbershopweb::Disconnect();
        return $results;
      }

       function ReadbyId($id_usuario){
        $conexion = barbershopweb::Connect();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuario WHERE id_usuario=?";
        $query = $conexion->prepare($sql);
        $query->execute(array($id_usuario));
          
        $results = $query->fetch(PDO::FETCH_BOTH);
        barbershopweb::Disconnect();
        return $results;
        }

        function Delete($id_usuario){
          $conexion = barbershopweb::Connect();
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "DELETE FROM usuario WHERE id_usuario = ?";
          $query = $conexion->prepare($sql);
          $query->execute(array($id_usuario));
            
          barbershopweb::Disconnect();
          }
}

?>