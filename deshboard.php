<?php
   
    session_start();

    if(!isset($_SESSION["id_usuario"])){
    	header("location: ../index.php");
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
    <body>
    <section id="entrar">
     <h1 id="online">En linea</h1> <h1 id="nick"> <?php echo $_SESSION["nombre"]; ?>  <?php echo $_SESSION["apellido"]; ?></h1>
         <br>
     <a href="cerrarsesion.php">cerrar sesion</a>
     </section>
     <nav>
     <?php include_once("comp.menu.php"); ?>
     </nav>
     </body>
     </html>