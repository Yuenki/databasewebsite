<?php 
	include_once 'dbconnect.php';

	$ID       = $_GET['id'];
	$EMAIL    = $_POST['email'];
	$FNAME    = $_POST['fname'];
	$LNAME    = $_POST['lname'];
	$PhoneNUM = $_POST['phonenum'];
	echo $ID;
	
	$deletesql = "DELETE FROM `employee` WHERE id = '$ID' ";
	
//	echo $ID;
	
	if(mysqli_query($conn, $deletesql)){
	header("Location: ../index.php?signup=success");
		
		   echo "<font color='green'>ID ROW # $ID deleted successfully.";
	} else{
		echo "<font color='red'>ERROR: Could not add $sql. " . mysqli_error($conn);
	}

		//header("Location: ../index.php?signup=success");
