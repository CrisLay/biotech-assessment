<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add new Customer</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="customer_insert.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cus_fname" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Middle Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cus_iname">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cus_lname" required >
					</div>
				</div>


				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer No.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cus_no" required >
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Street Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_street" required >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Barangay.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_brgy" required >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">City/Province.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cus_city" required >
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

