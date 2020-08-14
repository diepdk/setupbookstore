<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');
include_once ($filepath.'/../../common/input.php');
include_once ($filepath.'/../../common/validate.php');

class Order{
	public function submit_order1(){
		$db = new dbConnection();
		if(isset($_POST['submit_order'])){

			$total_money = 0 ;
			foreach ($_SESSION['cart'] as $key => $item) {
				$total_item = $item['qty']*$item['price'];
				$total_money += $total_item ;
			}

			$total_product = 0;
			foreach ($_SESSION['cart'] as $key => $value) {
				$total_product += $value['qty'];
			}
			$total_product = $total_product;
			$total_money = (float) $total_money;
			$creat_time = time();
			$full_name = checkInput($_POST['full_name']);
			$email = checkInput($_POST['email']);
			$address = checkInput($_POST['address']);
			$status = checkInput($_POST['status']);
			$value = array(
				'total_product'=>$total_product,
				'total_money' => $total_money,
				'creat_time' => $creat_time,
				'status' => $status,
				'full_name' => $full_name,
				'email' => $email,
				'address' => $address
			);
			// $name_cat = 'test';
			// $description = 'ds';
			// 	$value = array(
			// 		'name_cat' => $name_cat,
			// 		'description' => $description
			// 	);
			var_dump($value);
			if($db->insert( 'donhang' , $value)){
				return true;
			}else{
				return false;
			}
			
		}
	}
}
?>