<?php


    if(isset($_POST['submit']) && $_POST['submit'] == "update")
 {
     $mainsettings['site_name']=$_POST['site_name'];
     $mainsettings['site_desc']=$_POST['site_desc'];
     $mainsettings['site_url']=$_POST['site_url'];
     $mainsettings['site_email']=$_POST['site_email'];
     $mainsettings['site_homepanel']=$_POST['site_homepanel'];
     $mainsettings['site_tags']=$_POST['site_tags'];
     $mainsettings['fb']=$_POST['fb'];
     $mainsettings['tw']=$_POST['tw'];
     $mainsettings['yt']=$_POST['yt'];
     $mainsettings['rss']=$_POST['rss'];
     $mainsettings['username']=$_POST['username'];
     
     
      try 
      {
          include 'models/Demo.php';
          include 'models/add.php';
          $AddmainSettings = new add($mainsettings,"main_settings");
          
          if ($AddmainSettings == TRUE)
          {
              echo 'Added Successfuly';
          }
          
      } 
      catch (Exception $exc)
      {
          echo $exc->getMessage();
      }
  
 }
 else 
{
    try {
         include 'models/Demo.php';
         include 'models/display.php';
         
         $data = new display("main_settings");
         
         $displaydata = $data->GetLastRecordDesC();
         
     } catch (Exception $exc) {
         echo $exc->getMessage();
     }

     include 'views/v_mainsettings.php';   
     
}

    
?>
