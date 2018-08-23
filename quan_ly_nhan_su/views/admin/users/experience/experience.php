<?php 
include 'views/admin/common/header.php';
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
							      <div class="row">
								        <table class="table" border="1">
								          <thead>
								            <tr>
								              <th>STT</th>
								              <th>Họ và tên</th>
								              <th>Nơi làm việc</th>
								              <th>Thời gian làm việc</th>
								              <th>Ngôn ngữ sử dụng</th>
                              <th>Database</th>
								              <th>Công nghệ sử dụng</th>
								              <th>Action</th>
								            </tr>
								          </thead>
								          <tbody>
								            <?php $stt = 1; ?>
                            <?php foreach ($data as $list) { ?>
                            <tr>
                              <td><?php echo $stt++; ?></td>
                              <td><?php echo $list['name']; ?></td>
                              <td><?php echo $list['address_work']; ?></td>
                              <td><?php echo $list['time_work']; ?></td>
                              <td><?php echo $list['language_work']; ?></td>
                              <td><?php echo $list['DB']; ?></td>
                              <td><?php echo $list['technology'];?></td>
                              <td>
                                  <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#Delete" key="<?= $list['id'] ?>">
                                        Xóa
                                      </button>
                                  <?php include('modal_delete.php') ?>
                              </td>
                            </tr>  
                            <?php } ?>
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
<script>
    $(document).ready(function(){
        $('.delete').click(function(){
            var id = $(this).attr('key');
            $('#id').val(id);
            console.log(id);
        });
    });
</script>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>
