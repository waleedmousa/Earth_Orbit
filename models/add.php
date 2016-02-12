<?php


class add extends Demo {
    private $data;
    private $tablename;
    private $cxn;
    
    public function __construct($data,$tablename) 
    {
        //-----setdata-----///
        if (is_array($data))
    {
           // $this->setData($data);
           $this->data=$data;
           $this->tablename=$tablename;
           
    }  else 
        {
        throw new Exception("Error:data must be in array");
        }
    $this->connecttodb();
    //---------insert----------///////    
    $this->InsertData();
    ////////---------close connection-------//////////
    $this->close();
    }
  function InsertData()
    {
        
        foreach ($this->data as $key => $value) 
        {
            $values[]=$value;
            $keys[]=$key;
           // $value[]=$value;
            
        }
        $tblkeys=implode($keys, ",");
        $tblevalues= '"'.implode($values,'","').'"';
        
        $query="INSERT INTO `$this->tablename` ($tblkeys) VALUES ($tblevalues)";
        
       if  ($sql=  mysql_query($query))
               return TRUE;
       else {
           throw new Exception("insertion error");
           return FALSE;
       }
    }
}