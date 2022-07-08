<?php
     include('header.php');
     include('nav.php');
       include('sidebar.php');
       include_once('con_db.php');
?>

<div class="container">
	<h1 class=" text-center">Customer Information</h1>
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
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Contact no.</th>
                <th>Street no.</th>
                <th>Barangay</th>
                <th>City/Province</th>

                       
					</thead>
					<tbody>
						<?php
							include_once('con_db.php');
							$sql = "SELECT * FROM customer_infos";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
                                <td>".$row["cust_id"]."</td> 
                                <td>".$row["cus_fname"]."</td> 
                                <td>".$row["cus_iname"]."</td> 
                                <td>".$row["cus_lname"]."</td>
                                <td>".$row["cus_no"]."</td>
                                <td>".$row["cus_street"]."</td>
                                <td>".$row["cus_brgy"]."</td>
                                <td>".$row["cus_city"]."</td>
                    
                    
                    
    
									<td>
										<a href='#edit_".$row['cust_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
									
									</td>
								</tr>";
								include('customer_updatemodal.php');
							}
				

						?>
					</tbody>
				</table>
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
			</div>
		</div>
	</div>
</div>
<?php include('customer_modal.php') ?>

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

