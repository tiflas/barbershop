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
  
  function Update($id_barberia,$nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular){
    $conexion=barbershopweb::Connect();
    $conexion->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $consulta="UPDATE barberia SET nombre=?,direccion=?,dias_de_trabajo=?,horario=?,id_ciudad=?,telefono=?,correo=?,celular=? WHERE id_barberia=?";

    $query=$conexion->prepare($consulta);
    $query->execute(array($nombre,$direccion,$dias_detrabajo,$horario,$id_ciudad,$telefono,$correo,$celular,$id_barberia));

    barbershopweb::Disconnect();
  }

	function ReadAll(){
        $conexion = barbershopweb::Connect();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM barberia";
        $query = $conexion->prepare($sql);
        $query->execute();
        
        $results = $query->fetchALL(PDO::FETCH_BOTH);
        barbershopweb::Disconnect();
        return $results;
      }


  function ReadbyId($id_barberia){
        $conexion = barbershopweb::Connect();
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM barberia WHERE id_barberia=?";
        $query = $conexion->prepare($sql);
        $query->execute(array($id_barberia));
          
        $results = $query->fetch(PDO::FETCH_BOTH);
        barbershopweb::Disconnect();
        return $results;
        }

  function Delete($id_barberia){
          $conexion = barbershopweb::Connect();
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "DELETE FROM barberia WHERE id_barberia = ?";
          $query = $conexion->prepare($sql);
          $query->execute(array($id_barberia));
            
          barbershopweb::Disconnect();
          }

 }

?>

