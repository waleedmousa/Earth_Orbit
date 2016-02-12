<?php

/**
 * Description of mainsettings
 *
 * @author waleeed
 
class mainsettings {

    //`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss`
    /*private $site_name;
    private $site_url;
    private $site_desc;
    private $site_email;  
    private $site_tags;
    private $site_homepanel;
    private $fb;
    private $tw;
    private $yt;
    private $rss;
    private $cxn; //database object
    private $data;
    private $tablename;
    
            function __construct($data,$tablename) 
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
    //--------Connect-----------///
   // $this->connecttodb();
    //---------insert----------///////    
    $this->InsertData();
    }
    private function setData($data)
    {
       /* $this->site_name=$data['site_name'];
        $this->site_url=$data['site_url'];
        $this->site_desc=$data['password'];
        $this->site_homepanel=$data['site_homepanel'];
        $this->site_email=$data['site_email'];
        $this->site_tags=$data['site_tags'];
        $this->fb=$data['fb'];
        $this->tw=$data['tw'];
        $this->yt=$data['yt'];
        $this->rss=$data['rss'];
        
    }*/
     /* private function connecttodb()
    {
        include 'Database.php';;
    $var =  "../include/vars.php";
    $this->cxn= new Database($var);
        
    }
    function InsertData()
    {
        
        foreach ($this->data as $key => $value) 
        {
            $keys[]=$key;
            $value[]=$value;
            
        }
        $tblkeys=implode($keys, ",");
        $tblevalues= '"' .implode($value, '","').'"';
        
        $query="INSERT INTO $this->tablename ($tblkeys) VALUES ($tblevalues)";
        
       if  ($sql=  mysql_query($query))
               return TRUE;
       else {
           throw new Exception("insertion error");
           return FALSE;
       }
        
        }
        //$query="INSERT INTO `main_settings` (`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss`) VALUES ('$this->site_name','$this->site_url','$this->site_desc','$this->site_email','$this->site_homepanel'.'$this->site_tags'.'$this->fb','$this->tw','$this->yt','$this->rss')" ;
       // $sql=  mysql_query($query);
       // if($sql)  echo 'Insertion Success';
        //   else throw new Exception('insertion error');
           
    }
    
    function close()
    {
        
        $this->cxn->close();
        
    }
    
    
}

?>
}
