<!DOCTYPE html>
<html lang="en" class="animated zoomIn">

<?php
	
	if (isset($_POST['submit'])) {

		/**echo "submit clicked, starting connection..";**/

		include_once "connection.php";

		
		/*
		*	contract_data
		*/
		$club_id = $_POST['club_id'];
		$team_id = $_POST['team_id'];
		$formation_date = $_POST['formation_date'];
		$event_id = $_POST['event_id'];
		$leader_id = $_POST['leader_id'];
		$leader_name = $_POST['leader_name'];
		$coach_id = $_POST['coach_id'];
		$coach_name = $_POST['coach_name'];
		$player_id = $_POST['player_id'];
		$player_name = $_POST['player_name'];
		
		$error_message = '';
		
		//check if all NOT Null variables are inserted properly
		//id check//
		if(empty($club_id)){

			$error_message = $error_message.'\n +[ club_id ] ';

		}

		if (empty($team_id)) {
						
			$error_message = $error_message.'\n +[ team_id ] ';
			
		}
		if (empty($formation_date)) {
						
			$error_message = $error_message.'\n +[ formation_date ] ';
		}
		if (empty($event_id)) {
						
			$error_message = $error_message.'\n +[ event_id ] ';
		}
		if (empty($leader_id)) {
						
			$error_message = $error_message.'\n +[ leader_id ] ';
		}


		if (empty($error_message)) {

			echo "........variables created, starting to INSERT contract_data...";
			$query_0 = "INSERT INTO team_data(club_id, team_id, formation_date, event_id, leader_id, leader_name, coach_id, coach_name, player_id, player_name) VALUES ('$club_id', '$team_id', '$formation_date','$event_id', '$leader_id', '$leader_name', '$coach_id', '$coach_name', '$player_id', '$player_name')";

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
	
	<title>Team Data</title>

</head>
	<title>Team Data</title>
	<Link rel="stylesheet" type="text/css" href="stylish2.css">
 	<link rel="stylesheet" type="text/css" href="css/animated.css">
 	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Team Data</h1>
	<div>

	<form method="post" action="team_data.php">

		<p class="normal_text">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>


		<div class="input-group">
			<label>Team Info:</label>
			<table >
				<tr>
					<th>*Club ID*</th>
					<th>*Team ID*</th>
					<th>*Formation Date*</th>
					
				</tr>

				<tr>
					<td><input type="number" name="club_id" ></td>
					<td><input type="number" name="team_id" ></td>
					<td><input type="date" name="formation_date" ></td>
					
				</tr>

				<tr>
					<th>*Event ID*</th>					
					<th>*Leader ID*</th>
					<th>Leader Name</th>					
				</tr>

				<tr>
					<td><input type="number" name="event_id" ></td>
					<td><input type="number" name="leader_id" ></td>
					<td><input type="text" name="leader_name" ></td>
					
				</tr>

				<tr>
					<th>Coach ID</th>				
					<th>Coach name</th>				
				</tr>

				<tr>
					<td><input type="number" name="coach_id" ></td>
					<td><input type="text" name="coach_name" ></td>										
				</tr>

				<tr>
					<th>Player ID</th>				
					<th>Player name</th>				
				</tr>

				<tr>
					<td><input type="number" name="player_id" ></td>
					<td><input type="text" name="player_name" ></td>										
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