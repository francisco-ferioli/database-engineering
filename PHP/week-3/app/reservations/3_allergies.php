<?php
	//Check if a form has been posted to the script
	if(isset($_POST['submit_allergies'])){

		//If true -> continue
		$_SESSION['third'] = $_POST['submit_allergies'];
		$_SESSION['eggs'] = $_POST['eggs'];
		$_SESSION['house_dust_mites'] = $_POST['house_dust_mites'];
		$_SESSION['milk'] = $_POST['milk'];
		$_SESSION['peanut'] = $_POST['peanut'];
		$_SESSION['pollen'] = $_POST['pollen'];
		echo "<p>Allergies saved</p>";
		echo "<a href='index.php?page=2_number_of_guests'><button>Back</button></a>";
		echo "<a href='index.php?page=4_type_of_reservation'><button>Next</button></a>";
		echo "<a href='index.php?page=logout'><button>Log out</button></a>";
	}
	else{
		//If false -> Include allergies form
		include("3_allergies.html");
		echo "<a href='index.php?page=2_number_of_guests'><button>Back</button></a>";
		echo "<a href='index.php?page=4_type_of_reservation'><button>Next</button></a>";
	}
?>
