<?php

include_once "login.php";

if($_SESSION["usuario"]=="Visitante"){
    header("Location: paginasquepuedeverelvisitante.php");
  }
  else if($_SESSION['usuario']=="Admin"){
    header("Location: pagiansdeadministracion.php");

  }

?>