
<html>
<head>
<?php
	session_start();
	include("connect.php");
	include("header.php");
	include("footer.php");

	
	if(mysqli_connect_errno()){
		echo "Failed to connect: " .mysqli_connect_error();
	}
?>
</head>
<body>
	<?php

	include("connect.php");
	
	$output = '';
	if(isset($_GET['start'])){
		$start = $_GET['start'];
		
	}else{
		$start = 0;
		
	}
		if(isset($_POST['searchq']) && $_POST['searchq'] !== ' '){
			$search = mysqli_real_escape_string($db, $_POST['searchq']);
			$sql = mysqli_query($db, "SELECT * FROM books WHERE bookTitle LIKE ('%$search%') OR author LIKE ('%$search%') LIMIT ".$start.",5") or die(mysqli_error($db));
			$c = mysqli_num_rows($sql);
			if($c == 0){
					$out = 'No Search results for <b>"' . $search .'"</b>';
			}else
			{	$result = mysqli_query($db, "SELECT * from books");
				$field_num = mysqli_num_fields($result);
				echo "<table border ='0'><tr>";
				for($i =0; $i<$field_num; $i++)
				{
					$field = mysqli_fetch_field($result);
					echo "<td>{$field->name}</td>";
				}
				echo "</tr>\n";
				while($row = mysqli_fetch_array($sql)){

					echo"<tr>";		
					echo "<td>$row[0]</td>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td>$row[3]</td>";
					echo "<td>$row[4]</td>";
					echo "<td>$row[5]</td>";
					echo "<td>$row[6]</td>";

					echo "<td><a href=\"reserve.php?ISBN=" .$row[0]. "\">Reserve</a></td>";
					echo "</tr>\n";
					
				}
				
			}
		}else{		
			echo 'Invalid search entry';
		}
		$sql2 = mysqli_query($db, "SELECT * FROM books WHERE bookTitle LIKE ('%$search%') OR author LIKE ('%$search%')") or die(mysqli_error($db));
		$count = mysqli_num_rows($sql2);
		if($count > 5){	
			include("pages.php");
		}
		
	?>

	</body>
</html>