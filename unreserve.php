<html>
<head>
<?php
	include("connect.php");
	include("header.php");
	include("footer.php");
	$link = 'myreservations.php'
	
?>
</head>
<body>
	<?php
	session_start();
	include("connect.php");
	$isbn = $_GET['ISBN'];	
	
	$sql = "SELECT reserved FROM books WHERE ISBN = '$isbn'";
	$check = mysqli_query($db, $sql);
	if(mysqli_num_rows($check) > 0)
	{
		$row = mysqli_fetch_row($check);
		if($row[0] == 'Y'){
			
				$update = mysqli_query($db, "UPDATE books SET reserved = 'N' WHERE ISBN ='$isbn'");
	
				if($update){
					$insert = mysqli_query($db, "DELETE FROM `reserved` WHERE `reserved`.`ISBN` = '$isbn'");
					fnx($link);

				}else{
					echo '<br> Update failed';
					printf("Errormessage: %s\n", $db->error);
				}
		}else{
			fnx($link);
		}
	}

	?>

</body>
</html>