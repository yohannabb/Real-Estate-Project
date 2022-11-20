<?php 
$include=include("connection.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM `house` WHERE id='$id'");
header('location:viewhouse.php');
?>
