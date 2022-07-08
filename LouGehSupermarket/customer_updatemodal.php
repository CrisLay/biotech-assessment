<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['cust_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Customer Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="customer_update.php">
				<input type="hidden" class="form-control" name="cust_id" value="<?php echo $row['cust_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="cust_id" value="<?php echo $row['cust_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_fname" value="<?php echo $row['cus_fname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Middle Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_iname" value="<?php echo $row['cus_iname']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_lname" value="<?php echo $row['cus_lname']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact number::*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cus_no" value="<?php echo $row['cus_no']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Street name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_street" value="<?php echo $row['cus_street']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Barangay:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_brgy" value="<?php echo $row['cus_brgy']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">City/ Province:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_city" value="<?php echo $row['cus_city']; ?>">
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

