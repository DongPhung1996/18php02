<?php  
    include "checkLoginUser.php";
    $userModel  = new User();
    
    $error = array();

    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $results = $userModel->checkID($username, $password);
        if (!$results) {
            if (isset($_POST['username']) && $_POST['username'] == '') {
                $error['username'] = "No input username";
            } else {
                $error['login'] = "Username or Password Error!";
            }
            if (isset($_POST['password']) && $_POST['password'] == '') {
                $error['password'] = "No input password";
            }  else {
                $error['login'] = "Username or Password Error!";
            }
        }
        if (!$error) {
            session_start();
            $_SESSION['id'] = $results['id'];
            $name = $userModel->checkUserName($_SESSION['id']);
            $_SESSION['name'] = $name['username'];
            //add id_card all tables
            header("Location: user.php?id=".$results['id']);
        }
    }
?>              
<?php include 'form_login/header.php';?>
<div class="col-lg-12" align="center">
    <h1 class="page-header">Tài khoản</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="" method="POST">
      <div class="form-group">
        <label>Tên tài khoản</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username">
        <p style="color: red; text-align: center;"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
      </div>
      <div class="form-group">
        <label>Mật khẩu</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        <p style="color: red; text-align: center;"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
      </div>
      <div class="form-group">
          <a href="forgot_user.php">Quên mật khẩu?</a>  
      </div>
      <p style="color: red; text-align: center;"><?php echo isset($error['login']) ? $error['login'] : ''; ?></p>
      <div align="center">
        <button type="submit" class="btn btn-primary" name="login_user">Login</button>
      </div>
    </form>
</div>
<div class="col-md-4"></div>
<!-- /#page-wrapper -->
<?php include 'form_login/footer.php';?>