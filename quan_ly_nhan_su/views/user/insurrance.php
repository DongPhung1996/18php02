<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Bảo hiểm</h1>
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
							        <table class="table">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
							              <th>Bảo hiểm đã cấp</th>
							              <th>Giới tính</th>
							              <th>Nơi cấp giấy khai sinh</th>
							              <th>Địa chỉ đăng ký hộ khẩu</th>
							              <th>Thông tin sổ hộ khẩu</th>	
							              <th>Đăng ký nới khám bệnh</th>
							            </tr>
							          </thead>
							          <tbody>
							          	 <?php
									          $stt = 1;
									          foreach ($data as $list) {
									          	echo "<tr>
									              <td>". $stt++."</td>
									              <td>". $list["name"]."</td>
									              <td>". $list["date_of_birth"]."</td>
									              <td>". $list["check_insurrance_book"]."</td>
									              <td>". $list["gender"]."</td>
									              <td>". $list["place_of_birth_certificate"]."</td>
									              <td>". $list["registed_residence_address"]."</td>
									              <td>". $list["informationn_residence"]."</td>
									              <td>". $list["register_of_the_clinic"]."</td>
									              </tr>";
									          }								          
								          ?>
							          </tbody>
							        </table> 
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
<?php include 'views/user/common/footer.php';?>
