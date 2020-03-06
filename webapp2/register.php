 <?php  

    require "init.php";  


    
      $name = $_POST['name'];  
      $user_name = $_POST['user_name'];  
      $user_pass = $_POST['user_pass'];  
      $sql_query = "INSERT INTO `user_info`(`name`, `user_name`, `user_pass`) VALUES ('$name','$user_name','$user_pass')";  

      if(mysqli_query($con, $sql_query)) {
         echo ("registered successfully");
      }

      else {
         echo ("error in registration");
      }


    
    /*if(mysqli_query($con, $sql)){

         echo "<div class='registrert'><h1> Du er nå registrert! </h1></div>";

      } 

      else {

         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

      }

      // Close connection
      mysqli_close($link);

   }*/
 ?>  