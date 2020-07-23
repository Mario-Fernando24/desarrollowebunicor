	<?php
 require_once("../../clase/conexion.php"); 
 require_once("../../clase/ClaseCurso.php"); // llamo al modulo usuario
      $usua=new Curso();
      $usua->eliminar_Curso($_GET["id"]); //llamo donde hice la consulta por medio del id que la pase por el metodo get por la url y hago la consulta
        header("Location:".Conectar::ruta()."admin/cursos/index.php?m=1");
      exit(); 

?>

