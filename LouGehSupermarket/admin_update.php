<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
        $admin_id =  $_POST['admin_id'];
        $username =  $_POST['username'];
        $pass = $_POST['pass'];
        $sql = "UPDATE  admin_logs SET admin_id = '$admin_id', username = '$username', pass = '$pass' WHERE admin_id = '$admin_id'";
       
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:admin.php?addeditem=success");
    
?>


