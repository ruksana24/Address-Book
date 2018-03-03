<?php
	include 'auth.php';

	include 'dbConnect.php';

	$peopleId = $_POST['peopleId'];


	$sql = "DELETE FROM people WHERE id='$peopleId' ";

	if($conn->query($sql) == TRUE)
	{
		header('location:index.php');
	}
	else
	{
		echo $conn->error;
	}


	include 'dbDisconnect.php';
?>