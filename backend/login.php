<?php 

	session_start(); 

	if (! empty($_SESSION['username'])){ header("Location:admin.php");}

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Form Login</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit_login" value="Login"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['submit_login'])) {
			// mengambil masing-masing inputan
			$username = $_POST['username'];
			$password = $_POST['password'];

			//proses session
			$_SESSION['username'] = 'auges';
			$_SESSION['password'] = '1234';

			if ($username == 'auges' && $password == '1234') {
				header('Location:admin.php');
			} else {
				echo '<span style="color:red">Gagal Login</span>';
			}
		}

	?>

</body>
</html>