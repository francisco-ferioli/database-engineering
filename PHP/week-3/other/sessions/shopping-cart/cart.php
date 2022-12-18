<?php
	// Add an item to the cart
	function add_item($key, $quantity) {
		global $products;
		if ($quantity < 1) return;

		// If item already exists in cart, update quantity
		if (isset($_SESSION['SESSION'][$key])) {
			$quantity += $_SESSION['SESSION'][$key]['quantity'];
			update_item($key, $quantity);
			return;
		}

		// Add item
		$cost = $products[$key]['cost'];
		$total = $cost * $quantity;
		$item = array(
			'name'=> $products[$key]['name'],
			'cost'=> $cost,
			'quantity' => $quantity,
			'total'=> $total
		);
		$_SESSION['SESSION'][$key] = $item;
	}

	// Update an item in the cart
	function update_item($key, $quantity) {
		$quantity = (int) $quantity;
		if (isset($_SESSION['cart12'][$key])) {
			if ($quantity <= 0) {
				unset($_SESSION['SESSION'][$key]);
			} else {
				$_SESSION['cart12'][$key]['quantity'] = $quantity;
				$total = $_SESSION['SESSION'][$key]['cost'] *
					$SESSION['cart12'][$key]['quantity'];
				$SESSION ['cart 12'][$key] ['total'] = $total;
			}
		}
	}

	// Get cart subtotal
	function get_subtotal() {
		$subtotal = 0;
		foreach ($_SESSION['cart12'] as $item) {
			$subtotal += $item['total'];
		}
		$subtotal_f = number_format($subtotal, 2);
		return $subtotal_f;
	}
?>
