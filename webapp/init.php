<?php  

   $db_name = "commentdb";  
   $mysql_user = "root";  
   $mysql_pass = "Cyber&sec&g11";  
   $server_name = "localhost";  
   $con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
    
   if($con) {
      echo ("connection success");
   }else{
      echo ("connection failed");
   }
?>  