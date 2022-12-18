<?php
	//Check if a form has been posted to the script
	if(isset($_POST['submit_contact_details'])){
		//If true -> continue
		//Check if name is not null
		if(
			$_POST['name'] !== null AND
			$_POST['surname'] !== null AND
			$_POST['telephone_number'] !== null AND
			$_POST['email'] !== null AND
			$_POST['street_name'] !== null AND
			$_POST['street_number'] !== null AND
			$_POST['birthdate'] !== null){
			//If correct -> Give feedback to user
			$_SESSION['fifth'] = $_POST['submit_contact_details'];
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['surname'] = $_POST['surname'];
			$_SESSION['telephone_number'] = $_POST['telephone_number'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['street_name'] = $_POST['street_name'];
			$_SESSION['street_number'] = $_POST['street_number'];
			$_SESSION['birthdate'] = $_POST['birthdate'];
			echo "<p>Contact details saved</p>";
			echo "<a href='index.php?page=4_type_of_reservation'><button>Back</button></a>";
			echo "<a href='index.php?page=summary'><button>Next</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
		else{
			//If incorrect -> Give feedback and include contact_details form
			echo "<p style='color: red;'>These fields are mandatory, please fill them.</p>";
			include("5_contact_details.html");
			echo "<a href='index.php?page=4_type_of_reservation'><button>Back</button></a>";
			echo "<a href='index.php?page=logout'><button>Log out</button></a>";
		}
	}
	else{
		//If false -> Include include contact_details form
		include("5_contact_details.html");
		echo "<a href='index.php?page=4_type_of_reservation'><button>Back</button></a>";
		echo "<a href='index.php?page=logout'><button>Log out</button></a>";
	}
?>
