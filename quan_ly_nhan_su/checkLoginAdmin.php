<?php
require_once 'config/database.php';
class Admin extends ConnectDB{

    public function listAdmin() {
        $sql = "SELECT * FROM admin";
        return  mysqli_query($this->conn, $sql);
    }

    public function register($username, $password) {  
        $sql = "SELECT * FROM account WHERE username ='".$username."' AND password='".$password."' LIMIT 1"; 
        return  mysqli_query($this->conn, $sql);
    }
}

?>