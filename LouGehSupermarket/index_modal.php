<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add new Item</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="item_insert.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Barcode:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="barcode" >
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Description.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="prod_des" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Quantity:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="prod_quan" required >
					</div>
				</div>


				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cost Per Item:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="prod_costperunit" required>
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