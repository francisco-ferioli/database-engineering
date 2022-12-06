<!DOCTYPE html>
<html>
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta name="theme-color" content="#000000">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Week 2</title>
		<!-- Cascading Style Sheet -->
			<link href="css/main.css" media="all" rel="stylesheet" type="text/css">
		<!-- Favicon-->
			<link rel="icon" type="image/svg+xml" href="img/upload.png">
	</head>
	<body>
		<header>
			<nav>
				<ul id="menu">
					<a href="#uploader"><li>UPLOADER</li></a>
					<a href="#overview"><li>OVERVIEW</li></a>
				</ul>
			</nav>
		</header>
		<main>
			<div id="cyan">
				<h1>Database engineering with PHP week 2</h1>
				<h2>1.1 Assignment 1</h2>
				<p>Create a web application in which the user can upload a number of files. In this application it is also possible to view the files and maintain the files.</p>
			</div>
			<div>
				<h3>1.1.1</h3>
				<p>Create a page in which users can upload files. This upload page allows the user to place a file on a server environment through an upload functionality.</p>
				<p>The file must meet the following conditions:</p>
				<ul>
					<li>The file must be an image of the .png, .jpeg, .jpg, or .gif format.</li>
					<li>The file must not exceed 3MB.</li>
					<li>The original file name must not exceed 50 characters and must contain at least 1 uppercase.</li>
				</ul>
			</div>
			<div id="cyan">
				<h1 id="uploader">File uploader</h1>
				<!-- Ask Rob why David's file works and mine doesn't -->
				<form action="upload.php" method="post" enctype="multipart/form-data">
					<p>
						<label for="file">Filename</label>
					</p>
						<input type="file" name="uploadedFile"/>
					<p>
						<input type="submit" name="submit" value="Upload" />
					</p>
				</form>
			</div>
			<div>
				<h3>1.1.2</h3>
				<p>Create an overview page on which all files are shown per file type. This means that there is a summary page for all jpeg's and a separate one for all png's, etc.
				The overview page should have some minimal styling. Create a nice overview.</p>
				<p>This summary page has the ability to delete the files.</p>
				<p>Tip: Look at the function “unlink()”on php.net</p>
			</div>
			<div id="cyan">
				<h1 id="overview">Overview page</h1>
				<?php
					// Create an overview page on which all files are shown per file type.
					// https://www.php.net/manual/en/function.glob
					// USE FORM FROM WEEK 1 TO CREATE A DROPDOWN
					echo "<h2>JPG files</h2>";
					foreach (glob("upload/*.jpg") as $filename) {
						echo "$filename<br>";
					}
					echo "<h2>PNG files</h2>";
					foreach (glob("upload/*.png") as $filename) {
						echo "$filename<br>";
					}
				?>
				<!-- Idea: create a dropdown list which lets you chooose between filetype. Do not create a separate file, just embed PHP below.
				**** Styling already incorporated in this page.
				**** https://www.php.net/manual/en/function.unlink 
				-->
			</div>
		</main>
		<footer>
			<p>© Francisco Ferioli, 2022. CC BY SA 4.0. Some rights reserved.</p>
		</footer>
	</body>
</html>
