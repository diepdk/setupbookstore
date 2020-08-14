<?php
include_once('models/Category.php');
include_once('models/Product.php');
include_once('models/User.php');
include_once('models/Order.php');
class HomeController{
	public function actionIndex(){
		// get cat
		$categorys = new Category();
		$categorys = $categorys->list_category();
		// get product
		$products = new Product();
		$productincategory = $products->productcategoryinhome();
		require_once 'views/layouts/home.php';
	}

	public function actionRegister(){
		$register = new User();
		$register = $register->register();
		if($register){
			header('location: ?mod=home&act=home');
		}else{
			header('location: ?mod=index&act=err');
		}
	}
	public function actionLogin(){
		$login = new User();
		$user = $login->login();
		$_SESSION['user'] = $user[0]['user_name'];
		if(isset($user)){
			header('location: ?mod=home&act=home');
		}else{
			header('location: ?mod=home&act=err');
		}
	}
	public function actionOrder(){
		require_once 'views/layouts/order.php';
	}

	public function actionSubmitOrder(){
		$submit = new Order();
		$submit = $submit->submit_order1();
		if(isset($submit)){
			header('location: ?mod=home&act=success');
		}else{
			header('location: ?mod=home&act=err');
		}
	}
}
?>