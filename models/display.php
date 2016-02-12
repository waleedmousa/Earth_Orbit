<?php

// displaying data in the form
class display extends Demo {
    
    private $tablename;
    
    public function __construct($tablename) 
    {
                
    $this->tablename=$tablename;
   

    $this->connecttodb();
    //---------insert----------///////    
   // $this->getData();
    ////////---------close connection-------//////////
 
    }
    
    function GetAllRec()
    {
        $query = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC";
        if(!$sql= mysql_query($query))
        {
            
            throw new Exception ("Error Couldn't get the query");
           
        }else
        {
             $num = mysql_num_rows($sql);
            if($num > 0) 
            {
                for ($i = 0; $i<$num ; $i++) 
                {
                    $data[$i] = mysql_fetch_array($sql);
                    
                }
            }
        }
        return $data;
    }
            
    function GetLastRecordDesC()
    {
        $query="SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1"; 
          // DESC = A3la Value , Limit 1 = only 1 value is required
        if(!$sql= mysql_query($query))
        {
            
            throw new Exception ("Error Couldn't get the query");
           
        }else
        {
             $num = mysql_num_rows($sql);
            while ($num >0)
            {
                $data = mysql_fetch_array($sql);
                $num--;
            } 
        }
        return $data;
    }
    function GetRecordByID($id)
    
    {
        $id =  intval($id);
        
       // echo $query="SELECT * FROM `$this->tablename` WHERE `id` = '$id'";
        $query = "SELECT * FROM `$this->tablename` WHERE `id` = $id";
        if(!$sql= mysql_query($query))
        {
            
            throw new Exception ("Error wITH the query");
           
        }else
        {
             $num = mysql_num_rows($sql);
            while ($num > 0)
            {
                $data = mysql_fetch_array($sql);
                $num--;
                
          
            } 
        }
        return $data;
    
    }
      
}   