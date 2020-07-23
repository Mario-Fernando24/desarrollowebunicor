   <?php

  class Matricula extends Conectar{ // declaro mi programa
  
  //***** FUNCION PARA MOSTRAR LOS PROGRAMAS 
  	   public function get_matricula(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from matricula;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

      public function get_matricula_val(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT matricula.id,usuario.nombre, usuario.apellido, curso.materia FROM curso, usuario,matricula WHERE curso.id=matricula.id_curso && usuario.id=matricula.id_estudiante;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

      public function get_estudiante(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT usuario.id,usuario.nombre, usuario.apellido FROM usuario WHERE usuario.tipo_usuario=2;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

      // *** FUNCION PARA AGREGAR UN matricula 
  public function agregar_matricular(){
        $conectar=parent::conexion();
        parent::set_names();
         if(empty($_POST["id_estudiante"]) or empty($_POST["id_curso"])){
           header("Location:".Conectar::ruta()."admin/matriculas/crear.php?m=1");
           exit();
        }
        $contra='activo';
         $conectar=parent::conexion();
        $sql="insert into matricula values(null,?,?,now());";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $_POST["id_curso"]);
        $sql->bindValue(2, $_POST["id_estudiante"]);
        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        
           header("Location:".Conectar::ruta()."admin/matriculas/index.php?m=2");
        
      }


     }

     ?>