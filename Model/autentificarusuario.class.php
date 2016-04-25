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

 }

?>