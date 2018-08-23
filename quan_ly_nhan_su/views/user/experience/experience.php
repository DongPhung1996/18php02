<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Kinh nghiệm làm việc</h1>
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
							              <th>Nơi làm việc</th>
							              <th>Thời gian làm việc</th>
							              <th>Language</th>
							              <th>DB</th>
							              <th>Technology</th>
							            </tr>
							          </thead>
							          <tbody>
							          	  <?php $stt = 1; ?>
									      <?php foreach ($data as $list) { ?>
									          <tr>
									              <td><?php echo $stt++ ?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["address_work"]?></td>
									              <td><?php echo $list["time_work"]?></td>
									              <td><?php echo $list["language_work"]?></td>
									              <td><?php echo $list["DB"]?></td>
									              <td><?php echo $list["technology"]?></td>
									          </tr>
									       <?php  }	?>
							          </tbody>
							        </table>					  
							   </div>   							 
                            </div>
                            <!-- /.row (nested) -->
                            <div align="center">
                            	<a class="btn btn-primary" href=<?php echo "user.php?controller=user&action=edit_experience&id=".$list['id'] ?>>
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
