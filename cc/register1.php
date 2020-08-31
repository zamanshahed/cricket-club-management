<!DOCTYPE html>
<html lang="en" class="animated zoomIn">

<?php
	
	if (isset($_POST['submit'])) {

		/**echo "submit clicked, starting connection..";**/

		include_once "connection.php";

		/*echo "connection establsihed...Creating variables...";*/

		$player_id = $_POST['player_id'];
		$first_name = $_POST['first_name'];
		$mid_name = $_POST['mid_name'];
		$last_name = $_POST['last_name'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
		/*$present_address = $_POST['present_address'];*/
		/*$parmanent_address = $_POST['parmanent_address'];*/
		$date_of_birth = $_POST['date_of_birth'];

		/*Parmanent_address_variables*/
		$house_no1 = $_POST['house_no1'];
		$location1 = $_POST['location1'];
		$vill1 = $_POST['vill1'];
		$thana1 = $_POST['thana1'];
		$district1 = $_POST['district1'];
		$post_code1 = $_POST['post_code1'];
		
		$parmanent_address = "House no:".$house_no1."Location:".$location1."Village/Street:".$vill1."Thana:".$thana1."District:".$district1."Post Code:".$post_code1;

		/*present_address_variables*/
		$house_no2 = $_POST['house_no2'];
		$location2 = $_POST['location2'];
		$vill2 = $_POST['vill2'];
		$thana2 = $_POST['thana2'];
		$district2 = $_POST['district2'];
		$post_code2 = $_POST['post_code2'];

		$present_address = "House no: ".$house_no2."Location: ".$location2."Village/Street: ".$vill2."Thana: ".$thana2."District: ".$district2."Post Code: ".$post_code2;
		
		/*player_edu*/
		$deg_name = $_POST['deg_name'];
		$institute_dept = $_POST['institute_dept'];
		$board_university = $_POST['board_university'];
		$year = $_POST['year'];
		$result = $_POST['result'];
		$membership = $_POST['membership'];

		/*player_history*/
		$club_name = $_POST['club_name'];
		$start_day = $_POST['start_day'];
		$end_day = $_POST['end_day'];
		$total_run = $_POST['total_run'];
		$total_wickets = $_POST['total_wickets'];
		$team_leader = $_POST['team_leader'];

		/*player_perform*/
		$club_name2 = $_POST['club_name2'];
		$oppo_club = $_POST['oppo_club'];
		$event_id = $_POST['event_id'];
		$match_id = $_POST['match_id'];
		$run = $_POST['run'];
		$wicket = $_POST['wicket'];

		$zero = ['0'];

		$error_message = '';
		
		//check if all NOT Null variables are inserted properly
		//id check//
		if(empty($player_id)){

			$error_message = $error_message.'\n +[ player_id ] ';

		}

		if (empty($first_name)) {
						
			$error_message = $error_message.'\n +[ first_name (from: basic_info)] ';
			
		}
		if (empty($father_name)) {
						
			$error_message = $error_message.'\n +[ father_name (from: basic_info)] ';
		}
		if (empty($mother_name)) {
						
			$error_message = $error_message.'\n +[ mother_name (from: basic_info)] ';
		}
		if (empty($date_of_birth)) {
						
			$error_message = $error_message.'\n +[ date_of_birth (from: basic_info)] ';
			
		}
		if (empty($deg_name)) {
						
			$error_message = $error_message.'\n +[ deg_name (from: player_edu)] ';
			
		}
		if (empty($institute_dept)) {
						
			$error_message = $error_message.'\n +[ institute_dept (from: player_edu)] ';
			
		}
		if (empty($board_university)) {
						
			$error_message = $error_message.'\n +[ board_university (from: player_edu)] ';
			
		}
		if (empty($year)) {
						
			$error_message = $error_message.'\n +[ year (from: player_edu)] ';
			
		}
		if (empty($result)) {
						
			$error_message = $error_message.'\n +[ result (from: player_edu)] ';
			
		}
		if (empty($club_name)) {
						
			$error_message = $error_message.'\n +[ club_name (from: player_history)] ';
			
		}
		if (empty($team_leader)) {
						
			$error_message = $error_message.'\n +[ team_leader (from: player_history)] ';
			
		}
		if (empty($club_name2)) {
						
			$error_message = $error_message.'\n +[ club_name2 (from: player_perform)] ';
			
		}
		if (empty($oppo_club)) {
						
			$error_message = $error_message.'\n +[ oppo_club (from: player_perform)] ';
			
		}
		if (empty($event_id)) {
						
			$error_message = $error_message.'\n +[ event_id (from: player_perform)] ';
			
		}
		if (empty($match_id)) {
						
			$error_message = $error_message.'\n +[ match_id (from: player_perform)] ';
			
		}

		if (empty($error_message)) {

			echo "........variables created, starting to INSERT player_data1...";
			$query_0 = "INSERT INTO player_data1 (player_id, first_name, mid_name, last_name, father_name, mother_name, present_address, parmanent_address, date_of_birth) VALUES ('$player_id', '$first_name',  '$mid_name',  '$last_name', '$father_name', '$mother_name', '$present_address', '$parmanent_address', '$date_of_birth');";

				if ($conn->query($query_0) === TRUE) {
					echo "player_data1 INSERT done...starting INSERT player_edu...";
				} else {
				echo "Error in $query_0: ";
				}

			
			$query_1 = "INSERT INTO player_edu( player_id, deg_name, institute_dept, board_university, year, result, membership) VALUES ( '$ player_id', '$deg_name', '$institute_dept', '$board_university', '$year', '$result', '$membership');";
				
				if ($conn->query($query_1) === TRUE) {
					echo "player_edu INSERT done...starting INSERT player_history...";
				} else {
					echo "Error in $query_1: ";
				}	
			
			$query_2 ="INSERT INTO player_history ( player_id, club_name, start_day, end_day, total_run, total_wickets, team_leader) VALUES ( '$player_id', '$club_name', '$start_day', '$end_day', '$total_run', '$total_wickets', '$team_leader')";
				
				if ($conn->query($query_2) === TRUE) {
					echo "player_history INSERT done...starting INSERT player_perform...";
				} else {
					echo "Error in $query_2: ";
				}

			
			$query_3 = "INSERT INTO player_perform (player_id, club_name2, oppo_club, event_id, match_id, run, wicket) VALUES ( '$player_id', '$club_name2', '$oppo_club', '$event_id', '$match_id', '$run', '$wicket');";

				if ($conn->query($query_3) === TRUE) {
					echo "player_perform INSERT done...finalizing works...";
				} else {
					echo "Error in $query_3: ";
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
  <title>Player Registration Form</title>
  <Link rel="stylesheet" type="text/css" href="stylish.css">
  <link rel="stylesheet" type="text/css" href="css/animated.css">
  <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<body>

	<script src="scripted.js"></script>


	<div class="header">
		<h1>Club Registration Form</h1>
	<div>

	<form method="post" action="register1.php">

		<p class="normal_text1">Entries marked with * (*entry_name*) are mandatory to fill. Do not leave them empty.</p>

		<div class="input-group">
			<label>*Player ID*</label>
			<input type="number" name="player_id">
		</div>

		<div class="multi-input-group">
			<label>Sec: 1. Basic Informations</label>
			<table >
				<tr>
					<th>*First Name*</th>
					<th>Middle Name</th>
					<th>Last Name</th>
				</tr>

				<tr>
					<td><input type="text" name="first_name" ></td>
					<td><input type="text" name="mid_name" ></td>
					<td><input type="text" name="last_name" ></td>
				</tr>

				<tr>
					<th>*Father's Name*</th>
					<th>*Mother's name*</th>
					<th>*Date of Birth*</th>
				</tr>

				<tr>
					<td><input type="text" name="father_name" ></td>
					<td><input type="text" name="mother_name" ></td>
					<td><input type="date" name="date_of_birth" ></td>

				</tr>

			</table>

		</div>

		<div class="multi-input-group">
			<label>Sec: 2. Present Address</label>
			<table >
				<tr>
					<th>House no</th>
					<th>Location</th>
					<th>Vill / Street</th>
				</tr>

				<tr>
					<td><input type="number" name="house_no2" ></td>
					<td><input type="text" name="location2" ></td>
					<td><input type="text" name="vill2" ></td>
				</tr>

				<tr>
					<th>Thana</th>
					<th>District</th>
					<th>Post code</th>
				</tr>

				<tr>
					<td><input type="text" name="thana2" ></td>
					<td><input type="text" name="district2" ></td>
					<td><input type="number" name="post_code2" ></td>

				</tr>

			</table>

		</div>

		<div class="multi-input-group">
			<label>Sec: 3. Parmanent Address</label>

			<table >
				<tr>
					<th>House no</th>
					<th>Location</th>
					<th>Vill / Street</th>
				</tr>

				<tr>
					<td><input type="number" name="house_no1" ></td>
					<td><input type="text" name="location1" ></td>
					<td><input type="text" name="vill1" ></td>
				</tr>

				<tr>
					<th>Thana</th>
					<th>District</th>
					<th>Post code</th>
				</tr>

				<tr>
					<td><input type="text" name="thana1" ></td>
					<td><input type="text" name="district1" ></td>
					<td><input type="number" name="post_code1" ></td>

				</tr>

			</table>
		</div>

		<div class="multi-input-group">
			<label>Sec: 4. Education Details</label>
			<table >
				<tr>
					<th>*Degree Name*</th>
					<th>*Institute / Dept:*</th>
					<th>*Board / University*</th>
				</tr>

				<tr>
					<td><input type="text" name="deg_name" ></td>
					<td><input type="text" name="institute_dept" ></td>
					<td><input type="text" name="board_university" ></td>
				</tr>

				<tr>
					<th>*Year*</th>
					<th>*Result*</th>
					<th>Membership</th>
				</tr>

				<tr>
					<td><input type="text" name="year" ></td>
					<td><input type="text" name="result" ></td>
					<td><input type="text" name="membership" ></td>
				</tr>

			</table>

		</div>

		<p class="normal_text2">**membership can be: ICCB / BCCB / ACCB / Others (enter name if exists..)</p>

		<div class="multi-input-group">
			<label>Sec: 5. Previous History</label>

			<table >
				<tr>
					<th>*Club Name*</th>
					<th>Started From</th>
					<th>Ended in</th>
				</tr>

				<tr>
					<td><input type="text" name="club_name" ></td>
					<td><input type="date" name="start_day" ></td>
					<td><input type="date" name="end_day" ></td>
				</tr>

				<tr>
					<th>Total Runs</th>
					<th>Total Wickets</th>
					<th>*Team Leader? (Y/N)*</th>
				</tr>

				<tr>
					<td><input type="number" name="total_run" ></td>
					<td><input type="number" name="total_wickets" ></td>
					<td><input type="text" name="team_leader" ></td>

				</tr>

			</table>
		</div>


		<div class="multi-input-group">
			<label>Sec: 6. Best Performance</label>

			<table >
				<tr>
					<th>*Club Name*</th>
					<th>*Opponent Club*</th>
					<th>*Event ID*</th>
				</tr>

				<tr>
					<td><input type="text" name="club_name2" ></td>
					<td><input type="text" name="oppo_club" ></td>
					<td><input type="number" name="event_id" ></td>
				</tr>

				<tr>
					<th>*Match ID*</th>
					<th>Runs</th>
					<th>Wickets</th>
				</tr>

				<tr>
					<td><input type="number" name="match_id" ></td>
					<td><input type="number" name="run" ></td>
					<td><input type="number" name="wicket" ></td>

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