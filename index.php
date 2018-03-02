<?php
	include 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Contact</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<table>
  <tr>
    <th>Full Name</th>
    <th>Nick Name</th>
    <th>Birthdate</th>
    <th>Web Site</th>
    <th>Address</th>
    <th>Phone</th>

  </tr>

  <?php

  	include 'dbConnect.php';

  		$sql = "SELECT * FROM people WHERE( userId='$id' )";

  	include 'dbDisconnect.php';

  ?>

  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>

  </tr>
 
</table>

</body>
</html>