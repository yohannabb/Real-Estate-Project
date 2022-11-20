<?php 
session_start();
include('connection.php');
use YenePay\Models\IPN;
use YenePay\CheckoutHelper;

require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/CheckoutHelper.php');
require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/Models/IPN.php');

// $json_data = json_decode(file_get_contents('php://input'), true);

// if(isset($TotalAmount))
// 	$ipnModel->setTotalAmount($TotalAmount);
// if(isset($BuyerId))
// 	$ipnModel->setBuyerId($BuyerId);
// if(isset($MerchantOrderId))
// 	$ipnModel->setMerchantOrderId($MerchantOrderId);
// if(isset($MerchantId))
// 	$ipnModel->setMerchantId($MerchantId);
// if(isset($MerchantCode))
// 	$ipnModel->setMerchantCode($MerchantCode);
// if(isset($TransactionCode))
// 	$ipnModel->setTransactionCode($TransactionCode);
// if(isset($TransactionId))
// 	$ipnModel->setTransactionId($TransactionId);
// if(isset($statusww))
// 	$ipnModel->setStatus($statusww);
// if(isset($Currency))
// 	$ipnModel->setCurrency($Currency);
// if(isset($Signature))
// 	$ipnModel->setSignature($Signature);
// $helper = new CheckoutHelper();
// if ($helper->isIPNAuthentic($ipnModel))
// 	echo 'Success!';
// else
// 	echo 'Fail';

$ipnModel = new IPN();
$ipnModel->setUseSandbox(true); //set this to false on production
$statusww=$_GET['Status'];
$Amount=$_GET['TotalAmount'];
$TotalAmount=(int)$Amount;
$BuyerId=$_GET['BuyerId'];
$MerchantOrderId=$_GET['MerchantOrderId'];
$MerchantId=$_GET['MerchantId'];
$MerchantCode=$_GET['MerchantCode'];
$TransactionCode=$_GET['TransactionCode'];
$TransactionId=$_GET['TransactionId'];
$Currency=$_GET['Currency'];
//$Signature=$_GET['Signature'];
$id=$_SESSION['id'];
$houseid=$_SESSION['houseid'];

$sql="update  payment_renter set payed_amount='$TotalAmount', paymentstatus='$statusww' where id=$MerchantOrderId ";
$sql2="update  house set sold_status=1 where id=$houseid ";
$sql3="update  payment_renter set paymentstatus='$statusww' where id=$MerchantOrderId";

if($statusww=="Paid"){
if($row=mysqli_query($conn,$sql)){
	if(mysqli_query($conn,$sql2)){
       
	header("location:renterpage.php");
}
	else echo mysqli_error($conn);
}else{
	echo mysqli_error($conn);
}
}else if($statusww=="Canceled"){
	if(mysqli_query($conn,$sql3)){
		
        
			header("location:renterpage.php");
	}

}
else if($statusww=="Failed"){
	if(mysqli_query($conn,$sql3)){
		//echo '<script>alert("THANK YOU YOUR PAYMENT IS SUCCESSFULL")</script>';

			header("location:renterpage.php");
	}

}
    ?>