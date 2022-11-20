<?php
session_start();
$include=include("connection.php");

use YenePay\Models\CheckoutOptions;
use YenePay\Models\CheckoutItem;
use YenePay\Models\CheckoutType;
use YenePay\CheckoutHelper;

require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/CheckoutHelper.php');
require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/Models/CheckoutOptions.php');
require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/Models/CheckoutItem.php');
require_once(__DIR__ .'/vendor/yenepay/php-sdk/src/Models/CheckoutType.php');

$sellerCode = "SB1909";
$useSandbox = true;

$checkoutOptions = new CheckoutOptions($sellerCode, $useSandbox);

$checkoutOptions -> setProcess(CheckoutType::Express); //alternatively you can set this to CheckoutType::Cart if you are including multiple items in a single order

// These properties are optional
$successUrl = "http://localhost/final/Reales/Reales/payment_success.php";
$cancelUrl = "http://localhost/final/Reales/Reales/payment_success.php";
$failureUrl = "http://localhost/final/Reales/Reales/payment_success.php";
$ipnUrl = "YOUR_PAYMENT_COMPLETION_NOTIFICATION_URL";

$checkoutOptions -> setSuccessUrl($successUrl);
$checkoutOptions -> setCancelUrl($cancelUrl);
$checkoutOptions -> setFailureUrl($failureUrl);
$checkoutOptions -> setIPNUrl($ipnUrl);
$checkoutOptions -> setExpiresAfter(60);

$houseid=$_GET['buy'];
$lastId=1;
$result2=mysqli_query($conn,"SELECT * FROM `payment` order By id");
 $check2=mysqli_num_rows( $result2)>0;
 if( $check2){
  while($row=mysqli_fetch_array( $result2)){
  $lastId=$row['id'];
  }}
$merchantOrderId=$lastId+1;
$checkoutOptions -> setMerchantOrderId($merchantOrderId);


$result1=mysqli_query($conn,"SELECT * FROM `house` where id='$houseid'&& status='for sell'");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    
    $price=$row['price'];
    $name=$row['type'];
    $address=$row['address'];
  }}
  $intPrice=(int)$price;

$checkoutOrderItem = new CheckoutItem( $name, $intPrice, 1);
$checkoutOrderItem  -> ItemId =$houseid;
$checkoutOrderItem  -> Tax1 =(int) $price*0.10;
$checkoutHelper = new CheckoutHelper();
$checkoutUrl = $checkoutHelper -> getSingleCheckoutUrl($checkoutOptions, $checkoutOrderItem);
$id=$_SESSION['id'];
$sql="select * from buyer where id=$id";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array( $query)){
    
  $phone=$row['phoneNumber'];
  $firstname=$row['first_name'];

}
$_SESSION['houseid']=$houseid;
$sql2="insert into payment(payer_name,phonenumber,house_id) values('$firstname','$phone','$houseid')";
if(mysqli_query($conn,$sql2))
header('Location: '.$checkoutUrl);
else echo mysqli_error($conn);
?>