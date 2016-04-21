<?php
   
    if($_SESSION["cod_rol"]=="Administrador"){
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>
<link rel="stylesheet"  href="css/flexslider.css" />
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
      
		<article id="slider">
			<div class="flexslider">
					<ul class="slides">
						<li>
							<a href=""><img src="img/imagen1.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
						<li>
							<a href=""><img src="img/imagen2.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
							
					</ul>
			</div>
		</article>
		</section>
	

	
	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
		</section>
	</footer>
</body>
</html>










<?php
    }elseif($_SESSION["cod_rol"]=="Cliente"){
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>
<link rel="stylesheet"  href="css/flexslider.css" />
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
      
		<article id="slider">
			<div class="flexslider">
					<ul class="slides">
						<li>
							<a href=""><img src="img/imagen1.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
						<li>
							<a href=""><img src="img/imagen2.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
							
					</ul>
			</div>
		</article>
		</section>
	

	
	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
		</section>
	</footer>
</body>
</html>




<?php
   
    }elseif($_SESSION["cod_rol"]=="Empleado"){
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>
<link rel="stylesheet"  href="css/flexslider.css" />
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
       <a href=""><li>Servicios</li></a>
     <a href="noticiasempleado.php"><li>Noticias</li></a>
  <a href="quienessomosempleado.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
      
		<article id="slider">
			<div class="flexslider">
					<ul class="slides">
						<li>
							<a href=""><img src="img/imagen1.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
						<li>
							<a href=""><img src="img/imagen2.jpg"></a>
							<p class="flex-caption">Barbershop web</p>
						</li>
							
					</ul>
			</div>
		</article>
		</section>
	

	
	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
		</section>
	</footer>
</body>
</html>


<?php

 }

 ?>