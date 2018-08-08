<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														  <div class="modal-dialog" role="document">
														    <div class="modal-content">
														      <div class="modal-header">
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														        <h4 class="modal-title" id="myModalLabel">Do you want to delete employee information?</h4>
														      </div>
														      <div class="modal-footer">
														      	<a class="btn btn-danger" href=<?php echo "admin.php?controller=users&action=delete_info_user&id=".$list['id'] ?>>Yes</a>
														      	<a class="btn btn-primary" data-dismiss="modal">No</a>
														        <a class="btn btn-default" data-dismiss="modal">Close</a>
														      </div>
														    </div>
														  </div>
														</div>