 <?php  
   require "init.php";  
   $navn = $_POST['navn'];  
   $email = $_POST['email'];  
   $studieretning = $_POST['studieretning'];
   $kull = $_POST['kull'];
   $passord = $_POST['passord'];


   $sql_query = "INSERT INTO `user` (`name`, `email`, `studieretning`, `kull`, `password`) VALUES ('$navn','$email','$studieretning','$kull','$passord')";  

   if(mysqli_query($con, $sql_query)) {
      echo ("registered successfully");
   }

   else {
      echo ("error in registration");
   }
 ?>