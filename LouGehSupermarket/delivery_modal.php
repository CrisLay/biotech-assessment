<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add new Transaction</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="delivery_insert.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Supplier Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="supplier_name" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stock_decs">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock Quantity:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stock_quan" required >
					</div>
				</div>


				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cost Per Unit:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0.00" max="10000.00" step="0.001" class="form-control" name="cost_per_unit" required >
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

