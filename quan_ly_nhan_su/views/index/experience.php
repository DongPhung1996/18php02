<?php 
include 'views/index/common/header.php';
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
                                <div class="col-lg-12">
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
							          	  <?php
									          $stt = 1;
									          foreach ($data as $list) {
									          	echo "<tr>
									              <td>". $stt++."</td>
									              <td>". $list["name"]."</td>
									              <td>". $list["address_work"]."</td>
									              <td>". $list["time_work"]."</td>
									              <td>". $list["language_work"]."</td>
									              <td>". $list["DB"]."</td>
									              <td>". $list["technology"]."</td>
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
<?php include 'views/index/common/footer.php';?>
