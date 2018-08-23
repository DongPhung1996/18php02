<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Hợp đồng lao động</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 table-responsive">
							        <table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Tên</th>
							              <th>Bộ phận</th>
							              <th>Loại hợp đồng</th>
							              <th>Role</th>
							              <th>Mã nhân viên</th>
							              <th>Rank</th>
							              <th>Level</th>	
							              <th>Lương</th>
							              <th>Ngày ký hợp đồng</th>
							              <th>Ngày hết hạn hợp đồng</th>
							              <th>Nhận thưởng</th>
							            </tr>
							          </thead>
							          <tbody>
							          	<?php $stt = 1; ?>
									    <?php foreach ($data as $list) { ?>
								     		<tr>
								              <td><?php echo $stt++?></td>
								              <td><?php echo $list["name"]?></td>
								              <td><?php echo $list["part"]?></td>
								              <td><?php echo $list["type_of_contract"]?></td>
								              <td><?php echo $list["role"]?></td>
								              <td><?php echo $list["employed_code"]?></td>
								              <td><?php echo $list["rank"]?></td>
								              <td><?php echo $list["level"]?></td>
								              <td><?php echo $list["salary"]?></td>
								              <td><?php echo $list["date_start_contract"]?></td>
								              <td><?php echo $list["date_end_contract"]?></td>
								              <td><?php echo $list["bonus"]?></td>
								            </tr>
									    <?php }	?>
							          </tbody>
							        </table> 
							   </div>  						 
                            </div>
                            <!-- /.row (nested) -->
                            <div align="center">
                            	<a class="btn btn-primary" href=<?php echo "user.php?controller=user&action=edit_contract&id=".$list['id'] ?>>
			          					Cập nhật
			          			</a>	
                            </div>
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
