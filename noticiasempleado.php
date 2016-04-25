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
<link rel="stylesheet"  href="css/flexslider1.css" />
<link rel="stylesheet"  href="css/estilos.css">
<meta name="author" content="jailer">
<script>
    !window.jquery && document.write("<script src='js/jquery.min.js'><\/script>");
  </script>
  <script src="js/jquery.flexslider.js"></script>
  <script>
      $(window).load(function() {
        $('.flexslider').flexslider();
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
     <a href="barberiasempleado.php"><li>Barberias</li></a>
       <a href="serviciosempleado.php"><li>Servicios</li></a>
     <a href="noticiasempleado.php"><li>Noticias</li></a>
  <a href="quienessomosempleado.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>

  <article id="slider">
      <div class="flexslider">
          <ul class="slides">
           <li>
              <a href=""><img src="img/peluquero.png"></a>
              
            </li>
            <li>
              <a href=""><img src="img/1_Atkinson-barberia-peluqueria.jpg"></a>
              
            </li>

            <li>
              <a href=""><img src="img/1163_1888477_588442331246240_443431159_n.jpg.thb.jpg"></a>
              
            </li>
            
             <li>
              <a href=""><img src="img/adidas-classic-logo-gris-negro-002.jpg"></a>
              
            </li>
             <li>
              <a href=""><img src="img/adidas-originals-graphic-t-shirt-mens.jpg"></a>
              
            </li>
              
          </ul>
      </div>
    </article>
   
   <article class="productos">
    
     
      
     

   

   <section id="columnaizquierda1">

      <section id="imagennoticia1">
      <section class="logo4"> <img class="logo3" src="img/hqdefault.jpg"> </section>
      <p class="textonoticias">
      <h2>El arte de acicalar con tijeras y barbera en Medellín</h2>

      Los peluqueros de la Minorista ofrecen más que un corte, un ambiente amable para sus clientes.
      </p>
      </section>
     
      </section>

      <section id="columnaabajo1">

       <section id="imagennoticia1">
      <section class="logo4"> <img class="logo3" src="img/hairstyle-art-hair-portraits-robtheoriginal-33-600x600.jpg"> </section>
      <p class="textonoticias">
      <h2>Al Mejor Estilo</h2>

      somos una fuente de empleo para muchos hombres y mujeres profesionales de la estética que 
      se han preparado en las mejores academias y que atienden a personas del común con la mejor calidad
      </p>
      </section>

      </section>

      <section id="columnaizquierda1">
       <section id="imagennoticia1">
      <section class="logo4"> <img class="logo3" src="img/imagen106781g.jpg"> </section>
      <p class="textonoticias">
      <h2>Motilados A Comodida Del Cliente!!!</h2>

      Muchos piden motilados simples, como pasar la máquina para corte, pero otros son un poco más 
      vanidosos y quieren un corte con forma o en capas que se van desvaneciendo. Y, aunque esto es 
      un poco más complejo, yo les doy gusto y no les cobro un peso más
      </p>
      </section>
     
      </section>

      <section id="columnaabajo1">
       <section id="imagennoticia1">
      <section class="logo4"> <img class="logo3" src="img/zonac15febrero-15-640x280.jpg"> </section>
      <p class="textonoticias">
      <h2>Barberia Jungla</h2>

      Sánchez agrega que el servicio es económico y le siguen todos sus caprichos, razón 
      principal para no dejar su cabellera en manos de cualquier persona primípara o inexperta.
      </p>
      </section>

      </section>

   </article>

	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>