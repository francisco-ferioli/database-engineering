<?php
	// The syntax of the cookie function
	setcookie($name, $value, $expire, $path, $domain, $secure, $httponly)

	// Set a cookie in the browser
	$name ='userid';
	$value ='87';
	$expire = strtotime('+10 minutes');
	$path ='/';
	setcookie($name, $value, $expire, $path);

	// Get the value of a cookie in the browser
	$userid = filter_input(INPUT_COOKIE,'userid', FILTER_VALIDATE_INT); // 87

	// Delete a cookie from the browser
	$expire = strtotime('-1 year');
	setcookie('userid','', $expire,'/');
?>
