<?php
   
    session_start();

     require_once("../barbershop/Model/db.conn.php");

     require_once("../barbershop/Model/barberia.class.php");

    if(!isset($_SESSION["id_usuario"])){
      header("location: ../index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>

<link rel="stylesheet"  href="css/estilos.css">
<meta name="author" content="jailer">

<link rel="stylesheet" type="text/css" href="//cdn.datables.net/1.10.11/css/jquery.dataTables.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

 <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    </script>

<title>Barbershop web </title>

</head>
<body>
		<header class="logomenu">
        <section id="entrar">
     <h1 id="online">En linea</h1> <h1 id="nick"> <?php echo $_SESSION["nombre"]; ?>  <?php echo $_SESSION["apellido"]; ?></h1>
         <br>
     <a href="cerrarsesion.php">cerrar sesion</a>
     </section>
		 <section class="logo1"><img class="logo" src="img/logo1.png">
 </section>

 <div class="redes">
    <a href="https://www.facebook.com/"><img class="redes1" src="img/facebook1.png"/></a>
      <a href="http://instagram.com/"><img class="redes1" src="img/instagram (1).png"/></a>
        <a href="http://gmail.com/"><img class="redes1" src="img/icon-pinterest.png"/></a>
 </div>

 <nav id="menu">
 <ul>
 <a href="deshboard.php"><li>Inicio</li></a>
     <a href="barberiasadminis.php"><li>Barberias</li></a>
       <a href=""><li>Servicios</li></a>
     <a href="publicidadadmi.php"><li>Noticias</li></a>
  <a href="quienessomosadmi.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
   
   <article class="barberiabienvenidos07">
   

   <section id="columnaizquierda20">

     <table id="datatable" class="display">
      <thead>
        <tr>
          <th>Id barberia</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Dias de Trabajo</th>
          <th>Horario</th>
          <th>Ciudad</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Celular</th>
          <th>Acciones</th>
          
        </tr>
      </thead>
      <tbody>

      <?php


      $barberias = Barberia::ReadAll();
      foreach ($barberias as $row) {

        if($row["id_ciudad"] == 1){
          $ciudad = "Medellin";
        }elseif($row["id_ciudad"] == 2){
          $ciudad = "Bogota";
        }elseif($row["id_ciudad"] == 3){
          $ciudad = "Cali";
        }
        
        echo "<tr>
                <td>".$row["id_barberia"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["direccion"]."</td>
                <td>".$row["dias_de_trabajo"]."</td>
                <td>".$row["horario"]."</td>
                <td>".$ciudad."</td>
                <td>".$row["telefono"]."</td>
                <td>".$row["correo"]."</td>
                <td>".$row["celular"]."</td>
                <td>
                  <a href='edita_barberia1.php?ui=".base64_encode($row["id_barberia"])."'><img class='acciones' src='img/modificar.png'/></a>
                  <a href='../barbershop/Controller/barberia.controller.php?ui=".base64_encode($row["id_barberia"])."&acc=d'><img class='acciones' src='img/cajadebasura.jpg'/></a>
                </td>
              </tr>";
            }
      
      ?>
      </tbody>
    </table>

      
      </section>

   </article>

	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>