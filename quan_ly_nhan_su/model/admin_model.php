<?php 
require_once './config/database.php';
class AdminModel extends ConnectDB{
	//Function check email
	function is_email($str) {
	    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}

	//Function account
	function addAccount($username, $email ,$password, $role) {
		$sql = "INSERT INTO account(role, username, email,  password) VALUES ('$role', 
		'$username', '$email', '$password')";
		return mysqli_query($this->conn, $sql);
	}
	function editAccount($id, $username, $email, $role) {
		$sql = "UPDATE account SET role = '$role', username = '$username', email = '$email' WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}
	function listAccount() {
		$sql = "SELECT * FROM account";
		return mysqli_query($this->conn, $sql);
	}
	function getInfoAccountById($id) {
		$sql = "SELECT * FROM account WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}
	function deleteAccountById($id) {
		$sql = "DELETE FROM account WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	function verifyDataAccount($username, $email) {	 
	 	$sql = "SELECT * FROM account WHERE username = '$username' or email = '$email'";  
		return  mysqli_query($this->conn, $sql);
	}

	function verifyDataInformation($dataPost = [] , $field) {
		 
		//verify with type table account
		$sql = 'SELECT * FROM infomationn_personal WHERE ';
		
		switch ($field) {
			case "id_card":
				$sql .= 'id_card ='.$dataPost['id_card'];
				break;

			case "phone" : 
				$sql .= 'phone ='.$dataPost['phone'];
				break;
 
			case "email" : 
				$sql .= 'email ='.$dataPost['email'];
				break;

			case "passport_no" : 
				$sql .= 'passport_no ='.$dataPost['passport_no'];
				break;

			case "number_of_insurrance" : 
				$sql .= 'number_of_insurrance ='.$dataPost['number_of_insurrance'];
				break;

		 	default : 
		 		$sql .= 'bank_account ='.$dataPost['bank_account'];
		 		break ;
		}

		$result = mysqli_query($this->conn, $sql);

	 	$rowCount[]=mysqli_num_rows($result);
		if ($rowCount> 0) {
			return TRUE;
		} 
		return FALSE;
	}
	//End function account


	//Function information user
	function listInfoUser() {
		$sql = "SELECT * FROM infomationn_personal";
		return mysqli_query($this->conn, $sql);
	}
	function getInfoUserById($id) {
		$sql = "SELECT * FROM infomationn_personal WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}
	function editInfoUser($id, $name, $gender, $date_of_birth, $id_card, $date_range, $phone, $email, $skype, $address, $nationality, $maried, $passport_no, $passport_date, $passport_where, $number_of_insurrance, $date_range_insurrance, $issued_by, $bank_account) {
		$sql = "UPDATE infomationn_personal SET name = '$name', gender = '$gender', date_of_birth = '$date_of_birth', id_card = '$id_card', date_range = '$date_range', phone = '$phone', email = '$email', skype = '$skype', address = '$address', nationality = '$nationality', maried = '$maried', passport_no = '$passport_no', passport_date = '$passport_date', passport_where = '$passport_where', number_of_insurrance = '$number_of_insurrance', date_range_insurrance = '$date_range_insurrance', issued_by = '$issued_by', bank_account = '$bank_account'  WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}
	function addInfoUser($name, $gender, $date_of_birth, $id_card, $date_range, $phone, $email, $skype, $address, $nationality, $maried, $passport_no, $passport_date, $passport_where, $number_of_insurrance, $date_range_insurrance, $issued_by, $bank_account){
		$sql = "INSERT INTO infomationn_personal( name, gender, date_of_birth, id_card, date_range, phone, email, skype, address, nationality, maried, passport_no, passport_date, passport_where, number_of_insurrance, date_range_insurrance, issued_by, bank_account) VALUES ('$name', '$gender', '$date_of_birth', '$id_card', '$date_range','$phone', '$email', '$skype', '$address', '$nationality', '$maried', '$passport_no', '$passport_date', '$passport_where', '$number_of_insurrance', '$date_range_insurrance', '$issued_by', '$bank_account')";
		return mysqli_query($this->conn, $sql);

	}
	function deleteInfoUserById($id) {
		$sql = "DELETE FROM infomationn_personal WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//End function information user

	//Function insurrance
	function listInsurrance() {
		$sql = "SELECT * FROM insurrance_book";
		return mysqli_query($this->conn, $sql);
	}
	function deleteInsurranceById($id) {
		$sql = "DELETE FROM insurrance_book WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//End function insurance

	//Function contract
	function listContract() {
		$sql = "SELECT * FROM labol_contract";
		return mysqli_query($this->conn, $sql);
	}
	function deleteContractById($id) {
		$sql = "DELETE FROM labol_contract WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//End function contract

	//Function experience
	function listExperience() {
		$sql = "SELECT * FROM experience";
		return mysqli_query($this->conn, $sql);
	}
	function deleteExperienceById($id) {
		$sql = "DELETE FROM experience WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//End function experience

	//Function skills
	function listSkill() {
		$sql = "SELECT * FROM skill";
		return mysqli_query($this->conn, $sql);
	}
	function deleteSkillById($id) {
		$sql = "DELETE FROM skill WHERE id=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//End function skills

}

?>