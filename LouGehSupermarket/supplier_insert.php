<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $unique_code =  $_REQUEST['unique_code'];
        $company_name =  $_REQUEST['company_name'];
        $company_no = $_REQUEST['company_no'];
        $company_street =  $_REQUEST['company_street'];
        $company_brgy = $_REQUEST['company_brgy'];
        $company_city = $_REQUEST['company_city'];
        $sql = "INSERT INTO supplier_infos (unique_code,company_name,company_no,company_street,company_brgy,company_city)
         VALUES ('$unique_code','$company_name','$company_no','$company_street','$company_brgy','$company_city')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:supplier.php?addeditem=success");
    
?>

