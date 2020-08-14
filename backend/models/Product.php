<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');
class Product {

	public function list_prodct(){
		$db = new dbConnection();
		// $sql_product = "SELECT * FROM item LEFT JOIN category ON item.id_cat = category.id_cat ";
		$sql_product = "SELECT distinct * FROM item,category,img WHERE item.id_cat = category.id_cat AND img.id_item = item.id ";

		// $sql_product = "SELECT * FROM item, category "
		$db->query($sql_product);
		// $db->excute();
		$db->setFetchMode();

		$products = $db->findAll();
		return $products;
	}

	public function get_item($id){
		$db = new dbConnection();
		$param = "SELECT * FROM item WHERE id = $id";
		$db->query($param);
		$db->setFetchMode();
		$prodcut = $db->findAll();
		return $prodcut;
	}
	public function deleteitem($id){
		$db = new dbConnection();
		$sql_delete = "DELETE FROM item WHERE id = $id";
		try{
			$db->delete($sql_delete);
			header('location: success.php');
			return true;
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}

	}

	// demo
	public function insert_product(){
		$db = new dbConnection();
		if(isset($_POST['save_product'])){
			if(isset($_POST['name_item']) && isset($_POST['id_cat']) && checkEmpty($_POST['name_item']) && checkEmpty($_POST['id_cat'])){
				$maitem=rand(0, 5000);
				$name_item = checkInput($_POST['name_item']);
				$id_cat = checkInput($_POST['id_cat']);
				$price = checkInput($_POST['price']);
				$price_maket = checkInput($_POST['price_maket']);
				$quantity = checkInput($_POST['quantity']);
				$item_sortdesc = checkInput($_POST['item_sortdesc']);
				$author = checkInput($_POST['author']);
				$item_desc = checkInput($_POST['item_desc']);
				$manufacturer = checkInput($_POST['manufacturer']);
				$value = array(
					'id'=>$maitem,
					'name_item' => $name_item,
					'id_cat' => $id_cat,
					'price' => $price,
					'price_maket' => $price_maket,
					'quantity' => $quantity,
					'item_sortdesc' => $item_sortdesc,
					'author' => $author,
					'item_desc' => $item_desc,
					'manufacturer' => $manufacturer
				);
				// var_dump($db->insert('item',$value));
				// die();
				if($db->insert('item',$value)){
					for($i=0; $i< 3; $i++)
					{
						move_uploaded_file($_FILES['img']['tmp_name'][$i],"../common/images/".$_FILES['img']['name'][$i]);
						$url="../common/images/".$_FILES['img']['name'][$i];
						$name=$_FILES['img']['name'][$i];
						$value=array('url'=>$url,'name'=>$name,'id_item'=>$maitem);
						if($name != ""){
							$db->insert('img',$value);
						}else{
							return false;
						}
					}
					return true;
				}else{
					return false;
				}
			}
		}
	}

	public function update_product($id){
		$db = new dbConnection();
		if(isset($_POST['name_item']) && isset($_POST['id_cat']) && checkEmpty($_POST['name_item']) && checkEmpty($_POST['id_cat'])){
			
			$name_item = checkInput($_POST['name_item']);
			$id_cat = checkInput((int) $_POST['id_cat']);
			$price = checkInput( (float) $_POST['price']);
			$price_maket = checkInput((float) $_POST['price_maket']);
			$quantity = checkInput($_POST['quantity']);
			$item_sortdesc = checkInput($_POST['item_sortdesc']);
			$author = checkInput($_POST['author']);
			$item_desc = checkInput($_POST['item_desc']);
			$manufacturer = checkInput($_POST['manufacturer']);
			$value = array(
				'name_item' => $name_item,
				'id_cat' => $id_cat,
				'price' => $price,
				'price_maket' => $price_maket,
				'quantity' => $quantity,
				'item_sortdesc' => $item_sortdesc,
				'author' => $author,
				'item_desc' => $item_desc,
				'manufacturer' => $manufacturer
			);
							// var_dump($value);
							// die();
			$sql = "UPDATE item SET name_item = '$name_item', 
			id_cat = $id_cat , price = $price ,
			price_maket = $price_maket, quantity = $quantity, 
			item_sortdesc = '$item_sortdesc' , author = '$author' , 
			item_desc = '$item_desc' , manufacturer = '$manufacturer'
			WHERE id = $id" ;
			try{
				$db->upDate($sql);
				header('location: success.php');
				return true;
			}
			catch (Exception $e){
				header('location: err.php');
				echo $e->getMessage();
			}
		}
	}

	// search ten
	public function search_product(){
		$db = new dbConnection();
		if(isset($_REQUEST['search'])){
			$param = addslashes($_POST['name_item_search']);
			$sql_search = "SELECT * FROM item,img WHERE name_item LIKE '%$param%'  AND img.id_item = item.id ";
			$db->query($sql_search);
			$db->setFetchMode();
			$products = $db->findAll();
			return $products;
		}

	}
}
?>