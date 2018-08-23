<?php
    include "checkLoginAdmin.php";
    $userModel  = new Admin();
    $results    = $userModel->listAdmin();
    $error      = array();
    if (isset($_POST['login'])) {                                    
        if (isset($_POST['username']) && $_POST['username'] == '') {
            $error['username'] = "No input name!";
        } else{
            foreach ($results as $list) {
                if ($_POST['username'] != $list['username']) {
                    $error['username'] = "username error!";
                }
            }
        }
        if (isset($_POST['password']) && $_POST['password'] == '') {
            $error['password'] = "No input password!";
        } else {
            foreach ($results as $list) {
                if (md5($_POST['password']) != $list['password']) {
                    $error['password'] = "password error!";
                }
            }
        }

        if (!$error) {     
            session_start(); 
            $_SESSION['login'] = "Login Success!";
            header('Location: admin.php');   
        }
    } 
    
 ?>                       

<?php include 'form_login/header.php';?>
<div class="col-lg-12" align="center">
    <h1 class="page-header">Login Admin</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-md-4"></div>
<div class="col-md-4">
	<form action="" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username">
        <p style="color: red; text-align: center;"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        <p style="color: red; text-align: center;"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
      </div>
      <div>
          <a href="forgot.php">Forgot password?</a>
      </div>
      <div align="center">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>
    </form>
</div>
<div class="col-md-4"></div>
<!-- /#page-wrapper -->
<?php include 'form_login/footer.php';?>