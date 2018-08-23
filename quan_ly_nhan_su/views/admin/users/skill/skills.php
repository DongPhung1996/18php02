<?php 
include 'views/admin/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Skill bản thân</h1>
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
								              <th>Kỹ năng mền</th>
								              <th>Language Work</th>
								              <th>Level</th>
                              <th>Database</th>
                              <th>Level</th>
								              <th>Technology</th>
								              <th>Level</th>
								              <th>Action</th>
								            </tr>
								          </thead>
								          <tbody>
								            <?php $stt = 1 ?>
                            <?php foreach ($data as $list) { ?>
                            <tr>
                              <td><?php echo $stt++ ?></td>
                              <td><?php echo $list['name']; ?></td>
                              <td><?php echo $list['soft_skill']; ?></td>
                              <td><?php echo $list['language_work']; ?></td>
                              <td><?php echo $list['level_language']; ?></td>
                              <td><?php echo $list['DB']; ?></td>
                              <td><?php echo $list['level_DB']; ?></td>
                              <td><?php echo $list['technology']; ?></td>
                              <td><?php echo $list['level_technology']; ?></td>
                              <td>
                                <button key="<?= $list['id'] ?>" class="btn btn-danger delete" data-toggle="modal" data-target="#Delete">
                                  Xóa
                                </button>
                                <!-- Modal -->
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
<!-- /#page-wrapper -->
<script>
     $(document).ready(function(){
          $('.delete').click(function(){
                var id = $(this).attr('key');
                $('#id').val(id);
                console.log(id);
          });
     });   
</script>

<?php include 'views/admin/common/footer.php';?>
