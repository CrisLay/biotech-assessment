<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add new Cashier</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="cashier_insert.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_fname" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_lname" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Username:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_user" required >
					</div>
				</div>


				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_pass" required >
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>