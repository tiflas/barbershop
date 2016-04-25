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
 	   <a href="barberiascliente.php"><li>Barberias</li></a>
 	     <a href=""><li>Servicios</li></a>
 	   <a href="noticiascliente.php"><li>Noticias</li></a>
 	<a href="quienessomos.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
   
   <article class="barberiabienvenidos">
     <section id="columnaderecha">
     <nav id="menu2">
       <ul>
 	     <a href="registrarcitalosyankees.php"><li>Registrar Cita</li></a>
 	     <a href="consultascliente.php"><li>Consultar Citas</li></a>
       </ul>
     </nav>
   </section>

   <section id="columnaizquierda11">
     <iframe width="560" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
     src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Calle+64+%23+54+-+26+Itagui&amp;aq=&amp;sll=6.149494,-75.577947&amp;sspn=0.023724,0.042272&amp;ie=UTF8&amp;hq=&amp;
     hnear=Calle+64+%23+54-26,+Antioquia,+Colombia&amp;ll=6.173012,-75.607481&amp;spn=0.001483,0.002642&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Calle+64+%23+54+-+26+Itagui&amp;aq=&amp;sll=6.149494,-75.577947&amp;sspn=0.023724,0.042272&amp;ie=UTF8&amp;hq=&amp;hnear=Calle+53+%23+50-26,+Antioquia,+Colombia&amp;ll=6.173012,-75.607481&amp;spn=0.001483,0.002642&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left" target="_blank">Ver mapa más grande</a></small>
      </section>

   </article>

	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>