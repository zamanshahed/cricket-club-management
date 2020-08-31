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
		$club_name = $_POST['club_name'];	
		$date_of_est = $_POST['date_of_est'];
		$house_no = $_POST['house_no'];
		$location = $_POST['location'];
		$village_str = $_POST['village_str'];
		$thana = $_POST['thana'];
		$district = $_POST['district'];
		$post_code = $_POST['post_code'];
		$president_name = $_POST['president_name'];

		
		$error_message = '';
		
		//check if all NOT Null variables are inserted properly
		//id check//
		if(empty($club_id)){

			$error_message = $error_message.'\n +[ club_id ] ';

		}

		if (empty($club_name)) {
						
			$error_message = $error_message.'\n +[ club_name ] ';
			
		}
		if (empty($date_of_est)) {
						
			$error_message = $error_message.'\n +[ date_of_est ] ';
		}
		if (empty($district)) {
						
			$error_message = $error_message.'\n +[ district ] ';
		}
		if (empty($president_name)) {
						
			$error_message = $error_message.'\n +[ president_name ] ';
			
		}

		if (empty($error_message)) {

			echo "........variables created, starting to INSERT contract_data...";
			
			$query_0 = "INSERT INTO club_data (club_id, club_name, date_of_est, house_no, location, village_str, thana, district, post_code, president_name) VALUES ('$club_id', '$club_name', '$date_of_est', '$house_no', '$location', '$village_str', '$thana', '$district', '$post_code', '$president_name');";

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
	<title>Club Registration</title>

</head>
	<title>Club Registration Form</title>
	<Link rel="stylesheet" type="text/css" href="stylish2.css">
 	<link rel="stylesheet" type="text/css" href="css/animated.css">
 	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Club Registration Form</h1>
	<div>

	<form method="post" action="club_reg.php">

		<p class="normal_text">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>
		
		<div class="multi-input-group">
			<label>Club Info:</label>
			<table >
				<tr>
					<th>*Club ID*</th>
					<th>*Club Name*</th>
					<th>*Date of Establishment:*</th>
				</tr>

				<tr>
					<td><input type="number" name="club_id" ></td>
					<td><input type="text" name="club_name" ></td>
					<td><input type="date" name="date_of_est" ></td>
				</tr>

			</table>

		</div>



		<div class="multi-input-group">
			<label>Club Address</label>
			<table >
				<tr>
					<th>House Number</th>
					<th>Location</th>
					<th>Village / Street</th>
				</tr>

				<tr>
					<td><input type="number" name="house_no" ></td>
					<td><input type="text" name="location" ></td>
					<td><input type="text" name="village_str" ></td>
				</tr>

				<tr>
					<th>Thana</th>
					<th>*District*</th>
					<th>Post Code</th>
				</tr>

				<tr>
					<td><input type="text" name="thana" ></td>
					<td><input type="text" name="district" ></td>
					<td><input type="number" name="post_code" ></td>
				</tr>


			</table>

		</div>

		<div class="multi-input-group">
			<label>Club Info:</label>
			<table >
				<tr>
					<th>*President Name*</th>
					
				</tr>

				<tr>
					<td><input type="text" name="president_name" ></td>
					
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