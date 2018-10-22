<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$school = $_POST['school'];

		$sql = "INSERT INTO school (school) VALUES ('$school')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'School/Division added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: school.php');

?>