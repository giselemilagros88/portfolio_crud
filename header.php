<?php

    #inicializamos variables de sesion 
    session_start();
   # print_r($_SESSION);

    #si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
    if ( isset( $_SESSION['usuario'] )!='administrador'  ){
        header("location:login.php");

    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Portfolio</title>
</head>
<body>
<div class="container">
    <nav>
        <a href="index.php">Inicio</a> |
        <a href="galeria.php">Galeria</a> |
        <a href="cerrar.php">Cerrar Sesión</a> 
    </nav>