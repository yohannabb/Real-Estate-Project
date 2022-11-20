<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sucess</title>
</head>
<body>
    <h1>congratulation</h1>
<?php

$include=include("connection.php");
$total=$_GET['TotalAmount'];
$bid=$_GET['BuyerId'];
$moid=$_GET['MerchantOrderId'];
$mc=$_GET['MerchantCode'];
$mid=$_GET['MerchantId'];
$tc=$_GET['TransactionCode'];
$tid=$_GET['TransactionId'];
$sst=$_GET['Status'];
$cu=$_GET['Currency'];
$sql= "INSERT INTO payment_buyer (TotalAmount ,BuyerId ,MerchantOrderId ,MerchantCode,MerchantId,TransactionCode,TransactionId,Status,Currency) 
values ('$total','$bid','$moid','$mc','$mid','$tc','$tid','$sst','$cu')";
$result1=mysqli_query($conn,"SELECT * FROM `house` where status='for rent'");
$result=mysqli_query($conn,$sql);


?> 
</body>
</html>


 