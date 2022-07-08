<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['delivery_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Delivery Transaction</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="delivery_update.php">
				<input type="hidden" class="form-control" name="delivery_id" value="<?php echo $row['delivery_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Delivery ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="delivery_id" value="<?php echo $row['delivery_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Supplier Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="supplier_name" value="<?php echo $row['supplier_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="stock_decs" value="<?php echo $row['stock_decs']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock Quantity:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="stock_quan" value="<?php echo $row['stock_quan']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cost Per Unit:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cost_per_unit" value="<?php echo $row['cost_per_unit']; ?>">
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

