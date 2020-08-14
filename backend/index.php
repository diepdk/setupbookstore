<?php 
session_start();
$filepath = realpath(dirname(__FILE__));
if(isset($_GET['mod'])){
	$mod = $_GET['mod'];
}else{
	$mod = 'index';
}
if(isset($_GET['act'])){
	$act = $_GET['act'];
}else{
	$act = 'index';
}
switch ($mod) {
	case 'index':{
		include_once($filepath.'/controllers/AdminController.php');
		$admin = new AdminController();
		switch ($act) {
			case 'index':
			$admin->actionIndex();
			break;

			case 'login';
			$admin->actionLogin();
			break;

			case 'err';
			require 'views/layout/err.php';
			break;

			case 'home';
			if(isset($_SESSION['id_admin'])){
				$admin->actionHome();
			}else{
				require 'views/layout/err.php';
			}
			break;

			case 'logout':
			$admin->actionLogout();
			break;

			case 'save_product':
			if(isset($_SESSION['id_admin'])){
				$admin->actionSaveProdcut();
			}else{
				require 'views/layout/err.php';
			}
			break;
			
			case 'category':
			if(isset($_SESSION['id_admin'])){
				$admin->actionListCategory();
			}else{
				require 'views/layout/err.php';
			}
			break;

			case 'create_product':
			if(isset($_SESSION['id_admin'])){
				$admin->actionCreateProduct();
			}else{
				require 'views/layout/err.php';
			}
			break;

			case 'create_category':
			if(isset($_SESSION['id_admin'])){
				$admin->actionCreateCategory();
			}else{
				require 'views/layout/err.php';
			}
			break;

			
			case 'save_category':
			if(isset($_SESSION['id_admin'])){
				$admin->actionSaveCategory();
			}else{
				require 'views/layout/err.php';
			}
			break;

			case 'search';
			$admin->actionSearch();
			break;

			case 'order':
			if(isset($_SESSION['id_admin'])){
				$admin->actionListOrder();
			}else{
				require 'views/layout/err.php';
			}
			break;
		}
	}
}
?>