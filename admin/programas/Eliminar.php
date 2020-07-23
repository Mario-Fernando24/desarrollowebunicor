	<?php
 require_once("../../clase/conexion.php"); 
 require_once("../../clase/ClasePrograma.php"); // llamo al modulo usuario
      $usua=new Programa();
      $usua->eliminar_Programa($_GET["id"]); //llamo donde hice la consulta por medio del id que la pase por el metodo get por la url y hago la consulta
        header("Location:".Conectar::ruta()."admin/programas/index.php?m=1");
      exit(); 

?>

