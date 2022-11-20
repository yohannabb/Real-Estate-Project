<?php
	session_destroy();
	unset($_SESSION['ADMIN_LOGIN']);
	unset($_SESSION['ADMIN_USERNAME']);
	header('location:./../index.php');
	die();
?>