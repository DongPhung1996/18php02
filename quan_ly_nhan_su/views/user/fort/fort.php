<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Đơn xin nghỉ việc</h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-12">
                	<?php if (isset($_SESSION['add'])) { ?>
                        <div class="alert alert-success" align="center">
                            <?php echo $_SESSION['add'];  ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['add'])) {
                        unset($_SESSION['add']);
                    }  ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" align="center">
		                            <a class="btn btn-default" href="user.php?controller=user&action=add_fort">Tạo đơn</a>    
		                        </div>
	                            <!-- /.row (nested) -->
	                        </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
	            </div>
	        </div>
	        <!-- /.col-lg-12 -->
	    </div>
	</div>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
