<?php
require "init.php"; 

$post_id = $_POST['post_id'];  
$user_id = $_POST['user_id'];
$content = $_POST['content'];
$emne = $_POST['emne'];
$date_created = $_POST['date_created'];


$sql_query = "INSERT INTO `post` (`post_id`, `user_id`, `content`, `date_created`, `emne`) VALUES ('$post_id','$user_id','$content','$date_created','$emne')";  

if(mysqli_query($con, $sql_query)) {
   echo ("registered successfully");
}

else {
   echo ("error in registration");
}

?>