<?php
// summary.php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta name="theme-color" content="#000000">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<!-- Cascading Style Sheet -->
			<link href="css/main.css" media="all" rel="stylesheet" type="text/css">
		<!-- Favicon-->
			<link rel="icon" type="image/svg+xml" href="img/upload.png">
	</head>
	<body>
		<header>
			<div>
				<nav>
					<ul>
						<a href="#reservations"><li>RESERVATIONS</li></a>
						<a href="#settings"><li>SETTINGS</li></a>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<?php
			//Check if a form has been posted to the script
			if(isset($_SESSION['second'], $_SESSION['third'], $_SESSION['fourth'], $_SESSION['fifth'])){
				//If true -> continue
				//Display answers
				echo "<h2>Number of guests</h2>";
				echo $_SESSION['number_of_guests'], "<br>";
				echo "<h2>Allergies</h2>";
				echo $_SESSION['eggs'], "<br>";
				echo $_SESSION['house_dust_mites'], "<br>";
				echo $_SESSION['milk'], "<br>";
				echo $_SESSION['peanut'], "<br>";
				echo $_SESSION['pollen'], "<br>";
				echo "<h2>Type of reservation</h2>";
				echo $_SESSION['type_of_reservation'], "<br>";
				echo "<h2>Contact details</h2>";
				echo "Name: ", $_SESSION['name'], "<br>";
				echo "Surname: ", $_SESSION['surname'], "<br>";
				echo "Telephone number: ", $_SESSION['telephone_number'], "<br>";
				echo "Emal: ", $_SESSION['email'], "<br>";
				echo "Street name: ", $_SESSION['street_name'], "<br>";
				echo "Street number: ", $_SESSION['street_number'], "<br>";
				echo "Birthdate: ", $_SESSION['birthdate'], "<br>";
			}
			else{
				echo "You havent answered any forms.";
			}
?>
			<a href='index.php?page=5_contact_details'><button>Back</button></a>

			<button>Next</button>

			<a href='index.php?page=2_number_of_guests'><button>Add guests</button></a>

			<a href='index.php?page=logout'><button>Log out</button></a>
		</main>
	</body>
</html>
