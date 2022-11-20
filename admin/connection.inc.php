<?php
	session_start();
	// $con=mysqli_connect("localhost","root","","ecom");
	// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
	// define('SITE_PATH','http://127.0.0.1/php/ecom/');
	// define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
	// define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
$servername = "localhost";
$username = "root";
$password = "";
$Database="RealEstate";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$Database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>