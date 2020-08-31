<!DOCTYPE html>
<html lang="en" class="animated zoomIn">

<?php
	
	if (isset($_POST['submit'])) {

		/**echo "submit clicked, starting connection..";**/

		include_once "connection.php";

		
		/*
		*	contract_data
		*/

		$match_id = $_POST['match_id'];
		$vanue_id = $_POST['vanue_id'];
		$match_date = $_POST['match_date'];

		$player_id_a1 = $_POST['player_id_a1'];
		$player_id_a2 = $_POST['player_id_a2'];
		$player_id_b1 = $_POST['player_id_b1'];
		$player_id_b2 = $_POST['player_id_b2'];
		
		$tot_wic_a1 = $_POST['tot_wic_a1'];
		$tot_wic_a2 = $_POST['tot_wic_a2'];
		$tot_wic_b1 = $_POST['tot_wic_b1'];
		$tot_wic_b2 = $_POST['tot_wic_b2'];
		
		$tot_run_a1 = $_POST['tot_run_a1'];
		$tot_run_a2 = $_POST['tot_run_a2'];
		$tot_run_b1 = $_POST['tot_run_b1'];
		$tot_run_b2 = $_POST['tot_run_b2'];
		
		$perform_pt_a1 = $_POST['perform_pt_a1'];
		$perform_pt_a2 = $_POST['perform_pt_a2'];
		$perform_pt_b1 = $_POST['perform_pt_b1'];
		$perform_pt_b2 = $_POST['perform_pt_b2'];

		
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
			$query_0 = "INSERT INTO pl_perform(match_id, vanue_id, match_date, player_id_a1, player_id_a2, player_id_b1, player_id_b2, tot_wic_a1, tot_wic_a2, tot_wic_b1, tot_wic_b2, tot_run_a1, tot_run_a2, tot_run_b1, tot_run_b2, perform_pt_a1, perform_pt_a2, perform_pt_b1, perform_pt_b2) VALUES ('$match_id', '$vanue_id', '$match_date', '$player_id_a1', '$player_id_a2', '$player_id_b1', '$player_id_b2', '$tot_wic_a1', '$tot_wic_a2', '$tot_wic_b1', '$tot_wic_b2', '$tot_run_a1', '$tot_run_a2', '$tot_run_b1', '$tot_run_b2', '$perform_pt_a1', '$perform_pt_a2', '$perform_pt_b1', '$perform_pt_b2')";

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
	
	<title>Player Performances in Match</title>

</head>
	<title>Player Performances in Match</title>
	<Link rel="stylesheet" type="text/css" href="stylish2.css">
 	<link rel="stylesheet" type="text/css" href="css/animated.css">
 	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Player Performances in Match</h1>
	<div>

	<form method="post" action="pl_perform.php">

		<p class="normal_text">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>


		<div class="input-group">
			<label>Match Info:</label>
			<table >
				<tr>
					<th>*Match ID*</th>
					<th>*Vanue ID*</th>
					<th>*Match Date*</th>
				</tr>

				<tr>
					<td><input type="number" name="match_id" ></td>
					<td><input type="text" name="vanue_id" ></td>
					<td><input type="date" name="match_date" ></td>
				</tr>

			</table>

		</div>


		<div class="multi-input-group">
			<label>Best Performance Info: For Team A & B</label>
			<table >
				
				<tr>
					<td><input type="number" name="player_id_a1" placeholder="player_id_a1" ></td>
					<td><input type="number" name="tot_run_a1" placeholder="tot_run_a1" ></td>
					<td><input type="number" name="tot_wic_a1" placeholder="tot_wic_a1" ></td>
					<td><input type="number" name="perform_pt_a1" placeholder="perform_pt_a1" ></td>
				</tr>

				<tr>
					<td><input type="number" name="player_id_a2" placeholder="player_id_a2" ></td>
					<td><input type="number" name="tot_run_a2" placeholder="tot_run_a2" ></td>
					<td><input type="number" name="tot_wic_a2" placeholder="tot_wic_a2" ></td>
					<td><input type="number" name="perform_pt_a2" placeholder="perform_pt_a2" ></td>
				</tr>

				<tr>
					<td><input type="number" name="player_id_b1" placeholder="player_id_b1" ></td>
					<td><input type="number" name="tot_run_b1" placeholder="tot_run_b1" ></td>
					<td><input type="number" name="tot_wic_b1" placeholder="tot_wic_b1" ></td>
					<td><input type="number" name="perform_pt_b1" placeholder="perform_pt_b1" ></td>
				</tr>

				<tr>
					<td><input type="number" name="player_id_b2" placeholder="player_id_b2" ></td>
					<td><input type="number" name="tot_run_b2" placeholder="tot_run_b2" ></td>
					<td><input type="number" name="tot_wic_b2" placeholder="tot_wic_b2" ></td>
					<td><input type="number" name="perform_pt_b2" placeholder="perform_pt_b2" ></td>
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