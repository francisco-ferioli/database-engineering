<?php
	session_start();

	session_set_cookie_params($name, $value, $expire, $path, $domain, $secure, $httponly);

	$lifetime = 60 * 60 * 24 * 365; // 1 year in seconds
	session_set_cookie_params($lifetime,'/');
	session_start();

	$_SESSION['product_code'] ='MBT-1753';

	$product_code = $_SESSION['product_code'];

	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	$_SESSION['cart']['keyl'] ='valuel';
	$_SESSION['cart']['key2'] ='value2';

	$cart = $_SESSION['cart'];
	foreach ($cart as $item) {
		echo'<li>'. $item .'</li>';
	}

	unset ($_SESSION ['cart']) ;

	$_SESSION = array();

	$name = sessionname(); // By default, PHPSESSID

	$id = session_id(); // For example, lljeflfoilg8u6qnui4f8b6el4

	session_id('abcl23');

	$_SESSION = array(); // Clear session data from memory
	session_destroy(); // Clean up the session ID

	$name = session_name(); // Get name of session cookie
	$expire = strtotimet('-1 year'); // Create expire date in the past
	$params = session_get_cookie_params(); // Get session params
	$path = $params['path'];
	$domain = $params['domain'];
	$secure = $params['secure'];
	$httponly = $params['httponly'];
	$setcookie($name,'', $expire, $path, $domain, $secure, $httponly);
?>
