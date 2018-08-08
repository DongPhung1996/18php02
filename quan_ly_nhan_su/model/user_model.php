<?php 
require_once './config/database.php';
class UserModel extends ConnectDB{
	function addUser($username, $password, $role) {
		$sql = "INSERT INTO users(role, username, password) VALUES ('$role', 
		'$username', '$password')";
		return mysqli_query($this->conn, $sql);
	}
	function listUser() {
		$sql = "SELECT * FROM information_personal";
		return mysqli_query($this->conn, $sql);
	}
	function listInsurrance() {
		$sql = "SELECT * FROM insurrance_book";
		return mysqli_query($this->conn, $sql);
	}

	function listContract() {
		$sql = "SELECT * FROM labol_contract";
		return mysqli_query($this->conn, $sql);
	}

	function listExperience() {
		$sql = "SELECT * FROM experience";
		return mysqli_query($this->conn, $sql);
	}

	function listSkill() {
		$sql = "SELECT * FROM skills";
		return mysqli_query($this->conn, $sql);
	}
}

?>