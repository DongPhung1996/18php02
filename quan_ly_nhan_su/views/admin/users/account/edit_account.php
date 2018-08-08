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
                                    <form action="admin.php?controller=users&action=edit_account" role="form" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $data['username'];?>">
                                            <p class="validate form-group"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="<?php  echo  $data['email'];?>">
                                            <p class="validate form-group"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>
                                        </div>
<!--                                    <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" class="form-control">
                                                <option value="1" <?php echo $data['role'] == 1 ? 'selected' : '' ?> >Admin</option>
                                                <option value="2" <?php echo $data['role'] == 2 ? 'selected' : '' ?> >User</option>
                                            </select>                 
                                        </div> -->
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <button type="submit" class="btn btn-default" name="edit_user">Edit user</button>
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
