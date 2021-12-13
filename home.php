<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:vlist.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>

	<a href="logout.php">LOGOUT</a>
	<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

</body>
</html>