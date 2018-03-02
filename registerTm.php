<?php


	$userName = $_POST['userName'];
	$email   = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	include 'dbConnect.php';

	if($password != $confirmPassword) echo "Password dosent match";
	else{
		$sql = "SELECT * FROM user WHERE userName='$userName' ";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			echo '<p style="color: #9F6000;font-weight: bold;">Username is already taken. Try Different One.</p>';
		}
		else{
			$sql = "INSERT INTO user(userName,email,password) VALUES('$userName','$email','$password')";

			if($conn->query($sql) == TRUE)
			{
				echo '<p style="color: #9F6000;font-weight: bold;">account created .</p>';
			}
			else
			{
				echo $conn->error;
			}

		}
	}

	include 'dbDisconnect.php';

?>