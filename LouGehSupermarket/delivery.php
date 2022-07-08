<?php
     include('header.php');
     include('nav.php');
       include('sidebar.php');
       include_once('con_db.php');
?>

<div class="container">
	<h1 class=" text-center">Delivery Transaction</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>


			<div class="row">
			
	
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
                <th>ID</th>
                <th>Supplier Name</th>
                <th>Stock Description</th>
                <th>Stock Quantity</th>
                <th>Stock Cost per Unit</th>
                
                       
					</thead>
					<tbody>
						<?php
							include_once('con_db.php');
							$sql = "SELECT * FROM delivery_transacs";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
                                <td>".$row["delivery_id"]."</td> 
                                <td>".$row["supplier_name"]."</td> 
                                <td>".$row["stock_decs"]."</td> 
                                <td>".$row["stock_quan"]."</td>
                                <td>".$row["cost_per_unit"]."</td>
                               
                    
                  
									<td>
										<a href='#edit_".$row['delivery_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
									
									</td>
								</tr>";
								include('delivery_updatemodal.php');
							}
				

						?>
					</tbody>
				</table>
        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
			</div>
		</div>
	</div>
  
</div>
<?php include('delivery_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
$(document).ready(function(){

    $('#myTable').DataTable();

  
});
</script>


 </section>
 

  <?php

?>


</body>
</html>

