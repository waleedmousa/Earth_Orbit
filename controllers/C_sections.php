<h1>sections</h1>

<h2><a href="?page=sections&action=add">Add New Section</a></h2>
<?php

if($_POST OR @$_GET['action'])
    
{
    if(isset($_GET['action']) AND $_GET['action']== "add")
    {
        include 'views/AddSections.php';
        
    }
  
    if(isset($_POST['submit']) AND ($_POST['submit']) == "Add")
    {
    //`section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `desction_date`, `username`
        $NewSEData['section_name']       = $_POST['section_name'];
        $NewSEData['section_status']     = $_POST['section_status'];
        $NewSEData['section_location']   = $_POST['section_location'];
        $NewSEData['section_desc']       = $_POST['section_desc'];
        $NewSEData['username']           = $_SESSION['username'];
        
        $tabelname="sections";
        
        try {
            
            include 'models/Demo.php';
            include 'models/add.php';
            
            $AddNewSection = new add($NewSEData, $tabelname);
            
            if($AddNewSection)
            {
                echo '<script type="text/javascript">alert("The New Section Added Success");history.back();</script>';
                
            }
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
            
    }
    
    //----Delete------//
     if(isset($_GET['action']) AND $_GET['action']== "Delete")
    {
         try {
             
         include 'models/Demo.php';
         include 'models/Delete.php';
         $tabelname ="sections";
         
         $id=$_GET['id'];
         
         $DeleteSec = new Delete($tabelname);
         $DeleteSec->deleteRecord($id);
         
         
        
         } catch (Exception $exc) {
             echo $exc->getMessage();
         }

    }
  
    /////////---------- EDIT -------------//////////////
    
         if(isset($_GET['action']) AND $_GET['action'] == "Edit")
         {
             
             include 'models/Demo.php';
             include 'models/display.php';
             $tabelname ="sections";
             
             $id =$_GET["id"];
             
             $editsec = new display($tabelname);
             $recSecData = $editsec->GetRecordByID($id);
            
             
             

             include 'views/EditSection.php';
         }
    
}else
{
    try {
         include 'models/Demo.php';
         include 'models/display.php';
         $tablename = "sections";
         
         $displaySec = new display($tablename);
         
          $SecDataDisplay = $displaySec->GetAllRec();
          
         
         
     } catch (Exception $exc) {
         echo $exc->getMessage();
     }
    include 'views/SectionsDisplay.php';
}



?>
