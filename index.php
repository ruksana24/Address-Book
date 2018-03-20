<?php
	include 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Contact</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">AddressBook</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="addContact.php">Add Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>


<div class="container">
	<h2>All Contact</h2>
	<hr/>
	<br>


 <div class="col-sm-12 text-center">
        <form  action="csvDownload.php" method="post">
            <button id="csv_btn"  value="Download" type="submit" name="download_csv" class="btn btn-success">Download CSV</button>
        </form>

     </div>

	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>

            	<th>Full Name</th>
			    <th>Nick Name</th>
			    <th>Birthdate</th>
			    <th>Web Site</th>
			    <th>Address</th>
			    <th>Phone</th>
			    <th>Action</th>
            </tr>
        </thead>
       
        <tbody>

        <?php

		  	include 'dbConnect.php';

		  		$sql = "SELECT * FROM people WHERE( userId='$id' )";
		  		$result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                    		<td>'.$row['fullName'].'</td>
                    		<td>'.$row['nickName'].'</td>
                    		<td>'.$row['birthDate'].'</td>
                    		<td>'.$row['webSite'].'</td>
                    		<td>'.$row['address'].'</td>
                    		<td>'.$row['phone'].'</td>

                    		<td>
                    			<form action="editContact.php" method = "get">
                    			<button class="pull-left btn btn-primary" type ="submit" name ="peopleId" value="'.$row['id'].'" >Edit</button>
                    			</form> 

                    			<form action="deleteContact.php" method = "post">
                    			<button class="pull-right btn btn-danger " type ="submit" name ="peopleId" value="'.$row['id'].'" >X</button>
                    			</form> 
                    		</td>

                    	</tr>';
                }

		  	include 'dbDisconnect.php';

		?>
			</tbody>
		</table>
	</div>


	<script type="text/javascript">
		
		$(document).ready(function() {
    		$('#example').DataTable();
		} );
	</script>

</body>
</html>