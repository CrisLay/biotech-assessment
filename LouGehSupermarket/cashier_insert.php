<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $cash_fname =  $_REQUEST['cash_fname'];
        $cash_lname = $_REQUEST['cash_lname'];
        $cash_user =  $_REQUEST['cash_user'];
        $cash_pass = $_REQUEST['cash_pass'];
        $sql = "INSERT INTO cashier_logs (cash_fname,cash_lname,cash_user,cash_pass)
         VALUES ('$cash_fname','$cash_lname','$cash_user','$cash_pass')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:cashier.php?addeditem=success");
    
?>


