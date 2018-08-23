<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kinh nghiệm làm việc</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_experience" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6
                                            ">    
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nơi làm việc</label>
                                                    <input type="text" name="address_work" class="form-control" value="<?php  echo  $data['address_work'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['address_work']) ? $error['address_work'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Thời gian làm việc</label>
                                                    <input type="text" name="time_work" class="form-control" value="<?php echo $data['time_work'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['time_work']) ? $error['time_work'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Language</label>
                                                    <input type="text" name="language_work" class="form-control" value="<?php  echo  $data['language_work'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['language_work']) ? $error['language_work'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>DB</label>
                                                    <input type="text" name="DB" class="form-control" value="<?php echo $data['DB'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['DB']) ? $error['DB'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Technology</label>
                                                    <input type="text" name="technology" class="form-control" value="<?php  echo  $data['technology'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['technology']) ? $error['technology'] : ''; ?></p>
                                                </div>
                                                <div align="center">
                                                     <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <button type="submit" class="btn btn-default" name="edit_experience">Sửa</button>
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
