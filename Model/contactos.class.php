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
	
}

?>