<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$school = $_POST['school'];

		$sql = "UPDATE school SET school = '$school' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'School/Division updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:school.php');

?>