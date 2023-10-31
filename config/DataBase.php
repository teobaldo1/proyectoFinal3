<?php

class Database{


   public static function  connect()
   {
   
     $dns= "mysql:host=localhost;dbname=university";
     $opcion= [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION];

     $pdo= new PDO($dns, "root", "", $opcion);

     return $pdo;

   } 

   public static function query($string)
   {
     $pdo= Database::connect();
     $res=$pdo->query($string);

     return $res;

   }

}