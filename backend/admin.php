<?php

	session_start();

	if (! $_SESSION['username']){ header("Location:login.php");}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Hallo, <?= $_SESSION['username'] ?></h1>
	<p>Ini Halaman Setelah Login</p>

<a href="logout.php"> Logout </a>
</body>
</html>