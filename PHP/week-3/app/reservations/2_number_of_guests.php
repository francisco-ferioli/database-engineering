<?php
	//Check if a form has been posted to the script
	if(isset($_POST['submit_number_of_guests'])){

		//If true -> continue
		//Check if number_of_guests is correct
		if($_POST['number_of_guests'] > 0)
		{
			//If correct -> Set SESSION with name 'loggedIn' to true and give feedback to user
			$_SESSION['second'] = $_POST['submit_number_of_guests'];
			$_SESSION['number_of_guests'] = $_POST['number_of_guests'];
			echo "<p>Number of guests saved</p>";
			echo "<a href='index.php'><button>Back</button></a>";
			echo "<a href='index.php?page=3_allergies'><button>Next</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
		else{
			//If incorrect -> Give feedback and include number_of_guests form
			echo "<p style='color: red;'>This field is mandatory, please fill it</p>";
			include("2_number_of_guests.html");
			echo "<a href='index.php'><button>Back</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
	}
	else{
		//If false -> Include number_of_guests form
		include("2_number_of_guests.html");
		echo "<a href='index.php'><button>Back</button></a>";
		echo "<a href='index.php?page=logout'><button>Log out</button></a>";
	}
?>
