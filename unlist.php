<?php
include 'db.php';
    
    
    
    if(isset($_POST['how'])){
         $token_id = $_POST['data']; 
         session_start();

        $user = $_SESSION['username'];

    

        $query = "delete from `post` where token_id = $token_id and username = '$user'" ;

        
        

        $res = mysqli_query($con,$query);
        if(mysqli_num_rows($res) == 1){
            echo"selected";
        }
    }
    
?>