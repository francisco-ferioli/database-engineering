<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta name="theme-color" content="#000000">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Week 1</title>
		<!-- Cascading Style Sheet -->
			<link href="css/main.css" media="all" rel="stylesheet" title="Main" type="text/css">
		<!-- Favicon-->
			<link rel="icon" type="image/svg+xml" href="img/png/logo.png">
	</head>
	<body>
		<h1>Database engineering with PHP week 1</h1>
		<h2>1.1 Assignment 1</h2>
		<p>Given is the following multidimensional array with distances between cities in kilometers.</p>
			<?php
				$distances = array(
					"Berlin" => array(
						"Berlin" => 0,
						"Moscow" => 1607.99,
						"Paris" => 876.96,
						"Prague" => 280.34,
						"Rome" => 1181.67
					),
					"Moscow" => array(
						"Berlin" => 1607.99,
						"Moscow" => 0,
						"Paris" => 2484.92,
						"Prague" => 1664.04,
						"Rome" => 2374.26
					),
					"Paris" => array(
						"Berlin" => 876.96,
						"Moscow" => 641.31,
						"Paris" => 0,
						"Prague" => 885.38,
						"Rome" => 1105.76
					),
					"Prague" => array(
						"Berlin" => 280.34,
						"Moscow" => 1664.04,
						"Paris" => 885.38,
						"Prague" => 0,
						"Rome" => 922
					),
					"Rome" => array(
						"Berlin" => 1181.67,
						"Moscow" => 2374.26,
						"Paris" => 1105.76,
						"Prague" => 922,
						"Rome" => 0
					)
				);
			?>
		<!-- Explained by Rob -->
		<h3>1.1.1</h3>
		<p>Create a form in which you can select cities that appear in the given array with two dropdown
		(select) boxes. These dropdown boxes are dynamically populated with the contents of the array. So if
		a city is added to the array, it is also automatically added to the dropdown boxes.</p>

		<form method="POST" action="index.php">
			<p>City A:
				<select name="from">
					<?php 
					foreach($distances as $x => $x_value) {
									  echo $x;
									  echo "<option value='$x'>$x</option>";
									}
					?>
				</select>
			</p>
			<p>City B:
				<select name="to">
					<?php 
					foreach($distances as $y => $y_value) {
									  echo $y;
									  echo "<option value='$y'>$y</option>";
									}
					?>
				</select>
			</p>
			<input type="submit" name="submit" value="Submit">
		</form>

		<h3>1.1.2</h3>
		<p>When the form is sent, the distance between the two chosen cities must be displayed. You should
		display this in a sentence in which the selected cities and the distance are stated. For example:</p>
		<blockquote>“The distance between Berlin and Rome is 1181,67 kilometers”</blockquote>
		<p>You also need to apply checks if no values are sent.</p>

		<form method="POST" action="index.php">
			<p>City A:
				<select name="from">
					<?php 
					foreach($distances as $x => $x_value) {
									  echo $x;
									  echo "<option value='$x'>$x</option>";
									}
					?>
				</select>
			</p>
			<p>City B:
				<select name="to">
					<?php 
					foreach($distances as $y => $y_value) {
									  echo $y;
									  echo "<option value='$y'>$y</option>";
									}
					?>
				</select>
			</p>
			<input type="submit" name="submit" value="Submit">
		</form>

		<?php
			if($_REQUEST["submit"])
			{
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  // collect value of input field
					$from = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_SPECIAL_CHARS);
					$to = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_SPECIAL_CHARS);
					echo "<br>The distance between $from and $to is ". $distances[$from][$to] . ".";
				}
			}
		?>

		<h2>1.2 Assignment 2</h2>
		<p>You have been asked to write a comment module for a web application. This module consists of two
		components; a form and a confirmation screen.</p>
		<p>The form consists of the following fields and requirements:</p>
		<ul>
			<li>Name: Mandatory, at least two characters;</li>
			<li>Email: Mandatory, must be correct;</li>
			<li>Choice between Student or Teacher: A choice must be made;</li>
			<li>Comment: Mandatory, at least five words;</li>
			<li>Option to send an email to all users of the application;</li>
		</ul>
		<p>If the input does not meet the requirements, an error message should be displayed. All errors must
		be displayed at once. So if the email address is not correct and the comment is not filled in, you need
		to display both messages at the same time.</p>

		<p>If all the entered data is correct, the form may be sent. A response must be given that the form has
		been sent. This response consists out of the entered values in the form and has to look like this:</p>

		<blockquote>
			<p>"Dear {{ Name }},</p>
			<p>You will post comments as {{ Student or Teacher }} with the following e-mail address: {{ Email }}.</p>
			<p>The comment is as follows: {{ Comment }}.</p>
			<p>All users will be notified of this / All users will not be notified."</p>
		</blockquote>
		
		<hr>
		
		<h1>Form</h1>
		<form action="<?= filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_SPECIAL_CHARS); ?>" method="post">
			<!-- Mandatory, at least 2 characters -->
			<h3>Name</h3>
			<p><input type="text" name="name" placeholder="Fill in your name..."></p>
			<!-- Mandatory, must be correct -->
			<h3>Email</h3>
			<p><input type="email" name="email" placeholder="you@example.com"></p>
			<!-- Mandatory -->
			<h3>Are you a</h3>
			<p>
				<input type="radio" name="student/teacher" value="student" checked>Student
				<input type="radio" name="student/teacher" value="teacher">Teacher
			</p>
			<!-- Mandatory, at least 5 words -->
			<h3>Comments</h3>
			<textarea name="comment" placeholder="Write at least 5 words..."></textarea>
			<!-- Option to send an email to all users of the application -->
			<h3>Would you like to send an email to all users?</h3>
			<p>
				<input type="checkbox" name="send_email" value="be" checked>
			</p>
			<input type="submit" name="submit" value="Submit">

		<!-- Form validation. Rob: first do all the empty checks, then do the rest -->

		<?php
			echo "<br><br>";
			$err = [];
			//Only start the code when the submit button is pressed
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				/* Check if all fields are filled in
				 * This can be done in one single line, combining all the conditions
				 * A different way to handle it is to 'step into' every condition
				 * This allows you to 'customize' the error messages.
				 */

				// Checking if our form entries are empty
				if (empty($_POST['name'])) {
					$err[] = "Forgot name"; //and add a message to the err array
				}
				if (empty($_POST['email'])) {
					$err[] = "Forgot email";
				}
				if (empty($_POST['student/teacher'])) {
					$err[] = "Forgot student/teacher";
				}
				if (empty($_POST['comment'])) {
					$err[] = "Forgot comment";
				}

				//If there are no items present in the err array, we can assume there are no empty entries
				if (count($err) == 0) { 
					/*
					 * Using filter input to retrieve the information from the form
					 * allows you to place a sanitization or validation filter to check the data integrity
					 * Check php.net for all available filters
					 */
					$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
					
					//We can also do further checking on data integrity
					if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
						$err[] = "Invalid email";
					}

					$student_teacher = filter_input(INPUT_POST, 'student/teacher', FILTER_SANITIZE_SPECIAL_CHARS);
					
					$comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_SPECIAL_CHARS);
					
					$send_email = filter_input(INPUT_POST, 'send_email', FILTER_SANITIZE_SPECIAL_CHARS);

					//If no other errors occured during data integrity checks, we can finish
					if (count($err) == 0) {
						echo
							"Dear <b>{$name}</b><br>",
							"You will post comments as <b>{$student_teacher}</b> with the following e-mail address: <b>{$email}</b>.<br>",
							"The comment is as follows:<br> <b>{$comment}</b>.<br>",
							"All users will <b>{$send_email}</b> notified of this.";
					}
				}
			}
		?>

		<?php // Checked by Rob, it works.
			if (strlen($_POST['name']) < 2) {
				$err[] = "Name too short";
			}
			if (str_word_count($_POST['comment']) < 5) {
				$err[] = "Comment too short";
			}

			//If there are items in the err array, we can print the messages in it
			if (count($err) > 0) {
				echo "<ul>";
				foreach ($err as $error) {
					echo "<li>$error</li>";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>
