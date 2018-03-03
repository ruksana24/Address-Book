<?php
	include 'auth.php';

	include 'dbConnect.php';

	$fname = $_POST['fname'];
	$nname = $_POST['nname'];
	$address = $_POST['address'];
	$website = $_POST['website'];
	$bdate = $_POST['bdate'];
	$phone = $_POST['phone'];
	$userId =  $_SESSION["id"];




	$sql = "INSERT INTO people(fullName,nickName,birthDate,webSite,phone,address,userId) VALUES('$fname','$nname','$bdate','$website','$phone','$address','$userId')";

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