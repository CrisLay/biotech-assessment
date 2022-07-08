<?php
    include'con_db.php';
    if(isset($_POST['submit']))
    {    
 
        $username =  $_REQUEST['username'];
        $pass = $_REQUEST['pass'];
        $sql = "INSERT INTO admin_logs (username,pass)
         VALUES ('$username','$pass')";
         if (mysqli_query($conn, $sql)) {
                echo "New record created successfully !";
         } else {
                echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);

        }
        
        header("Location:admin.php?addeditem=success");
    
?>


