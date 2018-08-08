<?php  
require_once './config/database.php';
class IndexModel extends ConnectDB{
	function listUser() {
		$sql = "SELECT * FROM infomationn_personal";
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
		$sql = "SELECT * FROM skill";
		return mysqli_query($this->conn, $sql);
	}

}
?>
