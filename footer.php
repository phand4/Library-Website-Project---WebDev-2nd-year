
<div class="footer">
	<form method="post" action="searchbox.php">
		<input type="text" name="searchq" required>
		<input type="submit" name="submit" value="Search" class="button">
	</form>
	
	<form name ="dropsearch" method = "get" action= "./search.php?categoryq="'.$row['categoryDesc'].'"\">
		<select name ="categoryq" class="dropdown" id="drsearch">
			<?php
			  
			$sql = mysqli_query($db, "SELECT categoryDesc FROM category");
				
			while($row = $sql->fetch_assoc())
			{	
				echo '<option value="' . $row['categoryDesc'] . '">"' . $row['categoryDesc'] . '"</option>';
			}
			?>
		</select>
		<input type="submit" id="submit" value="Search">
	</form>
		
		<p>Site Designed by: Peter Hand C16769411<p>
</div>