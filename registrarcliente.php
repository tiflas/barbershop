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
     <a href="barberiasadminis.php"><li>Barberias</li></a>
       <a href=""><li>Servicios</li></a>
     <a href="publicidadadmi.php"><li>Noticias</li></a>
  <a href="quienessomosadmi.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
   
   <article class="barberiabienvenidos">
     

  

   
    
        <section id="registro">
        <h2 class="ingrese">Registrar Cliente</h2>
          <section id="contacto">
          <form action="Controller/usuario.controller.php" method="POST">
          
                        <div>
                     <label >Nick:</label><br>
                       <input type ="text" name="id_usuario" id="idusu" placeholder="Escribe tu nick de usuario" required >
                    </div>
                     <div>
                     <label >Rol:</label>
                     <br/>
                      <select name="cod_rol">
                           <option value="Cliente" > Cliente </option>
                           <option value="Administrador" > Administrador </option>
                           <option value="Empleado" > Empleado </option>
                            
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

   </article>
    
      </section>

  

	<footer>
		<section class="footer1">
		<h2><font color="white" face="arial">|TODOS LOS DERECHOS RESERVADOS ™|  MEDELLIN-COLOMBIA   DISEÑO Y POSICIONAMIENTO WEB DE BARBERSHOP WEB</font></h2>
	</footer>
</body>
</html>