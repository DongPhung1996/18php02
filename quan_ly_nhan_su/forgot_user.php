<?php include 'form_login/header.php';?>
<div class="col-lg-12" align="center">
    <h1 class="page-header">Check Email</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-4"></div>
<div class="col-lg-4">
	<form action="" method="POST">
	  <div>
		<p>Please input your email:</p>
	  </div>	
      <div class="form-group">
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your email" name="username">
      </div>
      <div align="center">
        <button type="submit" class="btn btn-primary" name="login_user">Send</button>
      </div>
    </form>
</div>
<div class="col-lg-4"></div>
<?php include 'form_login/footer.php';?>