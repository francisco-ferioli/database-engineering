<?php
	//Check if a form has been posted to the script
	if(isset($_POST['submit_login'])){
		//If true -> continue
		//Check if username and password are correct
		if($_POST['username'] == "hotel" && $_POST['password'] == "secret")
		{
			//If correct -> Set SESSION with name 'loggedIn' to true and give feedback to user
			$_SESSION['loggedIn'] = true;
			
			echo "<p>You can start adding reservations!</p>";
			echo "<a href=''><button>Back</button></a>";
			echo "<a href='index.php?page=2_number_of_guests'><button>Next</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
		else{
			//If incorrect -> Give feedback and include loginForm
			echo "<p style='color: red;'>wrong username and/or password</p>";
			include("1_login.html");
		}
	}
	else{
		//If false -> Include loginForm
		include("1_login.html");
	}
?>
