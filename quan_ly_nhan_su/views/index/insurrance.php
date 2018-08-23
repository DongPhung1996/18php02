<?php 
include 'views/index/common/header.php';
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
                                <div class="col-lg-12">
							        <table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Họ và tên</th>
							              <th>Ngày sinh</th>
							              <th>Bảo hiểm đã cấp</th>
							              <th>Giới tính</th>
							              <th>Nơi cấp giấy khai sinh</th>          
                                          <th>Thông tin sổ hộ khẩu</th> 
                                          <th>Đăng ký nơi khám bệnh</th>
                                          <th>Địa chỉ đăng ký hộ khẩu</th>
							            </tr>
							          </thead>
							          <tbody>
							          	 <?php $stt = 1; ?>
									     <?php foreach ($data as $list) { ?>
									          <tr>
									              <td><?php echo $stt++?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["date_of_birth"]?></td>
									              <td><?php echo $list["check_insurrance_book"]?></td>
									              <td><?php echo $list["gender"]?></td>
									              <td><?php echo $list["place_of_birth_certificate"]?></td>
                                                  <td><?php echo $list["registed_residence_address"]?></td>
									              <td><a class="btn btn-default">View Detail</a></td>
									              <td><a class="btn btn-default">View Detail</a></td>
									           </tr>
									      <?php  } ?>
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
<?php include 'views/index/common/footer.php';?>
