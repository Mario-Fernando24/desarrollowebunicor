
	<?php
 require_once("../../clase/conexion.php"); 
 require_once("../../clase/usuario.php"); // llamo al modulo usuario
      $usua=new Usuario();
      $usua->eliminar_Usuario($_GET["id"]); //llamo donde hice la consulta por medio del id que la pase por el metodo get por la url y hago la consulta
      
        header("Location:".Conectar::ruta()."admin/usuario/index.php?m=1");
      exit(); 

?>

