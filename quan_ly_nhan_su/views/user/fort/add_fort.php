<?php 
include 'views/user/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1  class="page-header">Đơn xin nghỉ việc</h1>
        </div>
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="row">
                                    <div class="col-lg-6">
                                        <form action="user.php?controller=user&action=add_fort" role="form" method="post">
                                            <div class="form-group">
                                                <label>Họ và tên</label>
                                                <input type="text" name="name" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Loại hợp đồng</label>
                                                <input type="text" name="type_of_contract" class="form-control" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Thâm niên</label>
                                                <input type="text" name="seniority" class="form-control" value="">
                                            </div>
                                           <div class="form-group">
                                                <label>Check hoàn asset</label>
                                                <select name="check_asset" class="form-control">
                                                    <option value="1">Chưa</option>
                                                    <option value="2">Rồi</option>
                                                </select>                 
                                            </div> 
                                            <div class="form-group">
                                                <label>Ngày mong muốn nghỉ</label>
                                                <input type="date" name="date_off" class="form-control" value="">
                                            </div> 
                                            <div class="form-group">
                                                <label>Lý do nghỉ</label>
                                                <input type="text" name="reason_off" class="form-control" value="">
                                            </div> 
                                            <div class="form-group">
                                                <label>Trả sổ bảo hiểm chưa</label>
                                                <select name="check_isurrance" class="form-control">
                                                    <option value="1">Chưa</option>
                                                    <option value="2">Rồi</option>
                                                </select>                 
                                            </div> 
                                            <input type="hidden" name="id" value="">
                                            <div align="center">
                                                 <button type="submit" class="btn btn-default" name="add_fort">Nộp đơn</button>
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
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/user/common/footer.php';?>
