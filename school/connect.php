<?php
	//php code here
	$server = "localhost";
	$user = "colab";
	$pass = "Qaz123456789-";
	$dbname = "project";

	$con = new MySQLi($server, $user, $pass, $dbname);

	if ($con->connect_error) 
		echo "Error: ".$con->connect_error;
	else
		echo "Connect successfully";

?>
