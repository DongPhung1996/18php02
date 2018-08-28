<?php include 'views/user/common/header.php' ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Thông tin sổ hộ khẩu</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							      <div class="row table-responsive">
								     <table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ tên</th>
							              <th>Chủ hộ</th>
							              <th>số sổ hộ khẩu</th>
							              <th>Ngày sinh</th>
                                          <th>Giới tính</th>
                                          <th>Cấp bởi</th>
                                          <th>Địa chỉ</th>
                                          <th>Mối quan hệ</th>
                                          <th>Số cmnd</th>
                                          <th>Note</th>
							            </tr>
							          </thead>
							          <tbody>
							          	<?php $stt = 0; ?>
							          	<?php foreach ($data as $list) {  ?>
							          	<?php $stt ++; ?>
							          	<tr>
							          		<td><?php echo $stt; ?></td>
							          		<td><?php echo $list['name'] ?></td>
							          		<td><?php echo $list['host'] ?></td>
							          		<td><?php echo $list['id_residence'] ?></td>
							          		<td><?php echo $list['date_of_birth'] ?></td>
							          		<td><?php echo ($list['gender'] == 1) ? 'Nam' : 'Nữ' ?></td>
							          		<td><?php echo $list['issued_by'] ?></td>
							          		<td><?php echo $list['address'] ?></td>
							          		<td><?php echo $list['relationship'] ?></td>
											<td><?php echo $list['id_card'] ?></td>
											<td><?php echo $list['note'] ?></td>
							          	</tr>
							            <?php } ?>
							          </tbody>
							        </table> 						        
							     </div>                      
	                               <div class="col-lg-12" align="center">
	                                     <a class="btn btn-primary" href=<?php echo "user.php?controller=user&action=edit_info_residence&id=".$list['id']?>>
				                            Cập nhật
				                        </a>
	                                 </div>
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
<!-- /#page-wrapper --
<?php include 'views/user/common/footer.php' ?>