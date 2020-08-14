<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');

class Category{
	public function list_category(){
		$db = new dbConnection();
		$sql_cat = "SELECT * FROM category";
		$db->query($sql_cat);
		$db->setFetchMode();
		$categorys = $db->findAll();
		return $categorys;
	}
}
?>