<?php 
include 'views/admin/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List users</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <form action="admin.php?controller=users&action=list" role="form" method="post">                      
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">Customer</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="list_user">List user</button>
                                    </form>
                                </div> -->
                                <div class="col-lg-12">
							      <div class="row">
							        <table class="table">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>ID</th>
							              <th>Role</th>
							              <th>Username</th>
							              <th>Password</th>
							              <th>Function</th>							         
							            </tr>
							          </thead>
							          <tbody>
							          <?php
							            require_once './config/database.php';
							          	
							          	// $conn        = new ConnectDB();
							          	
							          	$stt         = 1;
							          	$server      = 'localhost';
							          	$username    = 'root';
							          	$password    = '';
							          	$database    = '18php02_mvc_oop_full';
							          	$conn        = new mysqli($server, $username, $password, $database);
							            $sql         = "SELECT * FROM users";
							            // thực thi câu $sql với biến conn lấy từ file connection.php
							            $query       = mysqli_query($conn,$sql);
							            while ($data = mysqli_fetch_array($query)) {
							          ?>
							            <tr>
							              <td><?php echo $stt++; ?></td>
							              <td><?php echo $data["id"]; ?></td>
							              <td>
							                <?php
							                    if ($data["role"] == 1) {
							                      echo "Administrator";
							                    }else{
							                      echo "Customer";
							                    }
							                ?>
							              </td>
							              <td><?php echo $data["username"]; ?></td>
							              <td><?php echo md5($data["password"]); ?></td>
							              <td>
						              		<a href="edit_users.php?id=<?php echo $data["id"]; ?>">Sửa</a> 
						              		<a href="delete_users.php?id=<?php echo $data["id"]; ?>">Xóa</a>
							              </td>
							            </tr>
							          <?php
							            }
							          ?>
							          </tbody>
							        </table>
							      </div>
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
