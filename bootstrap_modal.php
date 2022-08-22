<?php include('header.php'); ?>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#viewDetails">Open Small Modal</button>

 <!-- Modal -->
 <div class="modal fade" id="viewDetails" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Image</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>