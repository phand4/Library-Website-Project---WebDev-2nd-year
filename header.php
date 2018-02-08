<link rel="stylesheet" href="style.css">

<div class="header">
<ul>	
	<li><a href ="library.php" class="button">Home</a></li>
	<li><a href ="login.php" class="button">Login</a></li>
	<li><a href ="Register.php" class="button">Register</a></li>
	<?php
	   if(isset($_SESSION['username'])){?>
		<li><a href ="logout.php" class="button">Logout</a></li>
		<li><a href ="myreservations.php" class="button">Reserved</a></li>
	 <?php } ?>
</ul>
</div>
<?php

	function fnx($link){
		header("location: " . $link);
	}
?>
