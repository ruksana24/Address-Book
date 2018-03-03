<?php
	include 'auth.php';

	include 'dbConnect.php';

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$nname = $_POST['nname'];
	$address = $_POST['address'];
	$website = $_POST['website'];
	$bdate = $_POST['bdate'];
	$phone = $_POST['phone'];



	$sql = "UPDATE people SET fullName='$fname', nickName='$nname', birthDate ='$bdate', webSite='$website', phone='$phone',address='$address' WHERE id='$id'";

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