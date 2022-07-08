<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['sup_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Supplier Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_update.php">
				<input type="hidden" class="form-control" name="sup_id" value="<?php echo $row['sup_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Supplier ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="sup_id" value="<?php echo $row['sup_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Unique Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="unique_code" value="<?php echo $row['unique_code']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_name" value="<?php echo $row['company_name']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company No:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_no" value="<?php echo $row['company_no']; ?>">
					</div>
				</div>
                
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Street name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_street" value="<?php echo $row['company_street']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Barangay:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_brgy" value="<?php echo $row['company_brgy']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company City/Province:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_brgy" value="<?php echo $row['company_brgy']; ?>">
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

