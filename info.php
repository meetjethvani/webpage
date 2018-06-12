<html>
<body>
<br>
<?php
	$hostname = 'db';
	$username = 'demousers';
	$password = 'demopassword';
	$dbname = 'demodb';

	$dbconnect = new mysqli($hostname, $username, $password, $dbname);
 	if ($dbconnect->connect_error) {
  	die("Error: " . $dbconnect->connect_error);
	}
	echo "You entered following details: <br>";
	
	if(isset($_POST['submit'])) {
		$name=$_POST['name'];
		$city=$_POST['city'];
	}

	$query = "INSERT INTO demotable (name, city) VALUES ('$name', '$city')";
	
	if (!mysqli_query($dbconnect, $query)) {
        	die('An error occurred when submitting your review.');
    	} else {	
		echo "Name: $name <br> City: $city <br> <br> Thanks for your detail!";
    	}

?>
</body>
</html>
