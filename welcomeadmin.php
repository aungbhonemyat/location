<?php

session_start();

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}

echo $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>

<body>
	<h1> Hi admin</h1>
	<a href="logout.php">Logout</a>
</body>

</html>