<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Do you want to delete employee information?</h4>
        <input type="hidden" name="id" id="id" value="id" >
      </div>
      <div class="modal-footer">
      	<a  class="btn btn-danger link" href=
         "admin.php?controller=admin&action=delete_info_user&id="
        >Yes</a>
      	<a class="btn btn-primary" data-dismiss="modal">No</a>
        <a class="btn btn-default" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
      $('.link').click(function(){
          var id = $('#id').val();
          var link = "admin.php?controller=admin&action=delete_info_user&id=" + id;
          $(".link").attr("href", link);  
        });      
    });  
</script>