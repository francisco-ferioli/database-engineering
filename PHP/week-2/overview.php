<?php
	echo "<h2>JPG files</h2>";
	$jpg = (foreach (glob("upload/*.jpg") as $filename) {
		echo "$filename<br>";
	});
	echo "<h2>PNG files</h2>";
	$png = (foreach (glob("upload/*.png") as $filename) {
		echo "$filename<br>";
	})

	$filetype = array($jpg, $png);
?>

/*
	$distances = array(
		"Berlin" => array(
			"Berlin" => 0,
			"Moscow" => 1607.99,
			"Paris" => 876.96,
			"Prague" => 280.34,
			"Rome" => 1181.67
		)
	);
*/

<form method="POST" action="overview.php">
	<p>File type:
		<select name="file_type">
			<?php 
			foreach($filetype as $files) {
				  echo $files;
				  echo "<option value='$x'>$x</option>";
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
			$alsofiles = filter_input(INPUT_POST, 'file_type', FILTER_SANITIZE_SPECIAL_CHARS);
			echo $files;
		}
	}
?>
