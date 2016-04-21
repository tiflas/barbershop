<?php

  class Gestion_Usuarios{

  	function ValidaUsuario($id_usuario,$clave)
  	{
  		$conexion=barbershopweb::Connect();

		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="SELECT * FROM usuario WHERE id_usuario = ? AND clave = ?";

        $query=$conexion->prepare($consulta);
		$query->execute(array($id_usuario,$clave));

        $results = $query->fetch(PDO::FETCH_BOTH);

		barbershopweb::Disconnect();
		
		return  $results;
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
          $query->execute(array($codigo));
          
          $results = $query->fetch(PDO::FETCH_BOTH);
          barbershopweb::Disconnect();
          return $results;
        }

        function Delete($id_usuario){
            $conexion = barbershopweb::Connect();
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM usuario WHERE id_usuario = ?";
            $query = $conexion->prepare($sql);
            $query->execute(array($codigo));
            
            barbershopweb::Disconnect();
          }

 }

?>