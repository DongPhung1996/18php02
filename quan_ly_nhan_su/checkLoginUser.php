<?php
require_once 'config/database.php';
class User extends ConnectDB{

    public function listUser() {
        $sql = "SELECT * FROM account";
        return  mysqli_query($this->conn, $sql);
    }

    public function register($username, $password) {  
        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'"; 
        $result =  mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0 ) {
        	return true;
        }
        return false;
    }

    public function checkID($username, $password) {
        $sql = "SELECT id FROM account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function checkUserName($id) {
        $sql = "SELECT username FROM account WHERE id = '$id' ";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
}

?>