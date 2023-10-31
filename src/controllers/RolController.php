<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/admin/modelRol.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Roles.php");







class RolController
{
   
   
 
  public function readR()
  {
    $usuariosR = UsuariosRol::all();
   
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Attributions/readRol.php";

  }
  public function editR($id)
  {
    $dataRoles=Roles::all();
    $usuarioR=UsuariosRol::find($id);
    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Attributions/editRol.php";
  
  } 
  public function updateR($data)
  {
    $dataR= UsuariosRol::updateR($data);
  
    if ($dataR) {
      header("Location:/readRol");
     }   
  
  } 




}