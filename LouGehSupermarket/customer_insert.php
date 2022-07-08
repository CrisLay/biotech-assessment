<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $cus_fname =  $_REQUEST['cus_fname'];
        $cus_iname =  $_REQUEST['cus_iname'];
        $cus_lname = $_REQUEST['cus_lname'];
        $cus_no = $_REQUEST['cus_no'];
        $cus_street =  $_REQUEST['cus_street'];
        $cus_brgy = $_REQUEST['cus_brgy'];
        $cus_city = $_REQUEST['cus_city'];
        $sql = "INSERT INTO customer_infos (cus_fname,cus_iname,cus_lname,cus_no,cus_street,cus_brgy,cus_city)
         VALUES ('$cus_fname','$cus_iname','$cus_lname','$cus_no','$cus_street','$cus_brgy','$cus_city')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:customer.php?addeditem=success");
    
?>

