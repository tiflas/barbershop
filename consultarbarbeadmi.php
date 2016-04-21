<?php
   
    session_start();

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
   
   <article class="barberiabienvenidos">
     <section id="columnaderecha">
     <nav id="menu2">
       <ul>
 	     
 	     <a href="registrarbarberia.php"><li>Registrar Barberia</li></a>
       <a href="consultarbarbeadmi.php"><li>Consultar Barberias</li></a>
      
       </ul>
     </nav>
   </section>

   <section id="columnaizquierda11">

     <table id="datatable" class="display">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Perfil</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $usuarios = Gestion_Usuarios::ReadAll();
      foreach ($usuarios as $row) {
        if($row["cod_rol"] == "Administrador");
           $perfil = "Administrador";
          
        }elseif($row["cod_rol"] == "Cliente");
          $perfil = "Cliente";
        }
        echo "<tr>
                <td>".$row["id_usuario"]."</td>
                <td>".$row["cod_rol"]."</td>
                <td>".$row["id_barberia"]."</td>
                <td>".$perfil."</td>
                <td>
                  <a href='edita_usuario.php?ui=".base64_encode($row["id"])."'><i class='fa fa-pencil'></i></a>
                  <a href='controller.usuario.php?ui=".base64_encode($row["id"])."&acc=d'><i class='fa fa-trash'></i></a>
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