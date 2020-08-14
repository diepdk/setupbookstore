
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');
include_once ($filepath.'/../../common/input.php');
include_once ($filepath.'/../../common/validate.php');
class Product {
	public function get_item($id){
		$db = new dbConnection();
		$param = "SELECT * FROM item,img WHERE item.id = $id AND img.id_item = $id " ;
		$db->query($param);
		$db->setFetchMode();
		$prodcut = $db->findAll();
		return $prodcut;
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

	public function get_category(){
		$db = new dbConnection();
		$sql_cat = "SELECT name_cat , id_cat FROM category";
		$db->query($sql_cat);
		$db->setFetchMode();
		$cat = $db->findAll();
		return $cat;
	}

	public function productcategoryinhome(){
		$db = new dbConnection();
		$cats = $this->get_category();
		$data = [];
		foreach ($cats as $cat) {
			$cat_id = intval($cat['id_cat']);
			$sql_productcat = "SELECT * FROM  item,img WHERE item.id_cat = $cat_id AND img.id_item = item.id";
			$db->query($sql_productcat);
			$db->setFetchMode();
			$products = $db->findAll();
			$data[$cat['name_cat']] = $products;
		}
		return $data;
	}
}
?>