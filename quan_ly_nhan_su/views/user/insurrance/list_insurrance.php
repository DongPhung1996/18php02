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
                                <div class="col-lg-12 table-responsive">
							        <table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
                                          <th>Giới tính</th>
							              <th>Bảo hiểm đã cấp</th>
							              <th>Nơi cấp giấy khai sinh</th>    
                                          <th>Địa chỉ đăng ký sổ hộ khẩu</th>      
							            </tr>
							          </thead>
							          <tbody>
							          	 <?php $stt = 1; ?>
									     <?php foreach ($data as $list) { ?>
									          <tr>
									              <td><?php echo $stt++?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["date_of_birth"]?></td>
                                                  <td><?php echo ($list['gender'] == 1) ? "Nam" : "Nữ" ?></td>
									              <td><?php echo ($list["check_insurrance_book"] == 1) ? "Rồi" : "Chưa" ?></td>
									              <td><?php echo $list["place_of_birth_certificate"]?></td>
                                                  <td><?php echo $list["registed_residence_address"] ?></td>
									           </tr>
									      <?php  } ?>
							          </tbody>
							        </table> 
							   </div>   							 
                            </div>
                            <!-- /.row (nested) -->
                            <div align="center">
                            	<a class="btn btn-primary" href=<?php echo "user.php?controller=user&action=edit_insurrance&id=".$list['id']?>>
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
