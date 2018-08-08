<?php 
include 'views/admin/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Tài khoản</h1>
        </div>
        <div>
        	<div class="row">

                <div class="col-lg-12">
                        <?php if (isset($_SESSION['success'])) { ?>
                            <div class="alert alert-danger" align="center">
                                <?php echo $_SESSION['success'];  ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['success'])) {
                            unset($_SESSION['success']);
                        }  ?>
                         <?php if (isset($_SESSION['edit'])) { ?>
                                <div class="alert alert-info" align="center">
                                    <?php echo $_SESSION['edit'];  ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($_SESSION['edit'])) {
                                unset($_SESSION['edit']);
                        }  ?>   
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
                                <div class="col-lg-12">
							        <table class="table table-hover">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Role</th>
							              <th>Email</th>
							              <th>Username</th>
							              <th>Action</th>
							            </tr>
							          </thead>
							          <tbody>
							          	<?php $stt = 0; ?>
							          	<?php foreach ($data as $list) {  ?>
							          	<?php $stt ++; ?>
							          	<tr>
							          		<td><?php echo $stt; ?></td>
							          		<td><?php echo ($list['role'] == 1) ? 'Admin' : 'User' ?></td>
							          		<td><?php echo $list['email'] ?></td>
							          		<td><?php echo $list['username'] ?></td>
							          		<td>
							          			<a class="btn btn-primary" href=<?php echo "admin.php?controller=users&action=edit_account&id=".$list['id'] ?>>
							          				Edit
							          			</a>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                                    Delete
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Do you want to delete account?</h4>
                                                      </div>
                                                      <div class="modal-footer" align="center">
                                                        <a class="btn btn-danger" href=<?php echo "admin.php?controller=users&action=delete_account&id=".$list['id'] ?>>Yes</a>
                                                        <a class="btn btn-primary" data-dismiss="modal">No</a>
                                                        <a class="btn btn-default" data-dismiss="modal">Close</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
							          		</td>
							          	</tr>
							            <?php } ?>
							          </tbody>
							        </table> 						        
							     </div> 
                                 <div class="col-lg-12" align="center">
                                     <a class="btn btn-success" href="admin.php?controller=users&action=add_account">Tạo tài khoản</a>
                                 </div>  							 
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
<?php include 'views/admin/common/footer.php';?>
