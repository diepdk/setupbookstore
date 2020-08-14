<?php 
session_start();
if(isset($_POST['id']) && isset($_POST['qty'])){
	$id = $_POST['id'];
	$qty = $_POST['qty'];
	$cart = $_SESSION['cart'];
	if(array_key_exists($id, $cart)){
		$cart[$id] = array(
			'name_item' => $cart[$id]['name_item'],
			'qty' =>  $qty,
			'price' => $cart[$id]['price'],
			'imgUrl' => $cart[$id]['imgUrl'],
		);
		$_SESSION['cart'] = $cart;	
	}
	$total_item = 0;
	foreach ($cart as $key => $value) {
		$total_item += $value['qty'];
	}
	echo $total_item;
}
?>