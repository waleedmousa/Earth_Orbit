 <?php


class login {
   
    private $username;
    private $password;
    private $cxn;    // database object
    
    function __construct($username,$password)
    {
        //set data
        $this->setData($username, $password);
        
        //connect to db
        $this->connecttodb();
       
        //get data7
        $this->getData();
        
    }
    
    private function setData($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        
    }
    private function connecttodb()
    {
        include 'Database.php';;
    $var =  "./include/vars.php";
    $this->cxn= new Database($var);
        
    }
    
    /*private function getData()
    {
        $query= "select * from 'users' where 'username' = '$this->username' AND 'password' = '$this->password'";
        $sql = mysql_query($query);
        
       if (mysql_num_rows($sql)>0){
           return true;
       }else{
           throw new Exception ("username or password not found");
           
       }
    }*/
    function getData()
{
$query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";
$sql = mysql_query($query);

if(mysql_num_rows($sql)>0)
{
return TRUE;
}
else
{
throw new Exception("Username or password is invalid, please try again.");
}

}
    function close()
    {
        $this->cxn->close();
        
    }
}
