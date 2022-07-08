<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $supplier_name =  $_REQUEST['supplier_name'];
        $stock_decs =  $_REQUEST['stock_decs'];
        $stock_quan = $_REQUEST['stock_quan'];
        $cost_per_unit = $_REQUEST['cost_per_unit'];
        $sql = "INSERT INTO delivery_transacs (supplier_name,stock_decs,stock_quan,cost_per_unit)
         VALUES ('$supplier_name','$stock_decs','$stock_quan','$cost_per_unit')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:delivery.php?addeditem=success");
    
?>

