<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');
class Order {

	public function list_order(){
		$db = new dbConnection();
		$sql_order = "SELECT * FROM donhang";
		$db->query($sql_order);
		$db->setFetchMode();

		$order = $db->findAll();
		return $order;
	}
	// search ten
	public function search_product(){
		$db = new dbConnection();
		if(isset($_POST['search'])){
			$param = $_POST['name_item'];
			$sql_search = "SELECT * FROM item WHERE name_item LIKE '%$param%' ";
			$db->query($sql_search);
			$db->setFetchMode();
			$products = $db->findAll();
			return $products;
		}

	}
}
?>