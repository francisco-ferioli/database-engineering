<?php

session_start();

	// Source: https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php

	// It works, but why do I have to fill the form twice to get set the values?

	// background-color cookie
	$bc_name = 'background-color';
	$bc_value = filter_input(INPUT_POST, "background-color");
	$bc_expire = strtotime('+10 minutes');
	setcookie($bc_name, $bc_value, $bc_expire);

	// font-family cookie
	$ff_name = 'font-family';
	$ff_value = filter_input(INPUT_POST, "font-family");
	$ff_expire = strtotime('+10 minutes');
	setcookie($ff_name, $ff_value, $ff_expire);

	// font-size coookie
	$fs_name = 'font-size';
	$fs_value = filter_input(INPUT_POST, "font-size");
	$fs_expire = strtotime('+10 minutes');
	setcookie($fs_name, $fs_value, $fs_expire);

	/* read https://www.php.net/manual/en/function.header
	if(isset($_COOKIE[$bc_name])) {
		header('Location: index.php');
	}
	if(isset($_COOKIE[$ff_name])) {
		header('Location: index.php');
	}
	if(isset($_COOKIE[$fs_name])) {
		header('Location: index.php');
	}
	
	From the book
	
	// Set a cookie in the browser
	$name ='userid';
	$value ='1';
	$expire = strtotime('+10 minutes');
	$path ='/';
	setcookie($name, $value, $expire, $path);
	*/
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
			<link href="../css/main.css" media="all" rel="stylesheet" type="text/css">
			<style>
				body {
					background-color: <?= filter_input(INPUT_COOKIE, "background-color")?>;
					font-family: <?= filter_input(INPUT_COOKIE, "font-family")?>;
				}

				p, li {
					font-size: <?= filter_input(INPUT_COOKIE, "font-size")?>;
				}
			</style>
		<!-- Favicon-->
			<link rel="icon" type="image/svg+xml" href="img/upload.png">
	</head>
	<body>
		<header>
			<div>
				<nav>
					<ul>
						<a href="../"><li>HOME</li></a>
						<a href="../reservations"><li>RESERVATIONS</li></a>
						<a href="../settings"><li>SETTINGS</li></a>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<div id="colored_div">
				<h2>Database engineering with PHP week 3</h2>
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
				<form action="" method="post">
					<div>
						<label for="background-color">background-color</label>
					</div>
					<div>
						<select name="background-color" id="background-color">
								<option value="">...</option>
								<option value="#000000">Black</option>
								<option value="#3399DB">Light blue</option>
								<option value="#ffffff">White</option>
						</select>
					</div>
					<div>
						<label for="font-family">font-family</label>
					</div>
					<div>
						<select name="font-family" id="font-family">
								<option value="">...</option>
								<option value="cursive">Cursive</option>
								<option value="sans-serif">Sans serif</option>
								<option value="serif">Serif</option>
						</select>
					</div>
					<div>
						<label for="font-size">font-size</label>
					</div>
					<div>
						<select name="font-size" id="font-size">
								<option value="">...</option>
								<option value="12pt">12</option>
								<option value="14pt">14</option>
								<option value="16pt">16</option>
						</select>
					</div>
					<div>
						<input name="save-settings" id="save-settings" type="submit" value="save settings">
					</div>
				</form>
				<?php
					if(!isset($_COOKIE[$bc_name])) {
						 echo $bc_name . " is not set.<br>";
					} else {
						 echo $bc_name . " is set as " . $_COOKIE[$bc_name] . ".<br>";
					}
					if(!isset($_COOKIE[$ff_name])) {
						 echo $ff_name . " is not set.<br>";
					} else {
						 echo $ff_name . " is set as " . $_COOKIE[$ff_name] . ".<br>";
					}
					if(!isset($_COOKIE[$fs_name])) {
						 echo $fs_name . " is not set.<br>";
					} else {
						 echo $fs_name . " is set as " . $_COOKIE[$fs_name] . ".<br>";
					}
				?>
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
