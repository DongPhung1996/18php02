<?php include 'views/admin/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit user</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="admin.php?controller=admin&action=edit_info_user" role="form" method="post">
                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                             <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày sinh</label>
                                            <input type="date" name="date_of_birth" class="form-control" value="<?php  echo  $data['date_of_birth'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Số cmnd</label>
                                            <input type="text" name="id_card" class="form-control" value="<?php echo $data['id_card'];?>">
                                            <p class="validate form-group"><?php echo isset($error['id_card']) ? $error['username'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày cấp</label>
                                            <input type="date" name="date_range" class="form-control" value="<?php  echo  $data['date_range'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'];?>">
                                            <p class="validate form-group"><?php echo isset($error['phone']) ? $error['phone'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="<?php  echo  $data['email'];?>">
                                            <p class="validate form-group"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Skype</label>
                                            <input type="text" name="skype" class="form-control" value="<?php  echo  $data['skype'];?>">
                                            <p class="validate form-group"><?php echo isset($error['skype']) ? $error['skype'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính</label>
                                            <select name="gender" class="form-control">
                                                <option value="1" <?php echo $data['gender'] == 1 ? 'selected' : '' ?> >Nam</option>
                                                <option value="2" <?php echo $data['gender'] == 0 ? 'selected' : '' ?> >Nữ</option>
                                            </select>     
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <input type="text" name="address" class="form-control" value="<?php  echo  $data['address'];?>">
                                             <p class="validate form-group"><?php echo isset($error['address']) ? $error['address'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Quốc tịch</label>
                                            <input type="text" name="nationality" class="form-control" value="<?php echo $data['nationality'];?>">
                                             <p class="validate form-group"><?php echo isset($error['nationality']) ? $error['nationality'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Tình trạng hôn nhân</label>
                                            <select name="maried" class="form-control">
                                                <option value="1" <?php echo $data['maried'] == 1 ? 'selected' : '' ?> > Có </option>
                                                <option value="2" <?php echo $data['maried'] == 0 ? 'selected' : '' ?> > Không </option>
                                            </select>     
                                        </div>
                                        <div class="form-group">
                                            <label>Passport No</label>
                                            <input type="text" name="passport_no" class="form-control" value="<?php echo $data['passport_no'];?>">
                                            <p class="validate form-group"><?php echo isset($error['passport_no']) ? $error['passport_no'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Passport ngày cấp</label>
                                            <input type="date" name="passport_date" class="form-control" value="<?php  echo  $data['passport_date'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Passport nơi cấp</label>
                                            <input type="text" name="passport_where" class="form-control" value="<?php echo $data['passport_where'];?>">
                                             <p class="validate form-group"><?php echo isset($error['passport_where']) ? $error['passport_where'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Số sổ bảo hiểm</label>
                                            <input type="text" name="number_of_insurrance" class="form-control" value="<?php  echo  $data['number_of_insurrance'];?>">
                                            <p class="validate form-group"><?php echo isset($error['number_of_insurrance']) ? $error['number_of_insurrance'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày cấp sổ</label>
                                            <input type="date" name="date_range_insurrance" class="form-control" value="<?php echo $data['date_range_insurrance'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nơi cấp sổ</label>
                                            <input type="text" name="issued_by" class="form-control" value="<?php  echo  $data['issued_by'];?>">
                                            <p class="validate form-group"><?php echo isset($error['number_of_insurrance']) ? $error['number_of_insurrance'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Số tài khoản</label>
                                            <input type="text" name="bank_account" class="form-control" value="<?php  echo  $data['bank_account'];?>">
                                            <p class="validate form-group"><?php echo isset($error['bank_account']) ? $error['bank_account'] : ''; ?></p>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <button type="submit" class="btn btn-default" name="edit_info_user">Edit info</button>
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
<?php include 'views/admin/common/footer.php';?>
