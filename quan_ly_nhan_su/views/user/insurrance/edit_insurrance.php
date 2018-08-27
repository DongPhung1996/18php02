<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin bảo hiểm</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_insurrance" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6
                                            ">    
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                    <input type="date" name="date_of_birth" class="form-control" value="<?php  echo  $data['date_of_birth'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['date_of_birth']) ? $error['date_of_birth'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Giới tính</label>
                                                    <select name="gender" class="form-control">
                                                        <option value="1" <?php echo $data['gender'] == 1 ? 'selected' : '' ?> >Nam</option>
                                                        <option value="2" <?php echo $data['gender'] == 0 ? 'selected' : '' ?> >Nữ</option>
                                                    </select>   
                                                </div>
                                                <div class="form-group">
                                                    <label>Bảo hiểm đã câps</label>
                                                    <select name="check_insurrance_book" class="form-control">
                                                        <option value="1" <?php echo $data['check_insurrance_book'] == 1 ? 'selected' : '' ?>>Rồi</option>
                                                        <option value="2" <?php echo $data['check_insurrance_book'] == 0 ? 'selected' : '' ?>>Chưa</option>
                                                    </select>   
                                                </div>
                                                <div class="form-group">
                                                    <label>Nơi cấp giấy khai sinh</label>
                                                    <input type="text" name="place_of_birth_certificate" class="form-control" value="<?php echo $data['place_of_birth_certificate'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['place_of_birth_certificate']) ? $error['place_of_birth_certificate'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ đăng ký hộ khẩu</label>
                                                    <input type="text" name="registed_residence_address" class="form-control" value="<?php  echo  $data['registed_residence_address'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['registed_residence_address']) ? $error['registed_residence_address'] : ''; ?></p>
                                                </div>  
                                                <div align="center">
                                                     <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <button type="submit" class="btn btn-default" name="edit_insurrance">Sửa</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6"></div>
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
