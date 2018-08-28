<?php include 'views/user/common/header.php' ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Nơi đăng ký khám chữa bệnh</h1>
        </div>
        <div>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							      <div class="row">
								    <table class="table table-hover" border="1">
							          <thead>
							            <tr>
							              <th>STT</th>
							              <th>Tỉnh/thành phố</th>
							              <th>Quận/huyện/Thị xã</th>
							              <th>Bệnh viện</th>
							              <th>Địa chỉ khám chữa bệnh</th>
							            </tr>
							          </thead>
							          <tbody>
							          	<?php $stt = 0; ?>
							          	<?php foreach ($data as $list) {  ?>
							          	<?php $stt ++; ?>
							          	<tr>
							          		<td><?php echo $stt; ?></td>
							          		<td><?php echo $list['city_of_province'] ?></td>
							          		<td><?php echo $list['district_or_town'] ?></td>
							          		<td><?php echo $list['hospital'] ?></td>
							          		<td><?php echo $list['address_examination'] ?></td>
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