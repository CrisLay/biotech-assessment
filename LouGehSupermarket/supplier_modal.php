<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add new Supplier</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_insert.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Unique Code:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="unique_code" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="company_name">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company No:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="company_no" required >
					</div>
				</div>


				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Street Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_street" required >
					</div>
				</div>
            
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label"> Company Barangay.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_brgy" required >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">City/Province.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="company_city" required >
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

