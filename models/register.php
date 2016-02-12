<?php


/**
 * Description of register
 *
 * @author waleeed
 */
class register {
    //`id`, `name`, `username`, `password`, `email`
    private $name;
    private $email;
    private $username;
    private $password;   
    private $cxn; //database object
    
    function __construct($data) 
    {
        //-----setdata-----///
        if (is_array($data))
    {
            $this->setData($data);
    }  else 
        {
        throw new Exception("Error:data must be in array");
        }
    //--------Connect-----------///
    $this->connecttodb();
    //---------insert----------///////    
    $this->registerusers();
    }
    private function setData($data)
    {
        $this->name=$data['name'];
        $this->username=$data['username'];
        $this->password=$data['password'];
        $this->email=$data['email'];
        
    }
      private function connecttodb()
    {
        include 'Database.php';;
    $var =  "./include/vars.php";
    $this->cxn= new Database($var);
        
    }
    function registerusers()
    {
        $query="INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES ('','$this->name','$this->username','$this->password','$this->email')" ;
        $sql=  mysql_query($query);
        if($sql)  echo 'Registeration Success';
           else throw new Exception('registeration error');
           
    }
    
    function close()
    {
        
        $this->cxn->close();
        
    }
    
    
}
