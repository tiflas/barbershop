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
     <a href="barberiasempleado.php"><li>Barberias</li></a>
       <a href="serviciosempleado.php"><li>Servicios</li></a>
     <a href="noticiasempleado.php"><li>Noticias</li></a>
  <a href="quienessomosempleado.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
  </header>

     
     
       
    

   <section id="barberias1">
     <h1 id="bienvenidos">OPCIONES DE GESTION</h1>
      <br/>


  <section id="menu33">
 
  <a href="clientesempleado.php"><div class="contenedor12" id="dos"><img class="icono" src="img/2000px-Group_font_awesome.svg.png">
  <p class="texto">Clientes</p></a>
  </div>

         
         </section>
      </section>

 

  <footer>
    <section class="footer1">
    <h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
  </footer>
</body>
</html>