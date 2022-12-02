<?php // Uppercase problem solved by David from Slovakia with strpos and substr

	$fileSize = (3*1024*1024); //3Mb
	$strlen = 50;

	//#### Upload with restrictions ####
	
	//If there are no errors (error == 0), continue
	if ($_FILES["uploadedFile"]["error"] == 0) {
		
		// HAYSTACK/array. The file must be an image of the .png, .jpeg, .jpg, or .gif format.
		$acceptedFileTypes = ["image/gif", "image/jpg", "image/jpeg", "image/png"];

		// Create a new finfo instance. This is required in order to have finfo_file work. $flag is a fileinfo constant, in this case, FILEINFO_MIME_TYPE, which returns the mime type.
		$flag = finfo_open(FILEINFO_MIME_TYPE);
		
		// NEEDLE. Return information about a file. $flag is positioned before $filename, why does it still work?
		$filename = ($_FILES["uploadedFile"]["tmp_name"]);
		$uploadedFileType = finfo_file($flag, $filename);
		
		// Searches for needle ($uploadedFileType) in haystack/array ($acceptedFileTypes) using loose comparison
		if(in_array($uploadedFileType, $acceptedFileTypes)) {

			//The file must not exceed 3MB.
			if ($_FILES["uploadedFile"]["size"] < $fileSize ) {
			
				// The original file name must not exceed 50 characters
				if (strlen($_FILES["uploadedFile"]["name"]) < $strlen) {
			
					// The original file name must contain at least 1 uppercases
					// Create a representative, shorter variable
					$name = $_FILES["uploadedFile"]["name"];
					// Find the position of the first occurrence of a substring in a string
					$pointPos = strpos($name, '.');
					// Return the portion of string specified by the offset (0) and length ($pointPos) parameters. 
					$nameWithoutExt = substr($name, 0, $pointPos);
					// Check if the file name contains all lower cases, else
					
					if (!ctype_lower($nameWithoutExt)) {
						// All ckecks passed, then display info about the file
						echo "Upload: ", $_FILES["uploadedFile"]["name"], "<br/>";
						echo "Type: ", $uploadedFileType, "<br />";
						echo "Size: ", ($_FILES["uploadedFile"]["size"] / 1024), " Kb<br/>";
						echo "Stored in: ", $_FILES["uploadedFile"]["tmp_name"];
					}
					else {
						echo "File name does not have uppercase";
					}
				}
				else {
					echo "File name too long";
				}
			}
			else {
				echo "Invalid file size. Must be less than ". $fileSize/1024/1024 ."MB.";
			}
		}		
		else {
			echo "Invalid file type. Must be gif, jpg or jpeg.";
		}
	}
	
	else {
		echo "Error: " . $_FILES["uploadedFile"]["error"] . "<br />";
		echo "See <a href='https://www.php.net/manual/en/features.file-upload.errors.php' target='_BLANK'>PHP.net</a> for the explanation of the error messages."; 
	}
?>
