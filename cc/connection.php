<?php 
	
	//declaration
	$server_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "cricket_club";

	//Create connection
	$conn = new mysqli( $server_host, $db_username, $db_pass, $db_name);

	//Check connection
	if(!$conn){
		printf("Errormessage: %s\n", $mysqli->error);
		/*die("connection failed: " .mysqli_connect_error());*/
	}
	/**echo "connection established!";**/
?>