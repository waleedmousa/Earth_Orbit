<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Delete
 *
 * @author waleeed
 */
class Delete extends Demo {
    private $tablename;
    
    public function __construct($tablename) {
        $this->tablename = $tablename;
        $this->connecttodb();
        
        
    }
    function deleteRecord($id)
    
    {
        $id =  intval($id) ;
    $query="DELETE FROM `$this->tablename` WHERE `id` = '$id'" ;
    if (!$sql=mysql_query($query))
    {
        throw new Exception ("deleting  Error");
    }else
    {
        return TRUE;
    }
    
    
    }
}
