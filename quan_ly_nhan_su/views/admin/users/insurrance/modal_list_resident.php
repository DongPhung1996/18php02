<!-- Modal -->
<div class="modal fade" id="Resident" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thông tin sổ hộ khẩu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Họ tên:</label>
                    <input type="text" id="name" name="name" class="form-control" disabled="disabled" />
                </div>
                <div class="form-group">
                    <label>Chủ Hộ:</label>
                    <input type="text" id="host" name="host" class="form-control" disabled="disabled"/>
                </div>
                <div class="form-group">
                    <label>Mã số bảo hiểm nếu có:</label>
                    <input type="text" id="id_residence" name="id_residence" class="form-control" disabled="disabled"/>
                </div>
                <div class="form-group">
                    <label>Ngày sinh:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" disabled="disabled"/>
                </div>    
                <div class="form-group">
                    <label>Giới tính:</label>
                    <input type="text" id="gender" name="gender" class="form-control" disabled="disabled"/>
                </div>    
             </div>
             <div class="col-lg-6">
                <div class="form-group">
                    <label>Phường/xã/tỉnh/TP:</label>
                    <input type="text" id="issued_by" name="issued_by" class="form-control" disabled="disabled" />
                </div>
                <div class="form-group">
                    <label>Thôn/xóm/số nhà</label>
                    <input type="text" id="address" name="address" class="form-control" disabled="disabled"/>
                </div>
                <div class="form-group">
                    <label>Mối quan hệ với chủ hộ:</label>
                    <input type="text" id="relationship" name="relationship" class="form-control" disabled="disabled"/>
                </div>
                <div class="form-group">
                    <label>Số CMT/Thẻ căn cước:</label>
                    <input type="text" id="id_card" name="id_card" class="form-control" disabled="disabled"/>
                </div>    
                <div class="form-group">
                    <label>Note:</label>
                    <input type="text" id="note" name="note" class="form-control" disabled="disabled"/>
                </div>   
             </div>    
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>