<?php 
require_once './model/user_model.php';
class UserController {
	function handleRequest() {
		$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
		$action = isset($_GET['action']) ? $_GET['action'] : 'list_info_user';
		if ($controller == 'user') {
			switch ($action) {
				//start process information user	
				case 'list_info_user':
					$userModel  = new UserModel();
					$data = $userModel->listInfoUserById($_SESSION['id']);
					include 'views/user/information_user/list_info.php';
					break;												
				case 'edit_info_user':
					$userModel  = new UserModel();
					$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data = $userModel->getInfoUserById($id);
					if (!$data) {
						echo 'No connection Database!';exit();
					}		
					if (isset($_POST['edit_info_user'])) {	
						$error      = array();						
						$checkEmail = $userModel->is_email($_POST['email']);
						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$data['name']  = '';
							$error['name'] = "Bạn chưa nhập tên!";
						}

						//id card
						if (isset($_POST['id_card']) && $_POST['id_card'] == '') {
							$data['id_card']  = '';
							$error['id_card'] = "Bạn chưa nhập số cmnd!";
						} else {

							// foreach ($data2 as $list) {
							// 	if ($_POST['id_card'] == $list['id_card'] && $id != $list['id']) {
							// 		$data['id_card']  = $list['id_card'];
							// 		$error['id_card'] = "Số cmnd đã tồn tại!";
							// 	}
							// }
						}
						//phone
						if (isset($_POST['phone']) && $_POST['phone'] == '') {
							$data['phone']  = '';
							$error['phone'] = "Bạn chưa nhập số điện thoại!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['phone'] == $list['phone'] && $id != $list['id']) {
									$data['phone']  = $list['phone'];
									$error['phone'] = "Số điện thoại đã tồn tại!";
								}
							}
						}
						//email
						if (isset($_POST['email']) && $_POST['email'] == '') {
							$data['email']  = '';
							$error['email'] = "Bạn chưa nhập email!";
						} elseif (!$checkEmail) {
							$data['email']  = $_POST['email'];
							$error['email'] = "Bạn nhập email không đúng!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['email'] == $list['email'] && $id != $list['id']) {
									$data['email']  = $list['email'];
									$error['email'] = "Email đã tồn tại!";
								}
							}	
						}
						//skype
						if (isset($_POST['skype']) && $_POST['skype'] == '') {
							$data['skype']  = '';
							$error['skype'] = "Bạn chưa nhập skype!";
						}
						//address
						if (isset($_POST['address']) && $_POST['address'] == '') {
							$data['address']  = '';
							$error['address'] = "Bạn chưa nhập địa chỉ!";
						}
						//nationality
						if (isset($_POST['nationality']) && $_POST['nationality'] == '') {
							$data['nationality']  = '';
							$error['nationality'] = "Bạn chưa nhập quốc tịch!";
						}
						//passport no
						if (isset($_POST['passport_no']) && $_POST['passport_no'] == '') {
							$error['passport_no'] = "Bạn chưa nhập số passport!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['passport_no'] == $list['passport_no'] && $id != $list['id']) {
									$data['passport_no']  = $list['passport_no'];
									$error['passport_no'] = "Số passport đã tồn tại!";
								}
							}
						}
						//passport where
						if (isset($_POST['passport_where']) && $_POST['passport_where'] == '') {
							$data['passport_where']  = '';
							$error['passport_where'] = "Bạn chưa nhập nơi cấp passport!";
						} 
						//number_of_insurrance
						if (isset($_POST['number_of_insurrance']) && $_POST['number_of_insurrance'] == '') {
							$data['number_of_insurrance']  = '';
 							$error['number_of_insurrance'] = "Bạn chưa nhập số sổ bảo hiểm!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['number_of_insurrance'] == $list['number_of_insurrance'] && $id != $list['id']) {
									$data['number_of_insurrance']  = $list['number_of_insurrance'];
									$error['number_of_insurrance'] = "Số sổ bảo hiểm đã tồn tại!";
								}
							}
						}
						//issued_by
						if (isset($_POST['issued_by']) && $_POST['issued_by'] == '') {
							$data['issued_by']  = '';
							$error['issued_by'] = "Bạn chưa nhập nơi cấp sổ bảo hiểm!";
						}
						//bank_account
						if (isset($_POST['bank_account']) && $_POST['bank_account'] == '') {
							$data['bank_account']  = '';
							$error['bank_account'] = "Bạn chưa nhập số tải khoản!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['bank_account'] == $list['bank_account'] && $id != $list['id']) {
									$data['bank_account']  = $list['bank_account'];
									$error['bank_account'] = "Số tài khoản đã tồn tại!";
								}
							}
						}
						//processing
						if (!$error) {					
							$_SESSION['edit_info_user'] = "Edit infomation personal Success!";
							$result = $userModel->editInfoUser($id, $_SESSION['id'] ,$_POST['name'], $_POST['gender'], $_POST['date_of_birth'], $_POST['id_card'], $_POST['date_range'], $_POST['phone'], $_POST['email'], $_POST['skype'], $_POST['address'], $_POST['nationality'], $_POST['maried'], $_POST['passport_no'], $_POST['passport_date'], $_POST['passport_where'], $_POST['number_of_insurrance'], $_POST['date_range_insurrance'], $_POST['issued_by'], $_POST['bank_account']);
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_info_user');
							}	
						}																		
					}	
					include 'views/user/information_user/edit_info.php';
					break;	
				//end process information user
					
				//start processing insurrance:
				case 'list_insurrance':
					$userModel = new UserModel();
					$data 	   = $userModel->listInsurranceById($_SESSION['id']);
					include 'views/user/insurrance/list_insurrance.php';
					break;
				case 'edit_insurrance':
					$userModel  = new UserModel();
					$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data = $userModel->getInsurranceById($id);	
					if (!$data) {
						echo 'No connection Database!'; exit();
					}
					if (isset($_POST['edit_insurrance'])) {
						$error = array();
						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$data['name']  = '';
							$error['name'] = "Bạn chưa nhập tên!";
						}
						//place_of_birth_certificate
						if (isset($_POST['place_of_birth_certificate']) && $_POST['place_of_birth_certificate'] == '') {
							$data['place_of_birth_certificate']  = '';
							$error['place_of_birth_certificate'] = "Bạn chưa nhập nơi cấp giấy khai sinh!";
						}
						//registed_residence_address
						if (isset($_POST['registed_residence_address']) && $_POST['registed_residence_address'] == '') {
							$data['registed_residence_address']  = '';
							$error['registed_residence_address'] = "Bạn chưa nhập nơi đăng ký hộ khẩu!";
						}

						if (!$error) {					
							$_SESSION['edit_info_user'] = "Edit contract Success!";
							$result = $userModel->editInsurrance($id, $_POST['name'], $_POST['date_of_birth'], $_POST['gender'], $_POST['check_insurrance_book'], $_POST['place_of_birth_certificate'], $_POST['registed_residence_address']);
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_insurrance');
							}	
						}				
					}
					include 'views/user/insurrance/edit_insurrance.php';	
					break;		
				//end process insurrance
				
				//start processing 
				case 'list_info_residence':
					$userModel = new UserModel();
					$data 	   = $userModel->listResidenceById($_SESSION['id']);
					include 'views/user/insurrance/infomation_residence/list_info_residence.php';
					break;	
				//end process 

				//start processing 
				case 'list_clinic':
					$userModel = new UserModel();
					$data 	   = $userModel->listClinicById($_SESSION['id']);
					include 'views/user/insurrance/register_clinic/list_clinic.php';
					break;	
				//end process 	

				//start processing contract	
				case 'list_contract':
					$userModel = new UserModel();
					$data 	   = $userModel->listContractById($_SESSION['id']);
					include 'views/user/contract/contract.php';
					break;
				case 'edit_contract':
					$userModel  = new UserModel();
					$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data = $userModel->getContractById($id);
					if (!$data) {
						echo 'No connection Database!';exit();
					}
					if (isset($_POST['edit_contract'])) {		
						$error      = array();							

						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$data['name']  = '';
							$error['name'] = "Bạn chưa nhập tên!";
						}

						//part
						if (isset($_POST['part']) && $_POST['part'] == '') {
							$data['part']  = '';
							$error['part'] = "Bạn chưa nhập tên!";
						}

						//type_of_contract
						if (isset($_POST['type_of_contract']) && $_POST['type_of_contract'] == '') {
							$data['type_of_contract']  = '';
							$error['type_of_contract'] = "Bạn chưa nhập tên!";
						}

						//role
						if (isset($_POST['role']) && $_POST['role'] == '') {
							$data['role']  = '';
							$error['role'] = "Bạn chưa nhập tên!";
						}

						//employed_code
						if (isset($_POST['employed_code']) && $_POST['employed_code'] == '') {
							$data['employed_code']  = '';
							$error['employed_code'] = "Bạn chưa nhập tên!";
						}

						//rank
						if (isset($_POST['rank']) && $_POST['rank'] == '') {
							$data['rank']  = '';
							$error['rank'] = "Bạn chưa nhập tên!";
						}

						//level
						if (isset($_POST['level']) && $_POST['level'] == '') {
							$data['level']  = '';
							$error['level'] = "Bạn chưa nhập tên!";
						}

						//salary
						if (isset($_POST['salary']) && $_POST['salary'] == '') {
							$data['salary']  = '';
							$error['salary'] = "Bạn chưa nhập tên!";
						}

						//bonus
						if (isset($_POST['bonus']) && $_POST['bonus'] == '') {
							$data['bonus']  = '';
							$error['bonus'] = "Bạn chưa nhập tên!";
						}

						if (!$error) {					
							$_SESSION['edit_info_user'] = "Edit contract Success!";
							$result = $userModel->editInsurrance($id, $_POST['name'], $_POST['date_of_birth'], $_POST['gender'], $_POST['check_insurrance_book'], $_POST['place_of_birth_certificate'], $_POST['registed_residence_address']);
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_contract');
							}	
						}		

					}	
					include 'views/user/contract/edit_contract.php';
					break;		
				//end process contract
				
				//start processing experience	
				case 'list_experience':
					$userModel = new UserModel();
					$data 	   = $userModel->listExperienceById($_SESSION['id']);
					include 'views/user/experience/experience.php';
					break;	
				case 'edit_experience':
					$userModel  = new UserModel();
					$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data = $userModel->getExperienceById($id);
					if (!$data) {
						echo 'No connection Database!';exit();
					}

					if (isset($_POST['edit_experience'])) {		
						$error      = array();							

						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$data['name']  = '';
							$error['name'] = "Bạn chưa nhập tên!";
						}
						
						//address_work
						if (isset($_POST['address_work']) && $_POST['address_work'] == '') {
							$data['address_work']  = '';
							$error['address_work'] = "Bạn chưa nhập nơi làm việc!";
						}
						
						//time_work
						if (isset($_POST['time_work']) && $_POST['time_work'] == '') {
							$data['time_work']  = '';
							$error['time_work'] = "Bạn chưa nhập thời gian làm việc!";
						}
						
						//language_work
						if (isset($_POST['language_work']) && $_POST['language_work'] == '') {
							$data['language_work']  = '';
							$error['language_work'] = "Bạn chưa nhập language program!";
						}
						
						//DB
						if (isset($_POST['DB']) && $_POST['DB'] == '') {
							$data['DB']  = '';
							$error['DB'] = "Bạn chưa nhập DB!";
						}
						
						//technology
						if (isset($_POST['technology']) && $_POST['technology'] == '') {
							$data['technology']  = '';
							$error['technology'] = "Bạn chưa nhập technology!";
						}
						
						if (!$error) {					
							$_SESSION['edit_experience'] = "Edit experience Success!";
							$result = $userModel->editExperience($id, $_POST['name'], $_POST['address_work'], $_POST['time_work'], $_POST['language_work'], $_POST['DB'], $_POST['technology']);
							
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_experience');
							}	
						}		

					}
					include 'views/user/experience/edit_experience.php';
					break;	
				//end process experience	

				//start processing certification		
				case 'list_skills':
					$userModel = new UserModel();
					$data 	   = $userModel->listSkillById($_SESSION['id']);
					include 'views/user/skill/skills.php';
					break;
				case 'edit_skill':
					$userModel  = new UserModel();
					$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data = $userModel->getSkillById($id);
					if (!$data) {
						echo 'No connection Database!';exit();
					}

					if (isset($_POST['edit_skill'])) {	
						$error      = array();
						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$data['name']  = '';
							$error['name'] = "Bạn chưa nhập tên!";
						}
						
						//soft_skill
						if (isset($_POST['soft_skill']) && $_POST['soft_skill'] == '') {
							$data['soft_skill']  = '';
							$error['soft_skill'] = "Bạn chưa nhập kĩ năng mềm!";
						}					
						
						//language_work
						if (isset($_POST['language_work']) && $_POST['language_work'] == '') {
							$data['language_work']  = '';
							$error['language_work'] = "Bạn chưa nhập language program!";
						}

						//level_language
						if (isset($_POST['level_language']) && $_POST['level_language'] == '') {
							$data['level_language']  = '';
							$error['level_language'] = "Bạn chưa nhập level_language!";
						}
						
						//DB
						if (isset($_POST['DB']) && $_POST['DB'] == '') {
							$data['DB']  = '';
							$error['DB'] = "Bạn chưa nhập Database!";
						}

						//level_DB
						if (isset($_POST['level_DB']) && $_POST['level_DB'] == '') {
							$data['level_DB']  = '';
							$error['level_DB'] = "Bạn chưa nhập level_DB!";
						}
						
						//technology
						if (isset($_POST['technology']) && $_POST['technology'] == '') {
							$data['technology']  = '';
							$error['technology'] = "Bạn chưa nhập technology!";
						}

						//level_technology
						if (isset($_POST['level_technology']) && $_POST['level_technology'] == '') {
							$data['level_technology']  = '';
							$error['level_technology'] = "Bạn chưa nhập level_technology!";
						}
						
						if (!$error) {					
							$_SESSION['edit_list'] = "Edit list Success!";
							$result = $userModel->editSkill($id, $_POST['name'], $_POST['soft_skill'], $_POST['language_work'], $_POST['level_language'], $_POST['DB'], $_POST['level_DB'], $_POST['technology'], $_POST['level_technology']);
							
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_skills');
							}	
						}		

					}
					include 'views/user/skill/edit_skill.php';
					break;		
				//end process certification
				
				//start processing certification	
				case 'list_certification':
					
					include 'views/user/certification/certification.php';
					break;	
				//end process certification

				//start processing fort		
				case 'list_fort':
										
					include 'views/user/fort/fort.php';
					break;	
				case 'add_fort':
					if (isset($_POST['add_fort'])) {
						$name = $_POST['name'];
						$type_of_contract = $_POST['type_of_contract'];
						$seniority 	= $_POST['seniority'];
						$error      = array();
						$userModel  = new UserModel();
						if ($name == '') {
							$error['name'] = "Bạn chưa nhập tên!";
						} else{
							foreach ($data as $list) {
								if ($name == $list['name']) {
									$error['name'] = "Tên đăng nhập đã tồn tại!";
								}
							}
						}
						if ($type_of_contract == '') {
							$error['type_of_contract'] = "Bạn chưa nhập type_of_contract!";
						} 

						if ($seniority == '') {
							$error['seniority'] = "Bạn chưa nhập seniority!";
						} 


						if (!$error) {		
							session_start();	
							$_SESSION['add'] = "Add success!";				
							$result    = $userModel->addFort($name, $type_of_contract, $seniority ,$_POST['check_asset'], $_POST['date_off'], $_POST['reason_off'], $_POST['check_isurrance']);
							if($result) {
								$this->redirectPage('user.php?controller=user&action=list_fort');
							}	
						}																						
					}
					include 'views/user/fort/add_fort.php';
					break;	
				//end process fort	
								
				default:
					# code...
					break;
			}
		}
	}
	// ham nay de redirect trang
	function redirectPage($link) {
		header("Location: $link");
	}
}
?>