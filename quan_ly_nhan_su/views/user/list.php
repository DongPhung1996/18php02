<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Thành viên</h1>
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
                                <div class="col-lg-12 table-responsive">
							      	<table class="table">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
							              <th>Số cmnd</th>
							              <th>Ngày cấp</th>
							              <th>Điện thoại</th>
							              <th>Email</th>	
							              <th>Skype</th>
							              <th>Giới tính</th>
							              <th>Địa chỉ</th>
							            </tr>
							          </thead>
							          <tbody>
								          <?php $stt = 1; ?>
									      <?php foreach ($data as $list) { ?>
									          <tr>
									              <td><?php echo $stt++?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["date_of_birth"]?></td>
									              <td><?php echo $list["id_card"]?></td>
									              <td><?php echo $list["date_range"]?></td>
									              <td><?php echo $list["phone"]?></td>
									              <td><?php echo $list["email"]?></td>
									              <td><?php echo $list["skype"]?></td>
									              <td><?php echo $list["gender"]?></td>
									              <td><?php echo $list["address"]?></td>
									           </tr>
									       <?php } ?>
							          </tbody>
							        </table> 

							        <table class="table">
							        	<thead>
							        		<tr>
							        		  <th>Quốc tịch</th>
								              <th>Tình trạng hôn nhân</th>	
								              <th>Passport No</th>
								              <th>Passport ngày cấp</th>
								              <th>Passport nơi cấp</th>
								              <th>Số sổ Bảo Hiểm</th>
								              <th>Ngày cấp sổ</th>
								              <th>Nơi cấp sổ</th>
								              <th>Bank Account</th>	
							        		</tr>
							        	</thead>
							        	<tbody>
							        	<?php foreach ($data as $list) { ?>
									         <tr>
								              <td><?php echo $list["nationality"]?></td>
								              <td><?php echo $list["maried"]?></td>
								              <td><?php echo $list["passport_no"]?></td>
								              <td><?php echo $list["passport_date"]?></td>
								              <td><?php echo $list["passport_where"]?></td>
								              <td><?php echo $list["number_of_insurrance"]?></td>
								              <td><?php echo $list["date_range_insurrance"]?></td>
								              <td><?php echo $list["issued_by"]?></td>
								              <td><?php echo $list["bank_account"]?></td>
								            </tr>
									     <?php } ?>	
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
