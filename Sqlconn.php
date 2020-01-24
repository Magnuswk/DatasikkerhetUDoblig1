<?php
	include('dbconfig.php');

	$db_connect = new mysqli($host, $username, $dbname, $password);

    //Print error message if no connection
	if($db_connect->connect_error) {
		die($db_connect->connect_errno. ": ".$db_connect->connect_error);
	}
?>