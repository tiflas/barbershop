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

<link rel="stylesheet"  href="css/flexslider.css" />
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type ="text/javascript">
            function Alertas(){
              
              var barbeid= $("#barberiaid").val();
              var nombreb= $("#nombreba").val();
              var direcc= $("#direccionba").val();
              var diastra= $("#diastrabajo").val();
              var horar= $("#horarioba").val();
              var teleb= $("#teleba").val();
              var correob= $("#correoba").val();
              var celulab= $("#celularba").val();

              

              
              if((barbeid == "")||(nombreb == "")||(direcc == "")||(diastra == "")||(horar == "")||(teleb == "")||(correob == "")||(celulab == "")){
                 swal("Por Favor Llene Los Campos Requeridos");
                 }else{
                        swal({   
                              title: "Se ah Guardado Correctamente El Registro",   
                              text: "Gracias por Utilizar Nuestros Servicios",  
                             
                            
                              
                        },
                        function(){
                              setTimeout(function(){
                                    window.location.href ="registrarbarberia.php";
                              },2000)
                              });
                        }
                      }
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
       </ul>
     </nav>
   </section>

   <section id="columnaizquierda">

     <section id="contenedor2">
        <section id="registro2">
        <h2 class="ingrese2">Registrar Barberia</h2>
          <section id="contacto2">
          <form action="Controller/barberia.controller.php" method="POST">
          
                    <div>
                    <label >Identificacion Barberia:</label>
                    <input type="number" name="id_barberia" id="barberiaid" min="1" max="1000000" step="1" required >
                    </div>

                    <div>
                     <label >Nombre Barberia:</label>
                       <input type ="text" name="nombre" id="nombreba" placeholder="Escribe el nombre" required >
                    </div>
                     <div>
                     <label >Direccion:</label>
                       <input type ="text" name="direccion" id="direccionba" placeholder="Escribe la direccion" required >
                     </div>

                     <div>
                     <label >Dias Laborales:</label>
                       <input type ="text" name="dias_de_trabajo" id="diastrabajo" placeholder="Dias laborales de la barberia" required >
                         </select>
                         </div>
                         <div>
                     <label>Horario:</label>
                       <input type ="text" name="horario" id="horarioba" placeholder="Horario de la barberia" required >
                         </select>
                         </div>
                     
                      <div>
                     <label >Ciudad:</label>
                      <select name="id_ciudad" >
                           <option value="1">Medellin </option>
                            <option value="2">Bogota </option>
                               <option value="3">Cali </option>
                         </select>
                         </div>
                      <div>
                      <label >Telefono:</label>
                       <input type ="text" name="telefono" id="teleba" placeholder="Escribe tu Telefono" required >
                     </div>
                       <div>
                      <label >Correo:</label>
                       <input type ="email" name="correo" id="correoba" placeholder="Escribe tu Correo" required >
                     </div>
                       <div>
                      <label >Celular:</label>
                       <input type ="text" name="celular" id="celularba" placeholder="Escribe tu Celular" required >
                     </div>
                     
                    <br>
            
                    <div>
              
                      <button  type="botton" name="acc" value="c" onclick="Alertas()"> Registrar</button>
                   </div>
          
        </form> 
    
      </section>
  </section>
   </article>
     
      </section>

   </article>

	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>