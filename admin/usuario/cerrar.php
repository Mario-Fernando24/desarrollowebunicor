<?php
require_once("../../clase/conexion.php");
if(isset($_SESSION["id"]) && $_SESSION["tipo_persona"]==1){//<!-- si existe la variable session me muestra todo el  formulario-->
session_destroy();   
header("Location:".Conectar::ruta()."index.php");
}else{
  header("Location:".Conectar::ruta()."index.php");
}?>

<!-- aqui destruyo la session para que no puedan acceder por medio de redireccionamiento 


//lo mando directamiente al login "inicio"