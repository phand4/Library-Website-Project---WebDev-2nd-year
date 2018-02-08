<html>
<head>
<?php
	include("connect.php");
	include("header.php");
	include("footer.php");
	$link = 'library.php'
	
?>
</head>
<body>
	<?php
	
		
		mysqli_free_result($result);
		
			if(isset ($_POST['submit'])){
				$u = $_POST['username'];
				$p = $_POST['password'];
				$f = $_POST['firstname'];
				$s = $_POST['surname'];
				$al1 = $_POST['address_line_1'];
				$al2 = $_POST['address_line_2'];
				$c = $_POST['city'];
				$t =$_POST['telephone'];
				$m = $_POST['mobile'];
				
				$insert = mysqli_query($db, "INSERT INTO users (username, password, firstname, surname, AddressLine1, AddressLine2, city, telephone, mobile) VALUES ('$u', '$p', '$f', '$s', '$al1', '$al2', '$c', '$t', '$m')");
			
				if($insert){
					echo '<br>Input data success';
					fnx($link);
				}else{
					echo '<br> Input Failed';
					printf("Errormessage: %s\n", $db->error);
					$link .= 'Register.php'
					fnx($link);
				}
			
			}
	?>
</body>
</html>