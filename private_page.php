<?php

	session_start();

	include_once 'user.php';

	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Page</title>
	<link rel="stylesheet" type="text/css" href="validate.css">
	<script type="text/javascript" src="validate.js"></script>




</head>
<body>
	<p>This is a priate page</p>
	<p>We want to protect it</p>

<p align="left" style="font-size:20px; color:blue;"><?php echo "Welcome ".$_SESSION['username'];?></a></p>
	<p align="right"><a href="logout.php">Logout</a></p>
</body>
</html>
