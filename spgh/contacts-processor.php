<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Alohomora9!";
	$dbname = "subscribe_list";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST
	$email = Trim(stripslashes($_POST['email']));
	
	// Escape all strings
	$email = mysqli_real_escape_string($connection, $email);
	

	// 2. Perform database query
	$query  = "INSERT INTO contacts (";
	$query .= "email";
	$query .= ") VALUES (";
	$query .= "  '{$email}'";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<?php include "inc/links.php";?>
	<title>Thank you</title>
</head>
<body>
<div class="subscribe">
	<h1><a href="index.php">William Shakespeare</a></h1>
</div>
<div class="container">
<br>
<h2>
<?php
	if ($result) {
		echo "Huzza! You have successfully subscribed to Shakespeare Newsletter!";

?>

<?php

	} else {
		die("Oops, something went wrong. Database query failed.");
	}
?>
</h2>
<br>
<a href="index.php" class="button">Back</a>
</div>
	<?php include "inc/nav.php";?>
	<?php include "inc/scripts.php";?>
</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>