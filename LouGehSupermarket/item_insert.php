<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $barcode =  $_REQUEST['barcode'];
        $prod_des = $_REQUEST['prod_des'];
        $prod_quan =  $_REQUEST['prod_quan'];
        $prod_costperunit = $_REQUEST['prod_costperunit'];
        $sql = "INSERT INTO item_infos (barcode,prod_des,prod_quan,prod_costperunit)
         VALUES ('$barcode','$prod_des','$prod_quan','$prod_costperunit')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:index.php?addeditem=success");
    
?>


