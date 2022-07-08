<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $sup_id =  $_POST['sup_id'];
        $unique_code =  $_POST['unique_code'];
        $company_name =  $_POST['company_name'];    
        $company_no = $_POST['company_no'];
        $company_street = $_POST['company_street'];
        $company_brgy = $_POST['company_brgy'];
        $company_city = $_POST['company_city'];
        $sql = "UPDATE  supplier_infos SET sup_id = '$sup_id',unique_code = '$unique_code', company_name = '$company_name', company_street = '$company_street', company_brgy = '$company_brgy', company_city = '$company_city' WHERE sup_id = '$sup_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:supplier.php?addeditem=success");
    
?>


