<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Roles.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/admin/Students.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/log.php");


class UserController
{

  public function index()
  {
     
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/login.php";
  } 

  public function login($data)
  {
   $user= Usuarios1::log($data["correo"],$data["contrasena"]);
    
   if ($user) {
    session_start();
    $_SESSION["admin"]=$user;
    header("Location:/dashboard");

    }else{
    
    echo "Usuario no existe";

   }
  }
   
   public function dashboard()
  {    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/dashboard.php";
  } 
  public function home()
  {    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/home.php";
  } 


  public function readE()
  {
    $usuarios = Usuarios::all();
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Students/read.php";

  }
  public function create()
  {

    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Students/create.php";
  }


  public function insert($data)
  {
    $newdata = Usuarios::insert($data);
    if ($newdata) {
     header("Location:/readStudents");
    }
  }

  public function delete($id)
  {
    $deleted = Usuarios::delete($id);  
   if ($deleted) {
    header("Location:/readStudents");
   }

  } 
  public function edit($id)
  {
    $dataRoles=Roles::all();
    $usuario=Usuarios::find($id);
    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Students/edit.php";
  
  } 
  public function update($dataRol)
  {
    $dataRoles= Usuarios::update($dataRol);
    if ($dataRoles) {
      header("Location:/readStudents");
     }   
  
  } 




}