<?php 
	include_once 'dbconnect.php';


	$EMAIL    = $_POST['email'];
	$FNAME    = $_POST['fname'];
	$LNAME    = $_POST['lname'];
	$PhoneNUM = $_POST['phonenum'];
	
	$sql = "INSERT INTO `employee` (`email`, `fname`, `lname`, `phonenum`) VALUES ('$EMAIL', '$FNAME', '$LNAME', '$PhoneNUM');";
	
	
	if(mysqli_query($conn, $sql)){
		header("Location: ../index.php?signup=success");
		 /*   echo "<font color='green'>Records added successfully.";
	} else{
		echo "<font color='red'>ERROR: Could not add $sql. " . mysqli_error($conn);*/
	}

		//header("Location: ../index.php?signup=success");


