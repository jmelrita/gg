<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Read Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php" readonly>
		<table border="0">
			<tr> 
				<td>Name:</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr> 
				<td>Age:</td>
				<td><?php echo $age; ?></td>
			</tr>
			<tr> 
				<td>Email:</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				
			</tr>
		</table>
	</form>
</body>
</html>