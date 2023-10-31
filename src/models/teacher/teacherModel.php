<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

 
class UsuariosTeacher
{


     public static function all($id)
          {
          
          
          $queryDataBase = "select * from usuarios u inner join clases_maestros cm on u.id = cm.maestro_id inner join clases c on c.id = cm.clase_id inner join alumnos_clases ac on ac.clase_id = c.id inner join usuarios u2 on u2.id = ac.alumno_id  where u.id  = '$id'";

          $res =  Database::query($queryDataBase);
          $data = $res->fetchAll(PDO::FETCH_ASSOC);

          return $data;
     }
     
     public static function find($id)
     {
          $queryGetDataId = "select * from usuarios where id = $id";

          $resp =  Database::query($queryGetDataId);

          $dataId = $resp->fetch(PDO::FETCH_ASSOC);

          return $dataId;
     }

     public static function update($dataRol)
     {
          $id = $dataRol["id"];
          $dni = $dataRol["dni"];
          $correo = $dataRol["correo"];
          $nombre = $dataRol["nombre"];
          $direccion = $dataRol["direccion"];
          $fechaN = $dataRol["fNacimiento"];
          $rol = $dataRol["rolUser"];

        
          $queryupdate = "update usuarios set dni='$dni', correo='$correo', nombre='$nombre', direccion='$direccion', fechaNacimiento='$fechaN' where id = $id";

          $resp =  Database::query($queryupdate);
          if ($resp) {

               return true;
          }
     }
}
