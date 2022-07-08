<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $cust_id =  $_POST['cust_id'];
        $cus_fname =  $_POST['cus_fname'];
        $cus_iname = $_POST['cus_iname'];
        $cus_lname = $_POST['cus_lname'];
        $cus_no =  $_POST['cus_no'];
        $cus_street = $_POST['cus_street'];
        $cus_brgy = $_POST['cus_brgy'];
        $cus_city = $_POST['cus_city'];
        $sql = "UPDATE  customer_infos SET cust_id = '$cust_id', cus_fname = '$cus_fname', cus_iname = '$cus_iname', cus_lname = '$cus_lname', cus_no = '$cus_no',cus_street = '$cus_street',cus_brgy = '$cus_brgy',cus_city = '$cus_city'  WHERE cust_id = '$cust_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:customer.php?addeditem=success");
    
?>


