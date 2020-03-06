<?php  

$db_name = "commentdb";  
$mysql_user = "root";  
$mysql_pass = "Cyber&sec&g11";  
$server_name = "localhost";  

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name) or die ('Unable to connect');

$result = mysqli_query($con,$sql_query);  

$response = array();

if(mysqli_num_rows($result) > 0 )  { 

    $response['success'] = 1;
    $comment = array();

    while($row = mysqli_fetch_assoc($result)) {

        array_push($comment, $row);

    }

     /*$row = mysqli_fetch_assoc($result);  
     $name =$row["name"];  
     echo "Login Success..Welcome ".$name;*/  

}  

else {   

    //echo "Login Failed.......Try Again.."; 
    $response['success'] = 0;
    $response['message'] = 'No data';
      
}  

json_encode($response);
mysqli_close();

?>  