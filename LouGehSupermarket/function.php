<?php

function check_login($conn){

   if (isset($_SESSION['admin_id'])){
       
        $admin_id = $_SESSION['admin_id'];
        $query = "select * from admin_logs where admin_id = $admin_id limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0){
                    $user_data = mysqli_fetch_assoc($result);
                    return $user_data;
        }
   } 

   header("Location: index.php");
}