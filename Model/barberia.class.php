<?php

class Barberia{

    function Create($id_barberia,$nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular)
	{
		$conexion=barbershopweb::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="INSERT INTO barberia (id_barberia,nombre,direccion,dias_de_trabajo,horario,id_ciudad,telefono,correo,celular) values(?,?,?,?,?,?,?,?,?)";

		$query=$conexion->prepare($consulta);
		$query->execute(array($id_barberia,$nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular));

		barbershopweb::Disconnect();
	}

 }

?>

