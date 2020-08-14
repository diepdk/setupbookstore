<?php
session_start();
$filepath = realpath(dirname(__FILE__));
if(isset($_GET['mod'])){
	$mod = $_GET['mod'];
}else{
	$mod = 'home';
}
if(isset($_GET['act'])){
	$act = $_GET['act'];
}else{
	$act = 'home';
}
switch ($mod) {
	case 'home':{
		include_once($filepath.'/controllers/HomeController.php');
		$home = new HomeController();
		switch ($act) {
			case 'home':
			$home->actionIndex();
			break;
			case 'register':
			$home->actionRegister();
			break;
			case 'login':
			$home->actionLogin();
			break;

			case 'err';
			require 'views/layouts/Err.php';
			break;
			case 'cart';
			require 'views/layouts/cart.php';
			break;
			case 'success';
			require 'views/layouts/success.php';
			break;
			case 'order';
			$home->actionOrder();
			break;

			case 'submit_order';
			$home->actionSubmitOrder();
			break;
		}
	}
}
?>