<?php include_once 'includes/dbconnect.php'; ?>
	
<html>
<head>
<title>ADMIN CRUD: FOR EMPLOYEES</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="row justify-content-center"> 
	<form action="includes/process.php" method="POST">
	
		<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" placeholder="Enter your email">
		</div>

		<div class="form-group">
		<label>First Name</label>
		<input type="text" name="fname" class="form-control" placeholder="Enter your first name">
		</div>

		<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="lname" class="form-control" placeholder="Enter your last name">
		</div>
		
		<div class="form-group">
		<label>Phone Number</label>
		<input type="text" name="phonenum" class="form-control" placeholder="Enter your phone number">
		</div>		
		
		<div class="form-group">		
		<button type="submit" class="btn btn-primary" name="submit">Add Employee</button>
		</div>
	</form>
</div>
<div class="container">
<div class="row justify-content-center">
	<table class="table">
		<thread>

			<tr>
				<th> ID </th>
				<th> Email </th>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Phone Number </th>
				<th colspan="2" align="center"> Operation</th>
			</tr>

<?php
	
			$sql = "SELECT * FROM employee;";
			$results = mysqli_query($conn, $sql);
			
			$resultCheck = mysqli_num_rows($results);
			if($resultCheck > 0){
				while($row = mysqli_fetch_assoc($results)){
					echo "<tr>";
					echo  "<td>". $row['id'] 	. "</td>";
					echo  "<td>". $row['email'] . "</td>";
					echo  "<td>". $row['fname'] . "</td>";
					echo  "<td>". $row['lname'] . "</td>";
					echo  "<td>". $row['phonenum'] . "</td>";
					echo  "<td><a href='includes/edit.php?id=". $row['id']."' >EDIT</a></td>";
					echo  "<td><a href='includes/delete.php?id=". $row['id']."' >DELETE</a></td>"; 
					echo "</tr>";
				
				}
				echo "</table>";
			}
			else{
				 echo "0 result";
			}

?>	
		</thread>
	</table>
</div>
</div>

<!-- body -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>