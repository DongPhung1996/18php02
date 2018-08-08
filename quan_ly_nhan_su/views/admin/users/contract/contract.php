<?php 
include 'views/admin/common/header.php';
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
                                <div class="col-lg-12">
							      <div class="row">
								        <table class="table" border="1">
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
								  			  <th>Xem thêm</th>
								  			  <th>Action</th>
								            </tr>
								          </thead>
								          <tbody>
								          	<?php $stt = 1; ?>
								          	<?php foreach ($data as $list) {?>
								          		<tr>
									              <td><?php echo $stt++?></td>
									              <td><?php echo $list["name"]?></td>
									              <td><?php echo $list["part"]?></td>
									              <td><?php echo $list["type_of_contract"]?></td>
									              <td><?php echo $list["role"]?></td>
									              <td><?php echo $list["employed_code"]?></td>
									              <td><?php echo $list["rank"]?></td>
									              <td><?php echo $list["level"]?></td>
									              <td><?php echo $list["salary"] ?></td>
									              <td>
									              		<button 
									              			name="<?= $list['name']; ?>"
									              			part="<?= $list['part']; ?>"
									              			type_of_contract="<?= $list['type_of_contract']; ?>"
									              			role="<?= $list['role']; ?>"
									              			employed_code="<?= $list['employed_code']; ?>"
									              			rank="<?= $list['rank']; ?>"
									              			level="<?= $list['level']; ?>"
									              			salary="<?= $list['salary']; ?>" 		 
									              			date_start_contract="<?= $list['date_start_contract']; ?>"
									              			date_end_contract="<?= $list['date_end_contract']; ?>"
									              			bonus="<?= $list['bonus']; ?>"
									     								      
									              			type="button" class="view btn btn-primary" data-toggle="modal" data-target="#View">
														  View
														</button>

														<!-- Modal -->
														<?php include('modal_list.php') ?>
									              </td>
									              <td>
									              		<!-- Button trigger modal -->
														<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">
														  Delete
														</button>

														<!-- Modal -->
														<?php include('modal_delete.php') ?>
									              </td>
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
		$(".view").on("click",function(){
			var name = $(this).attr('name');
		 	$("#name").val(name);

		 	var part = $(this).attr('part');
		 	$("#part").val(part);

			var type_of_contract = $(this).attr('type_of_contract');
		 	$("#type_of_contract").val(type_of_contract);

			var role = $(this).attr('role');	
		 	$("#role").val(role);

		 	var employed_code = $(this).attr('employed_code');
		 	$("#employed_code").val(employed_code);

		 	var rank = $(this).attr('rank');
		 	$("#rank").val(rank);

			var level = $(this).attr('level');
			$("#level").val(level);

		 	var salary = $(this).attr('salary');
		 	$("#salary").val(salary);

			var date_start_contract = $(this).attr('date_start_contract');
			$("#date_start_contract").val(date_start_contract);

			var date_end_contract = $(this).attr('date_end_contract');
			$("#date_end_contract").val(date_end_contract);

			var bonus = $(this).attr('bonus');
		 	$("#bonus").val(bonus);
		 	console.log(bonus);
		});
	});	
</script>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>
