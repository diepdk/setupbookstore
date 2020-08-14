<?php
session_start();
$filepath = realpath(dirname(__FILE__));
include_once ('../common/dbConnection.php');
$db = new dbConnection();
if(isset($_POST['id']) && isset($_POST['qty'])){
	$id = $_POST['id'];
	$qty = $_POST['qty'];
	$sql_param =  "SELECT * FROM item,img WHERE item.id = $id AND img.id_item = $id ";
	$db->query($sql_param);
	$db->setFetchMode();
	$product = $db->findAll();
	// var_dump($product);
	if(!isset($_SESSION['cart'])){
		$cart = array();
		$cart[$id] = array(
			'name_item' => $product[0]['name_item'],
			'qty' => $qty,
			'price' => $product[0]['price'],
			'imgUrl' => $product[0]['url']
		);
	}
	else{
		$cart = $_SESSION['cart'];
		if(array_key_exists($id, $cart)){
			$cart[$id] = array(
				'name_item' => $product[0]['name_item'],
				'qty' => (int) $cart[$id]['qty'] + $qty,
				'price' => $product[0]['price'],
				'imgUrl' => $product[0]['url']
			);
		}else{
			$cart[$id] = array(
				'name_item' => $product[0]['name_item'],
				'qty' => $qty,
				'price' => $product[0]['price'],
				'imgUrl' => $product[0]['url']
			);
		}
	}
	$_SESSION['cart'] = $cart;
	$total_item = 0;
	foreach ($cart as $key => $value) {
		$total_item += $value['qty'];
	}
	// echo "<pre>";
	// print_r($_SESSION['cart']);
	// die();
	echo $total_item;
}
?>