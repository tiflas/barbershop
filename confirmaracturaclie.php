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
              
              var ficha= $("#ficha").val();
              var barbe= $("#barberiadis").val();
              var servicio= $("#servicio").val();
              var valor= $("#valor").val();
              var barberia= $("#barberia").val();
              var fecha= $("#fecha").val();
              var horario= $("#horario").val();
              

              
              if((ficha == "")||(barbe == "")||(servicio == "")||(valor == "")||(barberia == "")||(fecha == "")||(horario == "")){
                 swal("Por Favor Llene Los Campos Requeridos");
                 }else{
                        swal({   
                              title: "Se ah Guardado Correctamente El Registro",   
                              text: "Gracias por Utilizar Nuestros Servicios",  
                             
                            
                              
                        },
                        function(){
                              setTimeout(function(){
                                    window.location.href ="registrarcitalosyankees.php";
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
 	     <a href="consultarcitacliente.php"><li>Cita Programada</li></a>
       <a href=""><li>Confirmar Facturacion</li></a>
       </ul>
     </nav>
   </section>

   <section id="columnaizquierda11">

     <section id="contenedor2">
        <section id="registro2">
        <h2 class="ingrese2">Registrar Cita</h2>
          <section id="contacto2">
          <form action="Controller/cita.controller.php" method="POST">

                    

                     <div>
                     <label >Barberos Disponibles:</label>
                      <select name="id_empresa" id="barberiadis" >
                           <option value="1"> <?php echo $_SESSION["id_usuario"]; ?></option>
                            <option value="2">Juan Esteban Espinosa</option>
                               <option value="3">Danny Del Rio</option>
                        
                           <br>
                       
            
                     <div>
              
                      <button  type="botton" name="acc" value="c" onclick="Alertas()"> Guardar Cita</button>
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