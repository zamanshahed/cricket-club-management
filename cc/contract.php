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
		$club_name3 = $_POST['club_name3'];	
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$player_id = $_POST['player_id'];
		$f_name2 = $_POST['f_name2'];
		$m_name2 = $_POST['m_name2'];
		$l_name2 = $_POST['l_name2'];
		$designation = $_POST['designation'];
		$start_day = $_POST['start_day'];
		$end_day = $_POST['end_day'];
		$c_amount = $_POST['c_amount'];
		$c_witness1 = $_POST['c_witness1'];
		$c_witness2 = $_POST['c_witness2'];

		/*
		*	payment_sch
		*/
		$serial_num1 = $_POST['serial_num1'];
		$serial_num2 = $_POST['serial_num2'];
		$serial_num3 = $_POST['serial_num3'];

		$due_date1 = $_POST['due_date1'];
		$due_date2 = $_POST['due_date2'];
		$due_date3 = $_POST['due_date3'];

		$payment_date1 = $_POST['payment_date1'];
		$payment_date2 = $_POST['payment_date2'];
		$payment_date3 = $_POST['payment_date3'];		
		
		$amount1 = $_POST['amount1'];
		$amount2 = $_POST['amount2'];
		$amount3 = $_POST['amount3'];
		
		$error_message = '';
		
		//check if all NOT Null variables are inserted properly
		//id check//
		if(empty($club_id)){

			$error_message = $error_message.'\n +[ club_id ] ';

		}

		if (empty($club_name3)) {
						
			$error_message = $error_message.'\n +[ club_name3 ] ';
			
		}
		if (empty($f_name)) {
						
			$error_message = $error_message.'\n +[ f_name ] ';
		}
		if (empty($f_name2)) {
						
			$error_message = $error_message.'\n +[ f_name2 ] ';
		}
		if (empty($player_id)) {
						
			$error_message = $error_message.'\n +[ player_id ] ';
			
		}
		if (empty($designation)) {
						
			$error_message = $error_message.'\n +[ designation ] ';
			
		}
		if (empty($start_day)) {
						
			$error_message = $error_message.'\n +[ start_day ] ';
			
		}
		if (empty($end_day)) {
						
			$error_message = $error_message.'\n +[ end_day ] ';
			
		}
		if (empty($c_amount)) {
						
			$error_message = $error_message.'\n +[ c_amount ] ';
			
		}
		if (empty($c_witness1)) {
						
			$error_message = $error_message.'\n +[ c_witness1 ] ';
			
		}

		if (empty($error_message)) {

			echo "........variables created, starting to INSERT contract_data...";
			$query_0 = "INSERT INTO contract_data (club_id, club_name3, f_name, m_name, l_name, player_id, f_name2, m_name2, l_name2, designation, start_day, end_day, c_amount, c_witness1, c_witness2) VALUES ('$club_id', '$club_name3', '$f_name', '$m_name', '$l_name', '$player_id', '$f_name2', '$m_name2', '$l_name2', '$designation', '$start_day', '$end_day', '$c_amount', '$c_witness1', '$c_witness2');";

				if ($conn->query($query_0) === TRUE) {
					echo "contract_data INSERT done...starting INSERT payment_sch...";
				} else {
				echo "Error in $query_0: ";
				}

			
			$query_1 = "INSERT INTO payment_sch( serial_num1, serial_num2, serial_num3, due_date1, due_date2, due_date3, payment_date1, payment_date2, payment_date3, amount1, amount2, amount3) VALUES ( '$serial_num1', '$serial_num2', '$serial_num3', '$due_date1', '$due_date2','$due_date3', '$payment_date1', '$payment_date2', '$payment_date3', '$amount1', '$amount2', '$amount3');";
				
				if ($conn->query($query_1) === TRUE) {
					echo "payment_sch INSERT done...Finalizing all data...";
				} else {
					echo "Error in $query_1: ";
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
	
	<title>Club Contract</title>

</head>
	<title>Club Contract Form</title>
	<Link rel="stylesheet" type="text/css" href="stylish2.css">
 	<link rel="stylesheet" type="text/css" href="css/animated.css">
 	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Club Contract Form</h1>
	<div>

	<form method="post" action="contract.php">

		<p class="normal_text">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>


		<div class="multi-input-group">
			<label>Club Info:</label>
			<table >
				<tr>
					<th>*Club ID*</th>
					<th>*Club Name*</th>
					
				</tr>

				<tr>
					<td><input type="number" name="club_id" ></td>
					<td><input type="text" name="club_name3" ></td>
					
				</tr>
			</table>

		</div>

		<div class="multi-input-group">
			<label>First Party: Player</label>
			<table >
				<tr>
					<th>*First Name*</th>
					<th>Middle Name</th>
					
				</tr>

				<tr>
					<td><input type="text" name="f_name" ></td>
					<td><input type="text" name="m_name" ></td>
					
				</tr>

				<tr>
					<th>Last Name</th>
					<th>*Player ID*</th>
				</tr>

				<tr>
					<td><input type="text" name="l_name" ></td>
					<td><input type="number" name="player_id" ></td>

				</tr>

			</table>

		</div>
		<div class="multi-input-group">
			<label>Second Party: Authorized Person</label>
			<table >
				<tr>
					<th>*First Name*</th>
					<th>Middle Name</th>
					
				</tr>

				<tr>
					<td><input type="text" name="f_name2" ></td>
					<td><input type="text" name="m_name2" ></td>
					
				</tr>

				<tr>
					<th>Last Name</th>
					<th>*Designation*</th>
				</tr>

				<tr>
					<td><input type="text" name="l_name2" ></td>
					<td><input type="text" name="designation" ></td>

				</tr>

			</table>	

		</div>

		<div class="multi-input-group">
			<label>Contract: Time Period</label>
			<table >
				<tr>
					<th>*Start Date*</th>
					<th>*End Date*</th>
					<th>*Contract Amount*</th>
				</tr>

				<tr>
					<td><input type="date" name="start_day" ></td>
					<td><input type="date" name="end_day" ></td>
					<td><input type="number" name="c_amount" ></td>
				</tr>

			</table>

		</div>

		<div class="multi-input-group">
			<label>Payment Schedule</label>
			<table >
				<tr>
					<th>Serial Number</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Contract Amount</th>

				</tr>

				<tr>
					<td><input type="number" name="serial_num1" placeholder="Serial Number"></td>
					<td><input type="date" name="due_date1" placeholder="Date 1"></td>
					<td><input type="date" name="payment_date1" placeholder="Date 1"></td>
					<td><input type="number" name="amount1" placeholder="Amount 1"></td>
				</tr>
				<tr>
					<td><input type="number" name="serial_num2" placeholder="Serial Number"></td>
					<td><input type="date" name="due_date2" placeholder="Date 2"></td>
					<td><input type="date" name="payment_date2" placeholder="Date 2"></td>
					<td><input type="number" name="amount2" placeholder="Amount 2"></td>
				</tr>
				<tr>
					<td><input type="number" name="serial_num3" placeholder="Serial Number"></td>
					<td><input type="date" name="due_date3" placeholder="Date 3" ></td>
					<td><input type="date" name="payment_date3" placeholder="Date 3"></td>
					<td><input type="number" name="amount3" placeholder="Amount 3"></td>
				</tr>

			</table>

		</div>

		<div class="multi-input-group">
			<label>Contract Witnesses:</label>
			<table >
				<tr>
					<th>* Contract Witness 1*</th>
					<th>Contract Witness 2</th>
					
				</tr>

				<tr>
					<td><input type="text" name="c_witness1" ></td>
					<td><input type="text" name="c_witness2" ></td>
					
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