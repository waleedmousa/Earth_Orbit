<?php

/*
Main Class Will Include The Main Functions
 */

class Demo {

    private $cxn;
    
   

    protected function connecttodb()
    {
    include 'models/Database.php';
    $var =  "include/vars.php";
    $this->cxn= new Database($var);
        
    }
     function close()
    {
        
        $this->cxn->close();
        
    }
}
