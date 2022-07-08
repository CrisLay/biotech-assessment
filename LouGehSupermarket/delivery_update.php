<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $delivery_id =  $_POST['delivery_id'];
        $supplier_name =  $_POST['supplier_name'];
        $stock_decs = $_POST['stock_decs'];
        $stock_quan = $_POST['stock_quan'];
        $cost_per_unit =  $_POST['cost_per_unit'];
        $sql = "UPDATE  delivery_transacs SET delivery_id = '$delivery_id', supplier_name = '$supplier_name', stock_decs = '$stock_decs', stock_quan = '$stock_quan', cost_per_unit = '$cost_per_unit'   WHERE delivery_id = '$delivery_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:delivery.php?addeditem=success");
    
?>


