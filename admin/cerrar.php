<?php
require_once("../clase/conexion.php");

session_destroy();   
header("Location:".Conectar::ruta()."index.php");
?>
<!-- aqui destruyo la session para que no puedan acceder por medio de redireccionamiento 


//lo mando directamiente al login "inicio"