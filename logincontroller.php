<?php

/* 
 * logincontroller
 */
// ------- LOGIN ---------//
if($_POST){
    if(isset($_POST['submit']) AND ($_POST['submit']) === "Login")
    {
     
      $username = ($_POST["username"]);
      $password = ($_POST["password"]);
      
      try 
      {
          include './models/login.php';
          $login = new login($username, $password);
          
          if($login ==TRUE)
          {
              session_start();
              $_SESSION['username']=$username;
              header('Location:index.php');
              
          }
      } 
      catch (Exception $exc)
      {
          echo $exc->getMessage();
      }
      }
}
//`id`, `name`, `username`, `password`, `email`

// ----------- Registeration --------------------//
 if(isset($_POST['submit']) AND ($_POST['submit']) === "register")
 {
     $data['name']=$_POST['name'];
     $data['username']=$_POST['username'];
     $data['password']=$_POST['password'];
     $data['email']=$_POST['email'];
     
    
     
      try 
      {
          include './models/register.php';
          $register = new register($data);
          
      } 
      catch (Exception $exc)
      {
          echo $exc->getMessage();
      }
     
 }
 else 
{
     include './login.php';   
     
}

?>

