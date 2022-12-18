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
				<h1>Your Cart</h1>
				<?php
					if (empty($_SESSION['cart12'] ) || count($_SESSION['SESSION']) == 0) {
						echo '<p>There are no items in your cart.</p>';
					}
					else {
						echo
							"<form action='.' method='post'>
							<input type='hidden' name='action' value='update'>
							<table>
								<tr id='cart_header'>
									<th>Item</th>
									<th>Item Cost</th>
									<th>Quantity</th>
									<th>Item Total</th>
								</tr>";
					}
						foreach($_SESSION['SESSION'] as $key => $item){
							$cost = number_format($item['cost'], 2);
							$total = number_format($item['total'], 2);
							echo "
							<tr>
								<td>{$item['name']}</td>
								<td>{$cost}</td>
								<td>
									<input type='text' name='newquantity[{$key}]' value='{$item['quantity']}'>
								</td>
								<td>
									$total
								</td>
							</tr>";
						}
				?>
					<tr id='cart_footer'>
						<td>Subtotal</td>
					<td>$<?php echo get_subtotal(); ?></td>
					</tr>
					<tr>
						<td>
							<input type='submit' value='Update Cart'>
						</td>
					</tr>
				</table>
				<p>Click 'Update Cart' to update quantities in your cart. Enter a quantity of 0 to remove an item.
				</p>
				</form>
			<p><a href=". ?action=show_add_item">Add Item</a></p>
			<p><a href=". ?action=empty_cart">Empty Cart</a></p>
		</main>
	</body>
</html>
