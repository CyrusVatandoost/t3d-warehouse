<div class="modal fade" id="modal-container-delete-announcement" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Delete Announcement</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
			</div>

      <div class="modal-body">
        <p>
        	Are you sure you want to delete "{{ $announcement->name }}"?
        </p>
      </div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="{{ url('announcement/delete/'.$announcement->announcement_id) }}">Delete</a>
			</div>

		</div>
	</div>
</div>