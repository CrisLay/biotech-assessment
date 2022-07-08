<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['cashier_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Cashier Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="cashier_update.php">
				<input type="hidden" class="form-control" name="cashier_id" value="<?php echo $row['cashier_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cashier ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="cashier_id" value="<?php echo $row['cashier_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_fname" value="<?php echo $row['cash_fname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_lname" value="<?php echo $row['cash_lname']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Username:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_user" value="<?php echo $row['cash_user']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cash_pass" value="<?php echo $row['cash_pass']; ?>">
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

