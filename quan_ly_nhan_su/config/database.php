<?php
class ConnectDB
{
    public $conn;
    
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'quan_ly_nhan_su');
        mysqli_set_charset($this->conn,"utf8");
        
        return $this->conn;
    }
}
