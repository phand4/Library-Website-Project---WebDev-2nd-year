				<?php
				if(isset($_GET['start'])== ''){?>
				<form action="searchbox.php?start=5" method="post">
				<input type="hidden" name="searchq">
				<button type="submit" name="Next Page" value="Next" class="button">Next</button>
				</form>
				 <?php } 
				 if(isset($_GET['start'])== 5 && ($_GET['start'] != 10 || 0)){?>
				<form action="searchbox.php" method="post">
				<input type="hidden" name="searchq">
				<button type="submit" name="Back Page" value="Back1" class="button">Back</button>
				</form>
				 <?php } 
				 if(isset($_GET['start'])==5 && ($_GET['start'] != 10 || 0)){?>
				<form action="searchbox.php?start=10" method="post">
				<input type="hidden" name="searchq">
				<button type="submit" name="Next Page2" value="Next2" class="button">Next</button>
				</form>
				 <?php } else
				 if(isset($_GET['start'])==10  && ($_GET['start'] != 5 || 0)){?>
				<form action="searchbox.php?start=5" method="post">
				<input type="hidden" name="searchq">
				<button type="submit" name="Back Page2" value="Back2" class="button">Back</button>
				</form>
				 <?php } ?>