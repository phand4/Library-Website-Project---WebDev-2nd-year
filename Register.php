<html>
<header>
<?php
	include("connect.php");
	include("header.php");
	include("footer.php");
?>
</header>
<body>
<div class= "registerform">
	<p>Register</p>
	<form action = "registeruser.php" method = "POST">
	<p>Username:
	<input type="text" name="username"></p>
	<p>Password:
	<input type="text" name="password"></p>
	<p>First Name:
	<input type="text" name="firstname"></p>
	<p>Surname:
	<input type="text" name="surname"></p>
	<p>Address Line 1:
	<input type="textbox" name="address_line_1"></p>
	<p>Address Line 2:
	<input type="textbox" name="address_line_2"></p>
	<p>City:
	<input type="text" name="city"></p>
	<p>Telephone:
	<input type="text" name="telephone"></p>
	<p>Mobile:
	<input type="text" name="mobile"></p>
	<p><input type="submit" name = "submit" value= "submit"/></p>
</div>
</body>
</html>