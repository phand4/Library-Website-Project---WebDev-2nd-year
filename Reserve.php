<html>
<head>
<?php
	include("connect.php");
	include("header.php");
	include("footer.php");
	$link = 'myreservations.php';
?>
</head>
<body>
	<?php
	session_start();
	include("connect.php");

	$result = mysqli_query($db, "SELECT * from books");
	if(!$result){
		die("Not found.");
	}
	$field_num = mysqli_num_fields($result);

	$isbn = $_GET['ISBN'];
	$date = date("d-m-Y");
	$usern = $_SESSION['username'];
	mysqli_free_result($result);
	
	
	$sql = "SELECT reserved FROM books WHERE ISBN = '$isbn'";
	$check = mysqli_query($db, $sql);
	if(mysqli_num_rows($check) > 0)
	{
		$row = mysqli_fetch_row($check);
		if($row[0] == 'N'){
			
				$update = mysqli_query($db, "UPDATE books SET reserved = 'Y' WHERE ISBN ='$isbn'");
	
				if($update){
					$insert = mysqli_query($db, "INSERT INTO reserved(ISBN, username, reserveddate) VALUES ('$isbn', '$usern', '$date')");
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