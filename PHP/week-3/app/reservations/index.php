<?php

session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta name="theme-color" content="#000000">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
	</head>
	<body>

		<?php
			
			//Check if user is logged in via SESSION
			if(isset($_SESSION['loggedIn'])){
				//If SESSION['loggedIn'] has been set -> give feedback to user
				echo"<pre>";
				//var_dump($_SESSION);
				echo"</pre>";
				echo "<p>You can start adding reservations!</p>";
				echo "<a href=''><button>Back</button></a>";
				echo "<a href='index.php?page=2_number_of_guests'><button>Next</button></a>";
				echo "<a href='index.php?page=logout'><button>Log out</button></a>";
			}
			else{
				//If SESSION['loggedIn'] has not been set -> give feedback and include login script
				echo "You are not logged in.<br /><br />";
				include("1_login.php");
			}
		?>

	</body>
</html>
