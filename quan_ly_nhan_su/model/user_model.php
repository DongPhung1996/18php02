<?php 
require_once './config/database.php';
class UserModel extends ConnectDB{
	//Function check email
	function is_email($str) {
	    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}

	//Function information user
	function listInfoUser() {
		$sql = "SELECT * FROM infomationn_personal";
		return mysqli_query($this->conn, $sql);
	}

	function listInfoUserById($id) {
		$sql = "SELECT * FROM infomationn_personal WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
		// $result = $this->conn->query($sql);
  //   	return $result->fetch_assoc(); 
	}

	function getInfoUserById($id) {
		$sql = "SELECT * FROM infomationn_personal WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}

	function editInfoUser($id, $id_account, $name, $gender, $date_of_birth, $id_card, $date_range, $phone, $email, $skype, $address, $nationality, $maried, $passport_no, $passport_date, $passport_where, $number_of_insurrance, $date_range_insurrance, $issued_by, $bank_account) {
		$sql = "UPDATE infomationn_personal 
				SET name = '$name',
					gender = '$gender', 
					date_of_birth = '$date_of_birth', 
					id_card = '$id_card', 
					date_range = '$date_range', 
					phone = '$phone', 
					email = '$email', 
					skype = '$skype', 
					address = '$address', 
					nationality = '$nationality', 
					maried = '$maried', 
					passport_no = '$passport_no', 
					passport_date = '$passport_date', 
					passport_where = '$passport_where', 
					number_of_insurrance = '$number_of_insurrance', 
					date_range_insurrance = '$date_range_insurrance', 
					issued_by = '$issued_by', 
					bank_account = '$bank_account'  
				WHERE id = $id";
				
		return mysqli_query($this->conn, $sql);
	}
	//End function information user

	//Function insurrance
	function listInsurranceById($id) {
		$sql = "SELECT * FROM insurrance_book WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}

	function getInsurranceById($id) {
		$sql = "SELECT * FROM insurrance_book WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}

	function editInsurrance($id, $name, $date_of_birth, $gender, $check_insurrance_book, $place_of_birth_certificate, $registed_residence_address) {
		$sql = "UPDATE insurrance_book
				SET name = '$name',
					date_of_birth = '$date_of_birth',
					gender = '$gender',
					check_insurrance_book = $check_insurrance_book,
					place_of_birth_certificate = '$place_of_birth_certificate',
					registed_residence_address = '$registed_residence_address'		
				WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}

	//End function insurrance

	//functionn infomation residence
	function listResidenceById($id) {
		$sql = "SELECT * FROM information_residence WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//end function information residence

	//functionn register clinic
	function listClinicById($id) {
		$sql = "SELECT * FROM register_for_the_clinic WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}
	//end function register clinic

	//Function Contract
	function listContract() {
		$sql = "SELECT * FROM labol_contract";
		return mysqli_query($this->conn, $sql);
	}

	function listContractById($id) {
		$sql = "SELECT * FROM labol_contract WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}

	function getContractById($id) {
		$sql = "SELECT * FROM labol_contract WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}

	function editContract($id, $name, $part, $type_of_contract, $role, $employed_code, $rank, $level, $salary, $date_start_contract, $date_end_contract, $bonus) {
		$sql = "UPDATE labol_contract 
				SET name = '$name', 
					part = '$part', 
					type_of_contract = '$type_of_contract', 
					role = '$role', 
					employed_code = '$employed_code', 
					rank = '$rank', 
					level = '$level', 
					salary = '$salary', 
					date_start_contract = '$date_start_contract', 
					date_end_contract = '$date_end_contract', 
					bonus = '$bonus'  
				WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}
	//End function Contract

	//Function Experience
	function listExperience() {
		$sql = "SELECT * FROM experience";
		return mysqli_query($this->conn, $sql);
	}

	function listExperienceById($id) {
		$sql = "SELECT * FROM experience WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}

	function getExperienceById($id) {
		$sql = "SELECT * FROM experience WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}

	function editExperience($id, $name, $address_work, $time_work, $language_work, $DB, $technology) {
		$sql = "UPDATE experience 
				SET name = '$name', 
					address_work = '$address_work', 
					time_work = '$time_work', 
					language_work = '$language_work', 
					DB = '$DB', 
					technology = '$technology'
				WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}

	//End function Experience

	//Function skill
	function listSkill() {
		$sql = "SELECT * FROM skill";
		return mysqli_query($this->conn, $sql);
	}

	function listSkillById($id) {
		$sql = "SELECT * FROM skill WHERE id_account=".$id;
		return mysqli_query($this->conn, $sql);
	}

	function getSkillById($id) {
		$sql = "SELECT * FROM skill WHERE id=".$id;
		$result = $this->conn->query($sql);
    	return $result->fetch_assoc(); 
	}

	function editSkill($id, $name, $soft_skill, $language_work, $level_language, $DB, $level_DB, $technology, $level_technology) {
		$sql = "UPDATE skill 
				SET name = '$name', 
					soft_skill = '$soft_skill', 
					language_work = '$language_work', 
					level_language = '$level_language',
					DB = '$DB', 
					level_DB = '$level_DB',
					technology = '$technology',
					level_technology = '$level_technology'
				WHERE id = $id";
		return mysqli_query($this->conn, $sql);
	}
	//End function skill

	//Function Fort
	function listFor() {
		$sql = "SELECT * FROM fort";
		return mysqli_query($this->conn, $sql);
	}

	function addFort($name, $type_of_contract ,$seniority, $check_asset, $date_off, $reason_off, $check_isurrance) {
		$sql = "INSERT INTO fort(name, type_of_contract, seniority,  check_asset, date_off, reason_off, check_isurrance) VALUES ('$name', 
		'$type_of_contract', '$seniority', '$check_asset', '$date_off', '$reason_off', '$check_isurrance')";
		return mysqli_query($this->conn, $sql);
	}
	//End function fort
}

?>