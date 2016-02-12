<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct($filename) // function to call the vars file of the server info
    {
        if (is_file($filename)) {
            include $filename;
        } else
        {
            throw new Exception("Errorr");
        } 

        $this->host =$host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
       


    }
    private function connect()
    {
        //connect to the server
        if (!mysql_connect($this->host, $this->user, $this->password)) {
            throw new Exception("error: not connected to the server");
        } else {
            echo 'ok';
        }

        //select the database
        if (!mysql_select_db($this->database)) {
            throw new Exception("Error:database is not selected");
        } else {
            echo 'foll';
        }
    }
    
    function close()
    {
    mysql_close();
    }
}
