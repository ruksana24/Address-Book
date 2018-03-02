<?php
	$userName = $_POST['userName'];
	$password = $_POST['password'];

	include 'dbConnect.php';

	$sql="SELECT * FROM user WHERE userName='$userName' AND password='$password' ";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			//fetch details				
			$row = $result->fetch_array();

			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['userName'] = $row['userName'];

			header('location:index.php');
			
		}
		else{
			echo "Invalid User Name or password";
		}
	include 'dbDisconnect.php';
?>