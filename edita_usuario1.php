<?php
   
    session_start();

     require_once("../barbershop/Model/db.conn.php");

     require_once("../barbershop/Model/contactos.class.php");

    if(!isset($_SESSION["id_usuario"])){
      header("location: ../index.php");
    }

    $usuario = usuario::ReadbyId(base64_decode($_REQUEST["ui"]));
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="barbershop web"/>

<link rel="stylesheet"  href="css/estilos.css">
<meta name="author" content="jailer">

<link rel="stylesheet" type="text/css" href="//cdn.datables.net/1.10.11/css/jquery.dataTables.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

 <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
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
     <a href="barberiasadminis.php"><li>Barberias</li></a>
       <a href=""><li>Servicios</li></a>
     <a href="publicidadadmi.php"><li>Noticias</li></a>
  <a href="quienessomosadmi.php"><li>Quienes Somos</li></a>
 </ul>
 </nav>
	</header>
   
   <article>
        <section id="contenedor">
          <section id="registro">
            <h2 class="ingrese">Modificar Usuario</h2>
              <section id="contacto">
                <form action="Controller/usuario.controller.php" method="POST">
                    
                         <div>
                         <label>ID Usuario:</label>
                         <input type="text" readonly name="id_usuario" required value="<?php echo $usuario[0] ?>">
                         </div>
                        
                         

                         <div>
                        <label>Rol:</label><br>
                        <select name="cod_rol">


                          <option value="Administrador" <?php  echo "selected" ?>>Administrador</option>
                           <option value="Cliente" <?php  echo "selected" ?>>Cliente</option>
                             
                           </select>
                         </div>


                          <div>
                         <label>ID Barberia:</label>
                         <input type="text" name="id_barberia" required value="<?php echo $usuario[2] ?>">
                          <div>

                        <div>
                         <label>Nombre:</label>
                         <input type="text" name="nombre"  value="<?php echo $usuario[3] ?>">
                        </div>

                         <div>
                         <label>Apellido:</label>
                         <input type="text" name="apellido" value="<?php echo $usuario[4] ?>">
                         </div>

                         <div>
                         <label>Telefono:</label>
                         <input type="text" name="telefono" value="<?php echo $usuario[5] ?>">
                         </div>

                         <div>
                         <label>Direccion:</label>
                         <input type="text" name="direccion" value="<?php echo $usuario[6] ?>">
                         </div>


                         <div>
                        <label>Ciudad:</label>
                        <select name="id_ciudad">


                          <option value="1" <?php if($usuario["id_ciudad"] == 1){ echo "selected"; } ?>>Medellin</option>
                           <option value="2" <?php if($usuario["id_ciudad"] == 2){ echo "selected"; } ?>>Bogota</option>
                             <option value="3" <?php if($usuario["id_ciudad"] == 3){ echo "selected"; } ?>>Cali</option>
                           </select>
                         </div>

                         <div>
                         <label>Correo Electronico:</label>
                         <input type="email" name="email" value="<?php echo $usuario[8] ?>">
                         </div>

                         <br>
                    
                        
                        
                        <div>
                            
                          <button  type="botton" name="acc" value="u">Actualizar</button>
                          <a href="consultarcliente.php">Cancelar</a>
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