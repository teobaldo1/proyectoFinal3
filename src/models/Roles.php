<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/Database.php");

class Roles
{

     
     public static function all()
     {
      $queryDataBase= "select * from roles";
    
      $res=  Database::query($queryDataBase);
      $data= $res->fetchAll(PDO::FETCH_ASSOC);

      return $data;
     
     }
    
  
     
     

}