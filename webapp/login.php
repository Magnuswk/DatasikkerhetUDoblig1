<?php  
    require "init.php";  

    $email = $_POST["login_email"];  
    $passord =  $_POST["login_passord"];  
    $sql_query = "SELECT name FROM `user` WHERE email LIKE '$email' AND password LIKE '$passord';";  
    $result = mysqli_query($con,$sql_query);  

    if(mysqli_num_rows($result) > 0 )  { 
        $row = mysqli_fetch_assoc($result);  
        echo "Login Success..";  
    }else{   
        echo "Login Failed.......Try Again..";     
    }  
?>  
