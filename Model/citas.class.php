<?php

  class cita{
  	function Create($cod_servicio,$id_empresa,$descripcion,$valor,$id_barberia,$fecha,$horario)
  	{
  		$conexion=barbershopweb::Connect();
		$conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$consulta="INSERT INTO servicio (cod_servicio,id_empresa,descripcion,valor,id_barberia,fecha,horario) values(?,?,?,?,?,?,?)";

		$query=$conexion->prepare($consulta);
		$query->execute(array($cod_servicio,$id_empresa,$descripcion,$valor,$id_barberia,$fecha,$horario));

		barbershopweb::Disconnect();
  	}
  }

?>