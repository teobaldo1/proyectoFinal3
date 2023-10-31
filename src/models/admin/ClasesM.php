<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

class UsuariosC
{


     public static function all()
     {
          $queryDataBase = "select cm.id as clase_maestro_id, u.nombre as nombre_maestro,c.materias as clase,cm.maestro_id as idDeMaestro from usuarios u  inner join clases_maestros cm  on u.id = cm.maestro_id inner join clases c  on cm.clase_id = c.id  where u.rol_id= 2";

          $res =  Database::query($queryDataBase);
          $data = $res->fetchAll(PDO::FETCH_ASSOC);

          
                 return $data;
     }
     
     public static function insertC($dataC)
     {
          extract($dataC);
           
          $queryinsert = "insert into clases ( materias) values ('$nombre')";
          $resp =  Database::query($queryinsert);
          
          $queryGet = "select id from clases where materias = '$nombre'";
          $respData =  Database::query($queryGet);
          $data = $respData->fetchAll(PDO::FETCH_ASSOC);
         
          $dataId= $data[0]["id"];
          $queryinsert1 = "insert into clases_maestros ( maestro_id, clase_id) values ('$clase','$dataId')";
          $resp =  Database::query($queryinsert1);

          if ($resp) {

               return true;
          }
          
          
     }

     public static function deleteC($id)
     {
          $queryDeleted = "delete from clases_maestros where id = $id";

          $resp =  Database::query($queryDeleted);
          if ($resp) {

               return true;
          }
     }
     
     public static function find($id)
     {
          $queryGetDataId = "select cm.id as clase_maestro_id, u.nombre as nombre_maestro,c.materias as clase  from usuarios u  inner join clases_maestros cm  on u.id = cm.maestro_id inner join clases c  on cm.clase_id = c.id  where cm.id= '$id'";
          $resp =  Database::query($queryGetDataId);
          $dataId = $resp->fetch(PDO::FETCH_ASSOC);
          return $dataId;
     }


     public static function update($dataC)

     {
          

          $maestro=$dataC["nombre_maestro"];
          $idClase=$dataC["clase_maestro_id"];
          $materia=$dataC["editClass"];

       
          
          $queryupdate = "update clases set materias = '$materia' Where id = '$idClase' ";
          $resp =  Database::query($queryupdate);

          $maestro=$dataC["maestro"];

          $queryupdate1 = "update clases_maestros set maestro_id = '$maestro' Where clase_id = '$idClase' ";
          $resp =  Database::query($queryupdate1);

          if ($resp) {
               
               return true;
          }
     }
}