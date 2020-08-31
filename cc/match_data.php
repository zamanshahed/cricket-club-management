<!DOCTYPE html>
<html lang="en" class="animated zoomIn">

<?php
	
	if (isset($_POST['submit'])) {

		/**echo "submit clicked, starting connection..";**/

		include_once "connection.php";

		
		/*
		*	contract_data
		*/
		$event_id = $_POST['event_id'];
		$vanue_id = $_POST['vanue_id'];
		$match_date = $_POST['match_date'];
		$match_id = $_POST['match_id'];
		$man_of_the_match = $_POST['man_of_the_match'];
		$umpire = $_POST['umpire'];
		
		$error_message = '';
		
		//check if all NOT Null variables are inserted properly
		//id check//
		if(empty($match_id)){

			$error_message = $error_message.'\n +[ match_id ] ';

		}

		if (empty($vanue_id)) {
						
			$error_message = $error_message.'\n +[ vanue_id ] ';
			
		}
		if (empty($match_date)) {
						
			$error_message = $error_message.'\n +[ match_date ] ';
		}



		if (empty($error_message)) {

			echo "........variables created, starting to INSERT contract_data...";
			$query_0 = "INSERT INTO match_data(event_id, vanue_id, match_date, match_id, man_of_the_match, umpire) VALUES ('$event_id', '$vanue_id', '$match_date', '$match_id', '$man_of_the_match', '$umpire')";

				if ($conn->query($query_0) === TRUE) {
					echo "contract_data INSERT done...starting INSERT payment_sch...";
				} else {
				echo "Error in $query_0: ";
				}
						
			$conn->close();
			header('Location: http://127.0.0.1/121/'); 
		}
		
		else{

		$error_message = $error_message.'\n  THE VALUE(S) CAN NOT BE EMPTY.\n Please fill up them carefully, and submit again.';
		/*echo ''.$error_message;*/
		echo "<script type='text/javascript'>alert('List of empty values: $error_message');</script>";
		}
	}
?>

<head>
	
	<title>Match Data</title>

</head>
	<title>Match Data</title>
	<Link rel="stylesheet" type="text/css" href="stylish2.css">
 	<link rel="stylesheet" type="text/css" href="css/animated.css">
 	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Match Data</h1>
	<div>

	<form method="post" action="match_data.php">

		<p class="normal_text">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>


		<div class="input-group">
			<label>Match Info:</label>
			<table >
				<tr>
					<th>*Event ID*</th>
					<th>*Vanue ID*</th>
					<th>*Match Date*</th>
					
				</tr>

				<tr>
					<td><input type="number" name="event_id" ></td>
					<td><input type="text" name="vanue_id" ></td>
					<td><input type="date" name="match_date" ></td>
					
				</tr>

				<tr>
					<th>*Match ID*</th>					
					<th>Man of The Match</th>
					<th>Umpire</th>
					
				</tr>

				<tr>
					<td><input type="number" name="match_id" ></td>
					<td><input type="text" name="man_of_the_match" ></td>
					<td><input type="text" name="umpire" ></td>
					
				</tr>

			</table>

		</div>


		<div >
			<button type="submit" class="btn" name="submit">SUBMIT</button>
		</div>

		<div class="logo">
			<a href="http://127.0.0.1/land/" ><img src="http://127.0.0.1/land/img/home/mipmap-xxhdpi/home.png" alt="GO"></a>
		</div>
	
	</form>
	
 </body>

</html>