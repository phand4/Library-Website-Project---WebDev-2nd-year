<html>
<head>
<?php
	session_start();
	include("connect.php");
	include("header.php");
	include("footer.php");
?>
</head>
<body>
	<?php
	
	include("connect.php");
	echo '<p>'.$_SESSION['username'].'s Reserved Books';
	$usern = $_SESSION['username'];
	
	$result = mysqli_query($db, "SELECT * FROM reserved, books WHERE username = '$usern' AND books.ISBN = reserved.ISBN");
	if(!$result){
		die("Not found.");
	}
	$field_num = mysqli_num_fields($result);
	
	$sql = "SELECT * FROM reserved, books WHERE username = '$usern' AND books.ISBN = reserved.ISBN";
	$check = mysqli_query($db, $sql);

		
			echo "<table border ='0'><tr>";
			for($i =0; $i<$field_num; $i++)
			{
				$field = mysqli_fetch_field($result);
				echo "<td>{$field->name}</td>";
			}
			echo "</tr>\n";
			while($row = mysqli_fetch_array($result))
			{
				
					echo "<tr>";
					
					echo "<td>$row[0]</td>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td>$row[3]</td>";
					echo "<td>$row[4]</td>";
					echo "<td>$row[5]</td>";
					echo "<td>$row[6]</td>";
					echo "<td>$row[7]</td>";
					echo "<td>$row[8]</td>";
					echo "<td><a href=\"unreserve.php?ISBN=" .$row[0]. "\">Unreserve</a></td>";
					echo "<tr>\n";
				
				
			}
		

	?>

</body>
</html>