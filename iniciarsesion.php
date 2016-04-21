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
          <section class="iniciarsesion">
		     <a href="iniciarsesion.php"><h2><font color="white">Iniciar Sesion |</font></a> <a href="registrarse.php"><font color="red">Registrarse</h2></font></a>
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
 	<a href="index.php"><li>Inicio</li></a>
 	   <a href="barberias.php"><li>Barberias</li></a>
 	     <a href=""><li>Servicios</li></a>
 	   <a href="productos.php"><li>Noticias</li></a>
 	<a href="quienesssomos2.php"><li>Quienes Somos</li></a>

 </ul>
 </nav>
	</header>

     <section id="fondo1">

       
        <h2 class="iniciar1">Iniciar Sesion</h2>
          <section id="contacto3">

             <section class="logoinicio"><img class="logoinicio1" src="img/2000px-Group_font_awesome.svg.png"></section>
          <form action="Controller/validasusuario.controller.php" method="POST">
          

                    <div>
                     <label >Usuario:</label>
                       <input type ="text" name="id_usuario" placeholder="Escribe tu Usuario" required >
                         </div>
                     
                    <div>
		                 <label >Contraseña:</label>
		                   <input type ="password" name="clave" placeholder="Escribe tu contraseña" required >
		                     </div>
                    
                       <br>
                        <div>
                          <button  type="botton" name="acc" value="c"> Iniciar</button>
                            </div>
          
        </form> 
        <br>

        <a href=""><p class="olvidastecontra">¿Olvidaste tu Contraseña?</p></a>
       <br>
        <a href="registrarse.php"><p class="olvidastecontra">Crear Cuenta</p></a>
    
      </section>

 
     
 
    </section>
	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>