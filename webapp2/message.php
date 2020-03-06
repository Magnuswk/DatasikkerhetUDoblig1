<?php  

$db_name = "commentdb";  
$mysql_user = "root";  
$mysql_pass = "Cyber&sec&g11";  
$server_name = "localhost";  

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);

if($con) {
    echo ("connection success");
 }

 else {
    echo ("connection failed");
 }

$sql = mysqli_query($con, " SELECT * FROM post ");

if($sql)
{
    while($row = mysqli_fetch_array($sql))
    {
        $message[] = $row; 
    }

    //print(json_encode($message));
    print(json_encode($message));

}

mysqli_close($con);

?>  