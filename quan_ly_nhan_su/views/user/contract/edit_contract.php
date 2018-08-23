<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hợp đồng lao động</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_contract" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6
                                            ">    
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bộ phận</label>
                                                    <input type="text" name="part" class="form-control" value="<?php  echo  $data['part'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Loại hợp đồng</label>
                                                    <input type="text" name="type_of_contract" class="form-control" value="<?php echo $data['type_of_contract'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['type_of_contract']) ? $error['type_of_contract'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <input type="text" name="role" class="form-control" value="<?php  echo  $data['role'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mã nhân viên</label>
                                                    <input type="text" name="employed_code" class="form-control" value="<?php echo $data['employed_code'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['employed_code']) ? $error['employed_code'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Rank</label>
                                                    <input type="text" name="rank" class="form-control" value="<?php  echo  $data['rank'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['rank']) ? $error['rank'] : ''; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">  
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <input type="text" name="level" class="form-control" value="<?php  echo  $data['level'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['level']) ? $error['level'] : ''; ?></p>
                                                </div> 
                                                <div class="form-group">
                                                    <label>Lương</label>
                                                    <input type="text" name="salary" class="form-control" value="<?php  echo  $data['salary'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['salary']) ? $error['salary'] : ''; ?></p>
                                                </div> 
                                                <div class="form-group">
                                                    <label>Ngày ký hợp đồng</label>
                                                    <input type="date" name="date_start_contract" class="form-control" value="<?php echo $data['date_start_contract'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['date_start_contract']) ? $error['date_start_contract'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày hết hạn hợp đồng</label>
                                                    <input type="date" name="date_end_contract" class="form-control" value="<?php echo $data['date_end_contract'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['date_end_contract']) ? $error['date_end_contract'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Thưởng</label>
                                                    <input type="text" name="bonus" class="form-control" value="<?php  echo  $data['bonus'];?>">
                                                </div>
                                            </div>    
                                        </div>      
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <div align="center">
                                            <button type="submit" class="btn btn-default" name="edit_contract">Sửa</button>
                                        </div>
                                    </form>
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
</div>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
