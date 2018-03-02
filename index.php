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
	<h1>Home Page</h1>
	<p> / </p>
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
    <td>Most.Ruksana Khatun</td>
    <td>Rukshad</td>
    <td>26-06-1994</td>
    <td>rukshad.cse@gmail.com</td>
    <td>Mohanpur</td>
    <td>01767050959</td>

  </tr>
 <tr>
    <td>Nishat Parvin</td>
    <td>nishat</td>
    <td>16-01-1993</td>
    <td>nishatparvin93@gmail.com</td>
    <td>Dinajpur</td>
    <td>01738050959</td>

  </tr>
  <tr>
    <td>MD Daloar Hossain</td>
    <td>Daloar</td>
    <td>26-06-1984</td>
    <td>daloar@gmail.com</td>
    <td>Mohanpur</td>
    <td>01738347203</td>

  </tr>

</table>

</body>
</html>