<!DOCTYPE html>
<?php
	// Source: https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php

	// Set a cookie in the browser
	$name ='userid';
	$value ='1';
	$expire = strtotime('+10 minutes');
	$path ='/';
	setcookie($name, $value, $expire, $path);

	// Get the value of a cookie in the browser
	$userid = filter_input(INPUT_COOKIE,'userid', FILTER_VALIDATE_INT); // 1
?>
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
			<div id="colored_div">
				<h2>Database engineering with PHP week 3</h2>
			</div>
			<div id="reservations">
				<h2>1.1 Assignment 1: sessions</h2>
				<blockquote>Rob's suggestion: make a form with one page for each question.</blockquote>
				<p>Create a system where guests can make a reservation at a restaurant. The data must be
				stored in sessions. This allows the user to navigate back and forth in the reservation and
				adjust it if needed. If the user closes the browser, the reservation is deleted.</p>
				<p>The system must consist of the following pages that can be navigated between:</p>
				<ol>
					<li>Specifying the number of guests</li>
					<li>Specifying allergies (per guest). For example: with a reservation of, for example, four guests, four boxes must be placed to indicate allergies</li>
					<li>Specifying the type of reservation: breakfast, lunch or dinner</li>
					<li>Providing the contact details</li>
					<li>A summary of the specified data</li>
				</ol>
			</div>
			<div id="colored_div">
				<h2>Solution</h2>
				<p>Solution</p>
			</div>
			<div id="settings">
				<h2>1.2 Assignment 2: temporary cookies</h2>
				<blockquote>Rob's suggestion: also create a form. The inhead CSS is necessary to be able to dinamically change it with PHP.</blockquote>
				<p>Create a settings page for a web application. On this page, three style settings should be possible:</p>
				<ul>
					<li>Background colour</li>
					<li>Font type</li>
					<li>Font size</li>
				</ul>
				<p>You can come up with three values for each of the settings.</p>
				<p>After confirming these settings, they must be stored in cookies so that they are still set
				on a later visit to the page. After 10 minutes, the settings may return to their original
				values (The browser's default values).</p>
				<p>Of course, you also have to apply the settings in the style of the page. For this
				assignment, an in-head style sheet may be used.</p>
				<p>TIP: Since cookies only work after a re-initialization of the page, you may have to force
				this. Take a look at the "header" function on
				https://www.php.net/manual/en/function.header . Read the documentation carefully,
				because there are some pitfalls when using this method!</p>
			</div>
			<div id="colored_div">
				<h2>Solution</h2>
				<?php
					if(!isset($_COOKIE[$name])) {
						 echo "Cookie named '" . $name . "' is not set!";
					} else {
						 echo "Cookie '" . $name . "' is set!<br>";
						 echo "Value is: " . $_COOKIE[$name];
					}
				?>
				<form action="" method="post">
					<div>
						<label for="background-color">background-color</label>
					</div>
					<div>
						<select name="background-color" id="background-color">
								<option value="">...</option>
								<option value="Black">Black - #000000</option>
								<option value="Light-blue">Light blue - #3399DB</option>
								<option value="White">White - #ffffff</option>
						</select>
					</div>
					<div>
						<label for="font-family">font-family</label>
					</div>
					<div>
						<select name="font-family" id="font-family">
								<option value="">...</option>
								<option value="Arial">Arial</option>
								<option value="Brush Script MT">Brush Script MT</option>
								<option value="Times">Times</option>
						</select>
					</div>
					<div>
						<label for="font-size">font-size</label>
					</div>
					<div>
						<select name="font-size" id="font-size">
								<option value="">...</option>
								<option value="12">12</option>
								<option value="14">14</option>
								<option value="16">16</option>
						</select>
					</div>
					<div>
						<input type="submit" value="Save settings">
					</div>
				</form>
			</div>
		</main>
		<footer>
			<div>
				<p>© Francisco Ferioli, 2022. CC BY SA 4.0. Some rights reserved.</p>
				<p>ARGENTINA</p>
				<p>🐋 🇦🇷 🐴 🍺 ⚽ 👨‍🌾 🎸 🦌 🧉 🐧 🚜 🌾 🐮 🍷 🐆</p>
			</div>
		</footer>
	</body>
</html>
