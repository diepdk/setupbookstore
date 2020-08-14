<?php
session_start();
if($_SERVER['PHP_SELF'] == '/bookstore/index.php'){
	header('location: frontend/index.php');
}
// $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// $validURL = str_replace("&", "&amp", $url);
// var_dump($validURL)
?>