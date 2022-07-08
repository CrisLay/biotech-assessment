<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Admin Credentials</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="admin_update.php">
				<input type="hidden" class="form-control" name="admin_id" value="<?php echo $row['admin_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Admin ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="admin_id" value="<?php echo $row['admin_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Username :</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="username" value="<?php echo $row['username']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="pass" value="<?php echo $row['pass']; ?>">
					</div>
                </div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

