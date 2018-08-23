<?php include 'views/user/common/header.php';?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kỹ năng bản thânc</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="user.php?controller=user&action=edit_skill" role="form" method="post">
                                        <div class="row">
                                            <div class="col-lg-6
                                            ">    
                                                <div class="form-group">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['name']) ? $error['name'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kỹ năng mềm</label>
                                                    <input type="text" name="soft_skill" class="form-control" value="<?php  echo  $data['soft_skill'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['soft_skill']) ? $error['soft_skill'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Language</label>
                                                    <input type="text" name="language_work" class="form-control" value="<?php  echo  $data['language_work'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['language_work']) ? $error['language_work'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Level_language</label>
                                                    <input type="text" name="level_language" class="form-control" value="<?php  echo  $data['level_language'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['level_language']) ? $error['level_language'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>DB</label>
                                                    <input type="text" name="DB" class="form-control" value="<?php echo $data['DB'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['DB']) ? $error['DB'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Level_DB</label>
                                                    <input type="text" name="level_DB" class="form-control" value="<?php  echo  $data['level_DB'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['level_DB']) ? $error['level_DB'] : ''; ?></p>
                                                </div>  
                                                <div class="form-group">
                                                    <label>Technology</label>
                                                    <input type="text" name="technology" class="form-control" value="<?php  echo  $data['technology'];?>">
                                                    <p class="validate form-group"><?php echo isset($error['technology']) ? $error['technology'] : ''; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Level_technology</label>
                                                    <input type="text" name="level_technology" class="form-control" value="<?php  echo  $data['level_technology'];?>">
                                                     <p class="validate form-group"><?php echo isset($error['level_technology']) ? $error['level_technology'] : ''; ?></p>
                                                </div>
                                                <div align="center">
                                                     <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <button type="submit" class="btn btn-default" name="edit_skill">Sửa</button>
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
