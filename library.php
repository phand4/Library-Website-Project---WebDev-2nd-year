
<html>
<head>

</head>
<body>

<?php
	
	session_start();
	if(isset($_SESSION['username'])){
		$usern = $_SESSION['username'];
	}
	
	
	

    include("connect.php");
	include("header.php");
	include("footer.php");
	
?>
	<article>
	<?php
	if(isset($_SESSION['username'])){
		echo '<p>Welcome ' . $_SESSION['username']. '</p>';
	}
	?>
	</article>
	</body>
</html>