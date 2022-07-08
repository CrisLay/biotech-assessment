<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $cashier_id =  $_POST['cashier_id'];
        $cash_fname =  $_POST['cash_fname'];
        $cash_lname = $_POST['cash_lname'];
        $cash_user =  $_POST['cash_user'];
        $cash_pass = $_POST['cash_pass'];
        $sql = "UPDATE  cashier_logs SET cashier_id = '$cashier_id', cash_fname = '$cash_fname', cash_lname = '$cash_lname', cash_user = '$cash_user', cash_pass = '$cash_pass'  WHERE cashier_id = '$cashier_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:cashier.php?addeditem=success");
    
?>


