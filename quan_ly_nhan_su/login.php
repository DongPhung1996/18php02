
<?php include 'common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1 class="page-header">Login</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        	<form action="" role="form" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div align="center">
                	<button type="submit" class="btn btn-default" name="add_user">Login</button>
            	</div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'common/footer.php';?>