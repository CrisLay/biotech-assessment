<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $item_id =  $_POST['item_id'];
        $barcode =  $_POST['barcode'];
        $prod_des = $_POST['prod_des'];
        $prod_quan =  $_POST['prod_quan'];
        $prod_costperunit = $_POST['prod_costperunit'];
        $sql = "UPDATE  item_infos SET item_id = '$item_id', barcode = '$barcode', prod_des = '$prod_des', prod_quan = '$prod_quan', prod_costperunit = '$prod_costperunit'  WHERE item_id = '$item_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:index.php?addeditem=success");
    
?>


