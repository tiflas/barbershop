<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>
<link rel="stylesheet"  href="css/estilos.css">
<meta name="author" content="jailer">

<link rel="stylesheet"  href="css/flexslider.css" />
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type ="text/javascript">
            function Alertas(){
              
              var usu= $("#idusu").val();
              var nombreusu= $("#nombreusu").val();
              var apellidousu= $("#apellidousu").val();
              var telefonousu= $("#telefonousu").val();
              var direccionusu= $("#direccionusu").val();
              var correousu= $("#correousu").val();
              var contrausu= $("#contrausu").val();
              

              
              if((idusu == "")||(nombreusu == "")||(apellidousu == "")||(telefonousu == "")||(direccionusu == "")||(correousu == "")||(contrausu == "")){
                 swal("Por Favor Llene Los Campos Requeridos");
                 }else{
                        swal({   
                              title: "Se ah Registrado con Exito",   
                              text: "Gracias por Utilizar Nuestros Servicios",  
                             
                            
                              
                        });
                        }
                      }
                      
  </script>


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
	<article>
		<section id="contenedor">
	      <section id="registro">
		    <h2 class="ingrese">Ingrese sus datos</h2>
		      <section id="contacto">
			    <form action="Controller/usuario.controller.php" method="POST">
					
                        <div>
		                 <label >Nick:</label>
		                   <input type ="text" name="id_usuario" id="idusu" placeholder="Escribe tu nick de usuario" required >
		                </div>
		                 <div>
		                 <label >Rol:</label>
		                 <br/>
		                  <select name="cod_rol">
	                         <option value="Cliente" > Cliente </option>
	                          
	                       </select>
		                  <div>

		                  <div>
		                 <label >Barberia:</label>
		                 <br/>
		                  <select name="id_barberia">
	                         <option value="1" > Ninguna </option>
	                          
	                       </select>
		                  <div>

						<div>
		                 <label >Nombre:</label>
		                   <input type ="text" name="nombre" id="nombreusu" placeholder="Escribe tu nombre" required >
		                </div>
		                 <div>
		                 <label >Apellido:</label>
		                   <input type ="text" name="apellido" id="apellidousu" placeholder="Escribe tu apellido" required >
		                 </div>
		                 <div>
		                 <label >Telefono:</label>
		                   <input type ="text" name="telefono" id="telefonousu" placeholder="Escribe tu Telefono" required >
		                 </div>
		                 <div>
		                 <label >Direccion:</label>
		                   <input type ="text" name="direccion" id="direccionusu" placeholder="Escribe tu Direccion" required >
		                 </div>
		                  <div>
		                 <label >Ciudad:</label>
		                  <select name="id_ciudad">
	                         <option value="1">Medellin </option>
	                          <option value="2">Bogota </option>
	                             <option value="3">Cali </option>
	                       </select>
		                  <div>
		                <label >Correo:</label>
		                   <input type ="email" name="email" id="correousu" placeholder="Escribe tu Direccion" required >
		                 
		                </div>
		                 <div>
		                <label >Contraseña:</label>
		                <input type ="password" name="clave" id="contrausu" placeholder="Escribe tu contraseña" required >
		               </div>
		               <label >Estado:</label>
		               <br>
	                       <input type="radio" name="estado" value="Inactivo" checked>Inactivo
	                       <input type="radio" name="estado" value="Activo" checked>Activo
		               </div>
		                 
                        <br>
		                <br>
						
		                <div>
							
		                  <button  type="botton" name="acc" value="c" onclick="Alertas()" > Registrar</button>
		               </div>
					
				</form>	
		
      </section>
	</section>
   </article>
	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>

