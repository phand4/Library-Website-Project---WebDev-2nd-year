<html>
<head>
<?php
	session_start();
	include("connect.php");
	include("header.php");
	
?>
</head>
<body>
<?php

	if(isset($_POST['submit'])){
		require 'connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$result = mysqli_query($db, 'SELECT * FROM users WHERE username = "' . $username.'" and password ="' .$password. '"');
		if(mysqli_num_rows($result)==1){
			$_SESSION['username'] = $username;
			header('Location: library.php');
		} else{
			echo "Account invalid";
		}
	}
?>

<article>
	<form method="post">
		<table cellpadding = "1" cellspacing = "2" border = "0">
			<tr>
				<td>Account Name:</td><td> <input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password:</td><td> <input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input name= "submit" type="submit" value="Log In"></td>
			</tr>
		</table>
	</form>
</article

	</body>
	
</html>