<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../../common/dbConnection.php');
include_once ($filepath.'/../../common/input.php');
include_once ($filepath.'/../../common/validate.php');

class User{
	public function register(){
		$db = new dbConnection();
		if(isset($_POST['register'])){
			if(checkEmpty($_POST['name']) && checkEmpty($_POST['user_name']) && checkEmpty($_POST['password']) ){
				$name = checkInput($_POST['name']);
				$email = checkInput($_POST['email']);
				$phone = checkInput($_POST['phone']);
				$user_name = checkInput($_POST['user_name']);
				$password = md5(checkInput($_POST['password']));
				$birdthday = time();
				$value = array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'user_name' => $user_name,
					'password' => $password,
					'birdthday' => $birdthday
				);
				if($db->insert('user', $value)){
					return true;
				}else{
					return false;
				}
			}
		}
	}
	public function login(){
		$db = new dbConnection();
		if(isset($_POST['login'])){
			if(isset($_POST['user_name']) || isset($_POST['password'])){
				$username = checkInput($_POST['user_name']);
				$password = md5(checkInput($_POST['password']));
			}
			$sql = "SELECT * FROM user WHERE user_name = '$username'  AND password = '$password' " ;
			$db->query($sql);
			$db->setFetchMode();
			$db -> findAll();
			if($db->rowCount() > 0){
				$row = $db->findAll();
				if($row[0]['role'] == 0){
					return $row;
				}
			}else{
				return false;
			}
		}
	}
}
?>