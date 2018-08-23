<?php 
require_once './model/admin_model.php';
class AdminController {
	function handleRequest() {
		$controller = isset($_GET['controller']) ? $_GET['controller'] : 'admin';
		$action     = isset($_GET['action']) ? $_GET['action'] : 'list_info_user';
		if ($controller == 'admin') {
			switch ($action) {
				//start process account
				case 'list_account':
					$userModel = new AdminModel();
					$data 	   = $userModel->listAccount();
					include 'views/admin/users/account/list_account.php';
					break;
				case 'add_account':				
					if (isset($_POST['add_user'])) {
						$username   = $_POST['username'];
						$email 	    = $_POST['email'];
						$password   = md5($_POST['password']);
						$error      = array();
						$userModel  = new AdminModel();
						$checkEmail = $userModel->is_email($email);
						$data 		= $userModel->listAccount();
						if ($username == '') {
							$error['username'] = "Bạn chưa nhập tên!";
						} else{
							foreach ($data as $list) {
								if ($username == $list['username']) {
									$error['username'] = "Tên đăng nhập đã tồn tại!";
								}
							}
						}
						if ($email == '') {
							$error['email'] = "Bạn chưa nhập email!";
						} elseif (!$checkEmail) {
							$error['email'] = "Bạn nhập email không đúng!";
						} else {
							foreach ($data as $list) {
								if ($email == $list['email']) {
									$error['email'] = "Email đã tồn tại!";
								}
							}
						}

						if (!$error) {			
							$_SESSION['add'] = "Add success!";				
							$result    = $userModel->addAccount($username, $email ,$password, 2);
							if($result) {
								$this->redirectPage('admin.php?controller=admin&action=list_account');
							}	
						}																						
					}
					include 'views/admin/users/account/add_account.php';
					break;
				case 'edit_account':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;					
					$data       = $userModel->getInfoAccountById($id);
					$data2      = $userModel->listAccount();

					if (!$data) {
						echo 'No connection Database!';exit();
					}
					//var_dump($data);die;
					//when submit form edit
					if (isset($_POST['edit_user'])) {		
						$error      = array();						
						$checkEmail = $userModel->is_email($_POST['email']);	
						
						if (isset($_POST['username']) && $_POST['username'] == '') {
							$data['username']  = '';
							$error['username'] = "Bạn chưa nhập tên!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['username'] == $list['username'] && $id != $list['id']) {
									$data['username'] = $list['username'];
									$error['username'] = "Tên đăng nhập đã tồn tại!";
								}
							}
						}
						
						if (isset($_POST['email']) && $_POST['email'] == '') {
							$data['email']  = '';
							$error['email'] = "Bạn chưa nhập email!";
						} elseif (!$checkEmail) {
							$data['email']  = $_POST['email'];
							$error['email'] = "Bạn nhập email không đúng!";
						} else {
							foreach ($data2 as $list) {
								if ($_POST['email'] == $list['email'] && $id != $list['id']) {
									$data['email'] = $list['email'];
									$error['email'] = "Email đã tồn tại!";
								}
							}	
						}

						if (!$error) {							
							$_SESSION['edit'] = "Edit Success!";
							$result = $userModel->editAccount($id, $_POST['username'], $_POST['email'], $_POST['role']);
							if($result) {
								$this->redirectPage('admin.php?controller=admin&action=list_account');
							}	
						}																		
					}								
					 		
					include 'views/admin/users/account/edit_account.php';				
					break;	
				case 'delete_account':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteAccountById($id);
						if ($data) {
							$_SESSION['success'] = "Delete Success";
							$this->redirectPage('admin.php?controller=admin&action=list_account');
						}
					}				
					break;	
				//end process account	

				//start process information user	
				case 'list_info_user':
					$userModel = new AdminModel();
					$data 	   = $userModel->listInfoUser();
					include 'views/admin/users/information_user/list_info.php';
					break;	
				case 'add_info_user':									
					if (isset($_POST['add_info'])) {
						$gender	    = $_POST['gender'];
						$maried	    = $_POST['maried'];
						$userModel  = new AdminModel();
						$data 	    = $userModel->listInfoUser();
						$continue = true;
						//name
						if (isset($_POST['name']) && $_POST['name'] == '') {
							$error['name'] = "Bạn chưa nhập tên!";
						}
						//date_of_birth
						if (isset($_POST['date_of_birth']) && $_POST['date_of_birth'] == '') {
							$error['date_of_birth'] = "Bạn chưa nhập ngày sinh!";
						}
						//id card
						
						if (isset($_POST['id_card']) && $_POST['id_card'] == '') {
							$error['id_card'] = "Bạn chưa nhập số cmnd!";
						} else {
							$error['id_card'] = $userModel->verifyDataInformation($_POST,"id_card")
											? "IdCard đã tồn tại!"
											: $continue = false;
						}
					 
						if (isset($_POST['date_range']) && $_POST['date_range'] == '') {
							$error['date_range'] = "Bạn chưa nhập ngày cấp!";
						}

						//phone
						if (isset($_POST['phone']) && $_POST['phone'] == '') {
							$error['phone'] = "Bạn chưa nhập số điện thoại!";
						} else {
							$error['phone'] = $userModel->verifyDataInformation($_POST,"phone")
											?  "Phone đã tồn tại!"
											: $continue = flase;
						}						
						//email
						$email      = $_POST['email'];
						$checkEmail = $userModel->is_email($email);
						if (isset($email) && $email == '') {
							$error['email'] = "Bạn chưa nhập email!";
						} elseif (!$checkEmail) {
							$error['email'] = "Bạn nhập email không đúng!";
						} else {
							if ($continue) {
								$error['email'] = $userModel->verifyDataInformation($_POST,"email")
											?  "email đã tồn tại!"
											: $continue = false;
							}	
						}	
						//skype
						if (isset($_POST['skype']) && $_POST['skype'] == '') {
							$error['skype'] = "Bạn chưa nhập skype!";
						}
						//address
						if (isset($_POST['address']) && $_POST['address'] == '') {
							$error['address'] = "Bạn chưa nhập địa chỉ!";
						}
						//nationality
						if (isset($_POST['nationality']) && $_POST['nationality'] == '') {
							$error['nationality'] = "Bạn chưa nhập quốc tịch!";
						}
						//passport no
						if (isset($_POST['passport_no']) && $_POST['passport_no'] == '') {
							$error['passport_no'] = "Bạn chưa nhập số passport!";
						} else {
							$error['passport_no'] = $userModel->verifyDataInformation($_POST,"passport_no")
											?  "passport_no đã tồn tại!"
											: $continue = false;
						}						
						//passport date
						if (isset($_POST['passport_date']) && $_POST['passport_date'] == '') {
							$error['passport_date'] = "Bạn chưa nhập ngày cấp passport!";
						} 
						//passport where
						if (isset($_POST['passport_where']) && $_POST['passport_where'] == '') {
							$error['passport_where'] = "Bạn chưa nhập nơi cấp passport!";
						} 
						//number_of_insurrance
						if (isset($_POST['number_of_insurrance']) && $_POST['number_of_insurrance'] == '') {
							$error['number_of_insurrance'] = "Bạn chưa nhập số sổ bảo hiểm!";
						} else {
							 $error['number_of_insurrance'] = $userModel->verifyDataInformation($_POST,"number_of_insurrance")
											?  "number_of_insurrance đã tồn tại!"
											: $continue = false;
						}
						//date_range_isurrance
						if (isset($_POST['date_range_insurrance']) && $_POST['date_range_insurrance'] == '') {
							$error['date_range_insurrance'] = "Bạn chưa nhập ngày cấp sổ bảo hiểm!";
						}
						//issued_by
						if (isset($_POST['issued_by']) && $_POST['issued_by'] == '') {
							$error['issued_by'] = "Bạn chưa nhập nơi cấp sổ bảo hiểm!";
						}
						//bank_account
						if (isset($_POST['bank_account']) && $_POST['bank_account'] == '') {
							$error['bank_account'] = "Bạn chưa nhập số tải khoản!";
						} else {
							$error['bank_account'] = $userModel->verifyDataInformation($_POST,"bank_account")
											?  "bank_account đã tồn tại!"
											: $continue = false;
						}	
						if (!$error) {			
							$_SESSION['add'] = "Add success!";				
							$result    = $userModel->addInfoUser($_POST['name'], $_POST['gender'], $_POST['date_of_birth'], $_POST['id_card'], $_POST['date_range'], $_POST['phone'], $_POST['email'], $_POST['skype'], $_POST['address'], $_POST['nationality'], $_POST['maried'], $_POST['passport_no'], $_POST['passport_date'], $_POST['passport_where'], $_POST['number_of_insurrance'], $_POST['date_range_insurrance'], $_POST['issued_by'], $_POST['bank_account']);
							if($result) {
								$this->redirectPage('admin.php?controller=admin&action=list_info_user');
							}	
						}		
					}	
					include 'views/admin/users/information_user/add_info.php';
					break;
				case 'edit_info_user':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'] ;		
					$data 		= $userModel->getInfoUserById($id);
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

							foreach ($data2 as $list) {
								if ($_POST['id_card'] == $list['id_card'] && $id != $list['id']) {
									$data['id_card']  = $list['id_card'];
									$error['id_card'] = "Số cmnd đã tồn tại!";
								}
							}
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
							$result = $userModel->editInfoUser($id, $_POST['name'], $_POST['gender'], $_POST['date_of_birth'], $_POST['id_card'], $_POST['date_range'], $_POST['phone'], $_POST['email'], $_POST['skype'], $_POST['address'], $_POST['nationality'], $_POST['maried'], $_POST['passport_no'], $_POST['passport_date'], $_POST['passport_where'], $_POST['number_of_insurrance'], $_POST['date_range_insurrance'], $_POST['issued_by'], $_POST['bank_account']);
							if($result) {
								$this->redirectPage('admin.php?controller=admin&action=list_info_user');
							}	
						}																		
					}	
					include 'views/admin/users/information_user/edit_info.php';
					break;	
				case 'delete_info_user':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteInfoUserById($id);
						if ($data) {
							$this->redirectPage('admin.php?controller=admin&action=list_info_user');
						}
					}				
					break;	
				//end process information user
					
				//start processing insurrance:
				case 'list_insurrance':
					$userModel = new AdminModel();
					$data 	   = $userModel->listInsurrance();
					$dataResident = $userModel->listInformationResident();
					$dataClinic = $userModel->listRegisterClinic();
					include 'views/admin/users/insurrance/list_insurrance.php';
					break;
				case 'delete_insurrance':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteInsurranceById($id);
						if ($data) {
							$this->redirectPage('admin.php?controller=admin&action=list_insurrance');
						}
					}				
					break;	
				//end process insurrance
				
				//start processing experience	
				case 'list_experience':
					$userModel = new AdminModel();
					$data 	   = $userModel->listExperience();
					include 'views/admin/users/experience/experience.php';
					break;	
				case 'delete_experience':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteInsurranceById($id);
						if ($data) {
							$this->redirectPage('admin.php?controller=admin&action=list_experience');
						}
					}				
					break;	
				//end process experience	

				//start processing contract	
				case 'list_contract':
					$userModel = new AdminModel();
					$data 	   = $userModel->listContract();
					include 'views/admin/users/contract/contract.php';
					break;
				case 'delete_contract':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteContractById($id);
						if ($data) {
							$this->redirectPage('admin.php?controller=admin&action=list_contract');
						}
					}				
					break;			

				//end process contract
				
				//start processing certification		
				case 'skills':
					$userModel = new AdminModel();
					$data 	   = $userModel->listSkill();
					include 'views/admin/users/skill/skills.php';
					break;	
				case 'delete_skills':
					$userModel  = new AdminModel();
					$id         = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];	
					if ($id) {
						$data = $userModel->deleteContractById($id);
						if ($data) {
							$this->redirectPage('admin.php?controller=admin&action=skills');
						}
					}				
					break;		
				//end process certification
				
				//start processing certification	
				case 'certification':
					
					include 'views/admin/users/certification/certification.php';
					break;	
				//end process certification

				//start processing fort		
				case 'fort':
					
					include 'views/admin/users/fort/fort.php';
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