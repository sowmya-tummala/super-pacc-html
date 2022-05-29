
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		//servername => localhost
		//username => root
		//password => empty
		//database name => mysql
		$conn = mysqli_connect("localhost", "root", "", "motor");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$phone = $_REQUEST['phone'];
		$number = $_REQUEST['number'];
		$service = $_REQUEST['service'];
		$address = $_REQUEST['address'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO service VALUES ('$first_name','$last_name','$gender','$phone','$number','$service','$address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $phone\n $number\n $service\n $address");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>


</body>
</html>
