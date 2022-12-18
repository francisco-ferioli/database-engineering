The syntax of the setcookieQ function
<?php
	setcookie($name, $value, $expire, $path, $domain, $secure, $httponly)
?>

The parameters of the setcookie() function

Parameter
 Description
$name
 The name of the cookie.
$value
 The value of the cookie. The default is an empty string.
$expire
 The expiration date of the cookie as a timestamp. If set to 0, the
cookie expires when the user closes the browser. The default is 0.
$path
 The path on the server that the cookie is available to. If set to 7’,
the cookie is available to all directories on the current server. The
default is the directory of the PHP file that’s setting the cookie.
$domain
 The domain that the cookie is available to. The default is the
name of the server that’s setting the cookie.
$secure
 If TRUE, the cookie is available only if it is sent using HTTPS.
The default is FALSE.
$httponly
 If TRUE, the cookie is only made available through the HTTP
protocol and not through chent-side scripting languages such as
JavaScript. The default is FALSE.

Set a cookie in the browser

$name = 'userid';
$value = '87';
$expire = strtotime('+1 year');
$path = '/';
setcookie($name, $value, $expire, $path);

Get the value of a cookie from the browser

$userid = filter_input(INPUT_COOKIE, 'userid', FILTER_VALIDATE_INT); // 87

Delete a cookie from the browser

$expire = strtotime('-1 year');
setcookie('userid', '', $expire, '/');

A function to start a session

Function
 Description
session_start(), Starts a new session or résumés a previous session. Returns TRUE if successful and FALSE otherwise. This function must be called before the page sends any HTML output to your application.

Start a session with the default cookie parameters
session_start();

The syntax of the session_set_cookie_params() function
session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly)

The parameters of the session_set_cookie_params() function
Parameter, Description
$lifetime, The lifetime of the session cookie in seconds. The default is 0.
$path, The path on the server the session cookie is available to. The default is the current directory of the script that is setting the cookie.
$domain, The domaih that the cookie is available to. The default is the name of the server that is setting the cookie.
$secure, If TRUE, the cookie is available only if it is sent using a secure HTTP connection (an HTTPS connection). The default is FALSE.
$httponly, If TRUE, the cookie is only available through the HTTP protocol and not through client-side scripting languages such as JavaScript. The default is FALSE.

Start a session with custom cookie parameters

$lifetime = 60 * 60 * 24 * 365; // 1 year in seconds
session_set_cookie_params($lifetime, 1/');
session_start();

How to set and get scalar variables

Set a variable in a session
$_SESSION['product_code'] = ’MBT-1753';

Get a variable from a session
$product_code = $_SESSION['product_code'];

How to set and get arrays

Set an array in a session
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

Add an element to an array that’s stored in a session
$_SESSION['cart']['keyl'] = ’valuel';
$ SESSIOH['cart'IE'key2'] = 'value2';

Get and use an array that’s stored in a session
$cart = $_SESSION['cart’];
foreach ($cart as $item) {
	echo '<li>' . $item . '</li>';
}

How to remove variables from a session

Remove a session variable
unset ($_SESSION [ ' cart' ]) ;

Remove all session variables
$_SESSION = arrayO;

Functions to manage sessions
Function, Description
session_name(), Gets the name of the session cookie. The default is PHPSESSID.
session_id([$id]), If the parameter isn’t specified, this function gets the curreht session ID. If no session exists, this function gets an empty string. If the parameter is specified, this function sets the session ID to the specified value.
session_regenerateid(), Creates a new session ID for the current session. Returns TRUE if successful and FALSE otherwise. This function can be used to help prevent session hijacking.
session_write_close(), Ends the current session and saves session data. This function is only needed in special cases like redirects.

Get the name of the session cookie
	$name = sessionname(); // By default, PHPSESSID

Get the value of the session ID
	$id = session_id(); // For example, lljeflfoilg8u6qnui4f8b6el4

Set the session ID
	session id('abcl23');

A function to end a session

Function, Description
session_destroy(), Ends a session. Returns TRUE if successful and FALSE otherwise.

$_SESSION = array(); // Clear session data from memory
session_destroy(); // Clean up the session ID

Delete the session cookie from the browser

$name = session_name(); // Get name of session cookie
$expire = strtotimet('-1 year'); // Create expire date in the past
$params = session_get_cookie_params(); // Get session params
$path = $params[’path'];
$domain = $params['domain'];
$secure = $params['secure'];
$httponly = $params['httponly’];
$setcookie($name, '', $expire, $path, $domain, $secure, $httponly);

The index.php file
	<?php
		// Start session management with a persistent cookie
		$lifetime = 60 * 60 * 24 * 14; // 2 weeks in seconds
		session__set_cookie_params($lifetime, '/');
		session_start();

		// Create a cart array if needed
		if (empty($_SESSION['cart12'])) { $_SESSION['carti.2 1 ] = arrayO; >
		II Create a table of products
		$products = arrayO;
		$products['MMS-17541] = array('name' => 'Flute', 'cost' => '149.50');
		$products['MMS-6289'] = array('name' => 'Trumpet', 'cost' => '199.50');
		$products['MMS-34081] = array('name' => 'Clarinet', 'cost' => '299.50');

		// Include cart functions
		require_once('cart.php');

		// Get the action to perform
		$action = fïlter_input(INPUTPOST, 'action');
		if ($action === NULL) {
			$action = fïlter_input(INPUT_GET, 'action');
			if ($action === NULL) {
				$action = ' show_add__item' ;
			}
		}

		// Add or update cart as needed
		switch($action) {
			case 'add':
				$product_key = fïlter__input (INPUT_POST, ' productkey') ;
				$item_qty = filter_input(INPUT_POST, 'itemqty');
				add_item($product_key, $item_qty);
				include('cart_view.php');
				break;
		case 'update':
			$new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
			foreach($new_qty_list as $key => $qty) {
				if ($_SESSION['cart12'][$key]t'qty'] !=$qty) {
					update_item($key, $qty);
				}
			}
			include('cart_view.php');
			break;
		case 'show_cart':
			include('cart_view.php');
			break;
		case 'show_add_item':
			include('add_item_view.php');
			break;
		case 'empty_cart':
			unset($_SESSION['SESSION']);
			include('cart_view.php');
			break;
		}
	?>

The cart.php file
<?php
// Add an item to the cart
function add_item($key, $quantity) {
	global $products;
	if ($quantity < 1) return;

	// If item already exists in cart, update quantity
	if (isset($_SESSION['SESSION'][$key])) {
		$quantity += $_SESSION['SESSION'][$key]['qty'];
		update_item($key, $quantity);
		return;
	}

	// Add item
	$cost = $products[$key]['cost'];
	$total = $cost * $quantity;
	$item = array(
		'name' => $products[$key]['name']»
		'cost' => $cost,
		'qty' => $quantity,
		'total' => $total
	);
	$_SESSION['SESSION'][$key] = $item;

// Update an item in the cart
function update_item($key, $quantity) {
	$quantity = (int) $quantity;
		if (isset($_SESSION['cart12'][$key])) {
			if ($quantity <= 0) {
				unset($_SESSION['SESSION'][$key]);
			} else {
				$_SESSION['cart12'][$key]['qty'] = $quantity;
				$total = $_SESSION['SESSION'][$key]['cost'] *
					$_SESSION['cart12'][$key]['qty'];
				$_SESSION ['cart 12'HSkey) ['total'] = $total;
			}
		)

// Get cart subtotal
function get_subtotal() (
	$subtotal = 0;
	foreach ($_SESSION['cart12'] as $item) {
		$subtotal += $item['total'];
	}
	$subtotal_f = number_format($subtotal, 2);
	return $subtotal_f;

The cart.php file
<?php
// Add an item to the cart
function add_item($key, $quantity) {
global $products;
if ($quantity < 1) return;
If item already exists in cart, update quantity
//
(isset($_SESSION['SESSION'][$key])) {
if$guantity += $_SESSION['SESSION'][$key]['qty'];
update_item($key, $quantity);
return;
}
1
// Add item
$cost = $products[$key]['cost'];
$total = $cost * $quantity;
$item = array(
'name' => $products[$key]['name']»
'cost' => $cost,
'qty'
 => $quantity,
'total' => $total
);
$_SESSION['SESSION'][$key] = $item;

// Update an item in the cart
function update_item($key, $quantity) {
	$quantity = (int) $quantity;
	if (isset($_SESSION['cart12'][$key])) {
		if ($quantity <= 0) {
			unset($_SESSION['SESSION'][$key]);
		} else {
			$_SESSION['cart12'][$key]['qty'] = $quantity;
			$total = $_SESSION['SESSION'][$key]['cost'] *
				$SESSION['cart12'][$key]['qty'];
			$SESSION ['cart 12'][$key) ['total'] = $total;
		}
	}
}

// Get cart subtotal
function get_subtotal() (
	$subtotal = 0;
	foreach ($_SESSION['cart12'] as $item) {
		$subtotal += $item['total'];
	}
	$subtotal_f = number_format(Ssubtotal, 2);
	return $subtotal_f;
?>

The add_item_view.php file
<!DOCTYPE html>
<html>
	<head>
		<title>My Guitar Shop</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<header>
			<h1>My Guitar Shop</h1>
		</header>
		<main>
			<h1>Add item</h1>
			<form action=" . " method="post">
				<input type= "hidden" name="action" value="add">
				
				<label>Name:</label>
				<select name="productkey">
				<?php foreach($products as $key => $product) :
					$cost = number_format($product['cost']» 2);
					$name = $product['name'];
					$item = $name . ' ($' . $cost . ')'
				?>
					<option value="<?php echo $key; ?>">
						<?php echo $item; ?>
					</option>
				<?php endforeach; ?>
				</select><br>

				<label>Quantity:</label>
				<select name="itemqty">
				<?php for($i = 1; $i <= 10; $i++) : ?>
					<option value="<?php echo $i; ?>">
						<?php echo $i; ?>
					</option>
				<?php endfor; ?>
				</select><br>

				<label>&nbsp;</label>
				<input type="submit" value="Add Item">
			</form>
		<p><a href=".?action=show_cart">View Cart</a></p>
	</main>
	</body>
</html>

The cart_view.php file
	<!DOCTYPE html>
		<html>
			<head>
				<title>My Guitar Shop</title>
				<link rel="stylesheet" type= "text/css" href="main.css">
			</head>
			<body>
				<header>
					<h1>My Guitar Shop</h1>
				</header>
				<main>
					<h1>Your Cart</h1>
					<?php if (empty($_SESSION['cart12'] ) || count($_SESSION['SESSION']) == 0) : ?>
						<p>There are no items in your cart.</p>
					<?php else: ?>
					<form action="." method="post">
					<input type="hidden" name="action" value="update">
					<table>
						<tr id="cart_header">
							<th class="left">Item</th>
							<th class="right">Item Cost</th>
							<th class="right">Quantity</th>
							<th class="right">Item Total</th>
						</tr>
						
					<?php foreach( $_SESSION['SESSION'] as $key => $item )
						$cost = number_format($item['cost'], 2);
						$total = number_format($item['total'], 2);
					?>
						<tr>
							<td>
								<?php echo $item['name']; ?>
							</td>
							<td class="fight">
								$<?php echo $cost; ?>
							</td>
							<td class="right">
								<input type="text" class="cart_qty" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty']; ?>">
							</td>
							<td class="right">
								$<?php echo $total; ?>
							</td>
						</tr>
					<?php endforeach; ?>
						<tr id="cart_footer">
							<td colspan="3"><b>Subtotal</b></td>
						<td>$<?php echo get_subtotal(); ?></td>
						</tr>
						<tr>
							<td colspan="4" class="right">
								<input type="submit" value="Update Cart">
							</td>
						</tr>
					</table>
					<p>Click "Update Cart" to update quantities in your cart. Enter a quantity of 0 to remove an item.
					</p>
					</form>
				<?php endif; ?>
				<p><a href=". ?action=show_add_item">Add Item</a></p>
				<p><a href=" . ?action=empty_cart">Empty Cart</a></p>
			</main>
		</body>
	</html>
