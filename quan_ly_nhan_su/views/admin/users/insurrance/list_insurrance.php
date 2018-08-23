<?php 
include 'views/admin/common/header.php';
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
							      <div class="row">
								        <table class="table" border="1">
								          <thead>
								            <tr>
								              <th>STT</th>
								              <th>Họ và tên</th>
								              <th>Ngày sinh</th>
								              <th>Bảo hiểm đã cấp</th>
								              <th>Giới tính</th>
								              <th>Nơi cấp giấy khai sinh</th>
								              <th>Địa chỉ đăng ký hộ khẩu</th>
								              <th>Thông tin sổ hộ khẩu</th>	
								              <th>Đăng ký nơi khám bệnh</th>
								              <th>Action</th>
								            </tr>
								          </thead>
								          <tbody>
                                              <?php $stt = 1 ?>
								              <?php foreach ($data as $list) { ?>
                                              <tr>
                                                 <td><?php echo $stt++ ?></td>
                                                 <td><?php echo $list['name'] ?></td>
                                                 <td><?php echo $list['date_of_birth'] ?></td>
                                                 <td><?php echo ($list['check_insurrance_book'] == 1) ? "Có" : "Không" ?></td>
                                                 <td><?php echo ($list['gender'] == 1) ? "Nam" : "Nữ" ?></td>
                                                 <td><?php echo $list['place_of_birth_certificate'] ?></td>
                                                 <td><?php echo $list['registed_residence_address'] ?></td>
                                                 <td>
                                                    <?php foreach ($dataResident as $listResident) { ?> 
                                                    <button 
                                                    name="<?= $list['name']; ?>"
                                                    host="<?= $listResident['host']; ?>"
                                                    id_residence="<?= $listResident['id_residence']; ?>" 
                                                    date_of_birth="<?= $list['date_of_birth']; ?>"
                                                    gender="<?= $listResident['gender']; ?>"
                                                    issued_by="<?= $listResident['issued_by']; ?>"
                                                    address="<?= $listResident['address']; ?>"
                                                    relationship="<?= $listResident['relationship']; ?>"
                                                    id_card="<?= $listResident['id_card']; ?>"
                                                    note="<?= $listResident['note']; ?>"
                                                    type="button" class="btn btn-default viewResident" data-toggle="modal" data-target="#Resident">
                                                      Chi tiết
                                                    </button>
                                                    <?php include 'modal_list_resident.php' ?>
                                                    <?php } ?>
                                                </td>
                                                 <td>
                                                    <?php foreach ($dataClinic as $listClinic) { ?>    
                                                    <button 
                                                    city="<?= $listClinic['city_of_province']; ?>" 
                                                    district="<?= $listClinic['district_or_town']; ?>"
                                                    hospital="<?= $listClinic['hospital']; ?>"
                                                    address_examination="<?= $listClinic['address_examination']; ?>"
                                                    type="button" class="btn btn-default viewClinic" data-toggle="modal" data-target="#Clinic">
                                                      Chi tiết
                                                    </button>
                                                    <?php include 'modal_list_clinic.php' ?>
                                                    <?php } ?>
                                                </td>
                                                 <td>
                                                    <button class="btn btn-danger delete" data-toggle="modal" data-target="#Delete" key="<?= $list['id'] ?>">
                                                          Xóa
                                                        </button>
                                                    <?php include('modal_delete_insurrance.php') ?>
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
        });
        //Progess Resident
        $('.viewResident').click(function(){
            var name = $(this).attr('name');
            $('#name').val(name);
            var host = $(this).attr('host');
            $('#host').val(host);
            var id_residence = $(this).attr('id_residence');
            $('#id_residence').val(id_residence);
            var date_of_birth = $(this).attr('date_of_birth');
            $('#date_of_birth').val(date_of_birth);
            var gender = $(this).attr('gender');
            if (gender == 1) {
                $("#gender").val("Nam");
            } else {
                $("#gender").val("Nữ");
            }
            var issued_by = $(this).attr('issued_by');
            $('#issued_by').val(issued_by);
            var address = $(this).attr('address');
            $('#address').val(address);
            var relationship = $(this).attr('relationship');
            $('#relationship').val(relationship);
            var id_card = $(this).attr('id_card');
            $('#id_card').val(id_card);
            var note = $(this).attr('note');
            $('#note').val(note);
        });
        //Progess Clinic
        $('.viewClinic').click(function(){
            var city = $(this).attr('city');
            $('#city').val(city);
            var district = $(this).attr('district');
            $('#district').val(district);
            var hospital = $(this).attr('hospital');
            $('#hospital').val(hospital);
            var address_examination = $(this).attr('address_examination');
            $('#address_examination').val(address_examination);
        });
    });
</script>
<?php include 'views/admin/common/footer.php';?>
