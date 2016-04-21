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
 	<a href="reservas.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
   
   <article class="barberiabienvenidos">
     <section id="columnaderecha">
     <nav id="menu2">
       <ul>
 	     <a href="registrarcita.php"><li>Registrar Cita</li></a>
 	     <a href="registrarbarberia.php"><li>Cita Programada</li></a>
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
                    <label >Ficha:</label>
                    <input type="number" name="cod_servicio" min="1" max="1000000" step="1" required >
                    </div>

                     <div>
                     <label >Barberos Disponibles:</label>
                      <select name="id_empresa" >
                           <option value="1">Aleatorio</option>
                            <option value="2">Juan Esteban Espinosa</option>
                               <option value="3">Danny Del Rio</option>
                                 
                         </select>
                         </div>

                    <div>
                    <label >Servicio:</label>
                      <select name="descripcion" >
                           <option value="Corte Personalizado">Corte Personalizado </option>
                            <option value="Tuso">Tuso Totalmente </option>
                               <option value="Afeitada y Corte">Corte y Afeitada </option>
                                 <option value="Afeitada">Afeitada </option>
                         </select>
                         </div>

                         <div>
                         <label >Valor:</label>
                      <select name="valor" >
                           <option value="6000">Basico = 6000</option>
                             <option value="8000">Premium = 8000 </option>
                               <option value="12000">VIP = 12000</option>
                                 
                         </select>
                         </div>

                      <div>
                       <label >Barberia:</label>
                         <select name="id_barberia" >
                           <option value="7">Los Yankess</option>
                            </select>
                              </div>

                         <div>
                            <label>Fecha:</label>
                             <input type="date" name="fecha" min="1998-01-01" >
                      
                         </div>

                    <div>
                    <label >Horario:</label>
                      <select name="horario" >
                           <option value="9 Am">9 Am </option>
                             <option value="9 30 Am">9:30 Am </option>
                               <option value="10 Am">10 Am </option>
                                 <option value="10 30 Am">10:30 Am </option>
                                   <option value="11 Am">11 Am </option>
                                     <option value="11 30 Am">11:30 Am </option>
                                       <option value="12 40 pm">12:40 pm </option>
                                         <option value="1 pm">1 pm </option>
                                           <option value="1 30pm">1:30 pm </option>
                                             <option value="2 pm">2 pm </option>
                                               <option value="2 30pm">2:30 pm </option>
                                                 <option value="3 pm">3 pm </option>
                                                    <option value="3 30 pm">3:30 pm </option>
                                                      <option value="4 pm">4 pm </option>
                                                        <option value="4 30 pm">4:30 pm </option>
                                                           <option value="5 pm">5 pm </option>
                                                             <option value="5 30 pm">5:30 pm </option>
                                                               <option value="6 pm">6 pm </option>
                                                                  <option value="6 30 pm">6:30 pm </option>
                                                                    <option value="7 pm">7 pm </option> 
                                                                      <option value="7 30 pm">7:30 pm </option>
                                                                        <option value="8 pm">8 pm </option>
                                                                          <option value="8 30pm">8:30 pm </option>
                                                                            <option value="9 pm">9 pm </option>

                                                                       </select>
                                                                       </div>
                           <br>
                       
            
                     <div>
              
                      <button  type="botton" name="acc" value="c"> Guardar Cita</button>
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