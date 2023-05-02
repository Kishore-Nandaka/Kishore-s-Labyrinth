<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Shopping Cart</h1>
	
	<?php
		session_start();
		
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}
		
		if (isset($_POST['add_to_cart'])) {
			$item_id = $_POST['item_id'];
			$item_name = $_POST['item_name'];
			$item_price = $_POST['item_price'];
			
			$item = array(
				'id' => $item_id,
				'name' => $item_name,
				'price' => $item_price,
				'quantity' => 1
			);
			
			$found = false;
			foreach($_SESSION['cart'] as &$cart_item) {
				if ($cart_item['id'] == $item_id) {
					$cart_item['quantity']++;
					$found = true;
					break;
				}
			}
			
			if (!$found) {
				array_push($_SESSION['cart'], $item);
			}	
		}
	
		if (isset($_POST['remove_from_cart'])) {
			$item_id = $_POST['item_id'];
			
			foreach($_SESSION['cart'] as $key => &$cart_item) {
				if ($cart_item['id'] == $item_id) {
					$cart_item['quantity']--;
					
					if ($cart_item['quantity'] == 0) {
						unset($_SESSION['cart'][$key]);
					}
					
					break;
				}
			}
		}
		
		echo '<table>';
		echo '<tr><th>Item Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th></tr>';
		foreach($_SESSION['cart'] as $cart_item) {
			$total_price = $cart_item['price'] * $cart_item['quantity'];
			
			echo '<tr>';
			echo '<td>' . $cart_item['name'] . '</td>';
			echo '<td>$' . $cart_item['price'] . '</td>';
			echo '<td>' . $cart_item['quantity'] . '</td>';
			echo '<td>$' . $total_price . '</td>';
			echo '<td>';
			echo '<form method="post">';
			echo '<input type="hidden" name="item_id" value="' . $cart_item['id'] . '">';
			echo '<button type="submit" name="remove_from_cart">Remove</button>';
			echo '</form>';
			echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
	?>
	
	<h2>Products</h2>
	
	<div class="products">
		<div class="product">
			<h3>Product 1</h3>
			<p>$10</p>
			<form method="post">
				<input type="hidden" name="item_id" value="1">
				<input type="hidden" name="item_name" value="Product 1">
				<input type="hidden" name="item_price" value="10">
				<button type="submit" name="add_to_cart">Add to Cart</button>
			</form>
		</div>
		
		<div class="product">
			<h3>Product 2</h3>
			<p>$20</p>
			<form method="post">
				<input type="hidden" name="item_id" value="2">
				<input type="hidden" name="item_name" value="Product 2">
				<input type="hidden" name="item_price" value="20">
				<button type="submit" name="add_to_cart">Add to Cart</button>
			</form>
		</div>
	</div>
	
	<a href="checkout.php">Checkout</a>
	
</body>
</html>