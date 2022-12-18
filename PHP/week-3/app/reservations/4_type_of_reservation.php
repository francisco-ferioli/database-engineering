<?php
	//Check if a form has been posted to the script
	if(isset($_POST['submit_type_of_reservation'])){
		//If true -> continue
		//Check if allergies is correct
		if($_POST['type_of_reservation'] !== null)
		{
			//If correct -> Give feedback to user
			$_SESSION['fourth'] = $_POST['submit_type_of_reservation'];
			$_SESSION['type_of_reservation'] = $_POST['type_of_reservation'];
			echo "<p>Type of reservation saved</p>";
			echo "<a href='index.php?page=3_allergies'><button>Back</button></a>";
			echo "<a href='index.php?page=5_contact_details'><button>Next</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
		else{
			//If incorrect -> Give feedback and include type_of_reservation form
			echo "<p style='color: red;'>This field is mandatory, please fill it</p>";
			include("4_type_of_reservation.html");
			echo "<a href='index.php?page=3_allergies'><button>Back</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
	}
	else{
		//If false -> Include type_of_reservation form
		include("4_type_of_reservation.html");
		echo "<a href='index.php?page=3_allergies'><button>Back</button></a>";
		echo "<a href='index.php?page=logout'><button>Log out</button></a>";
	}
?>
