   <?php

  class Curso extends Conectar{ // declaro mi programa
  //***** FUNCION PARA MOSTRAR LOS PROGRAMAS 
       public function get_Curso(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from curso;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

         public function get_Curso_val(){
        $conectar=parent::conexion();
        parent::set_names();
         $sql="SELECT curso.id, programa.nombre as mario,docente.nombre as nomprofe, docente.apellido as apeprofe, curso.materia  FROM programa, curso,docente WHERE programa.id=curso.id_Programa && docente.id=curso.id_docente;";

        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
      
// *** FUNCION PARA AGREGAR UN PROGRAMA 
  public function agregar_curso(){
        $conectar=parent::conexion();
        parent::set_names();
         if(empty($_POST["id_programa"]) or empty($_POST["nombre"]) or empty($_POST["id_docente"])){
           header("Location:".Conectar::ruta()."admin/cursos/crear.php?m=1");
           exit();
        }
        $contra='activo';
         $conectar=parent::conexion();
        $sql="insert into curso values(null,?,?,?,?,now());";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $_POST["id_programa"]);
        $sql->bindValue(2, $_POST["nombre"]);
        $sql->bindValue(3, $_POST["id_docente"]);
        $sql->bindValue(4, $contra);
        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        
           header("Location:".Conectar::ruta()."admin/cursos/index.php?m=2");
        
      }
                 ///ELIMINAR USUARIO
       public function eliminar_Curso($id_usuario){  // paso el id por parametro
          $conectar=parent::conexion();
          parent::set_names();
          $sql="delete from curso where id=?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$id_usuario);
          $sql->execute();
          return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
      }


          //Funcion para pasar el id del ususario que se va a editar
      public function get_curso_por_id($id_usuario){
        $conectar=parent::conexion();// hacemos nuestra conexion
        parent::set_names(); // este es para no tener probllemas con las tilde 
        $sql="select * from curso where id =?";
        $sql=$conectar->prepare($sql); //HACE UNA CONSULTA EN TODOS LOS CAMPOS
        $sql->bindValue(1,$id_usuario);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }  
     }

     ?>