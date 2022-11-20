<?php

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
$cancelUrl = "YOUR_PAYMENT_CANCEL_RETURN_URL";
$failureUrl = "YOUR_PAYMENT_FAILURE_RETURN_URL";
$ipnUrl = "YOUR_PAYMENT_COMPLETION_NOTIFICATION_URL";

$checkoutOptions -> setSuccessUrl($successUrl);
$checkoutOptions -> setCancelUrl($cancelUrl);
$checkoutOptions -> setFailureUrl($failureUrl);
$checkoutOptions -> setIPNUrl($ipnUrl);
$checkoutOptions -> setMerchantOrderId("UNIQUE_ID_THAT_IDENTIFIES_THIS_ORDER_ON_YOUR_SYSTEM");
$checkoutOptions -> setExpiresAfter(60);


$checkoutOrderItem = new CheckoutItem("NAME_OF_ITEM_PAID_FOR", UNIT_PRICE_OF_ITEM, QUANTITY);
$checkoutOrderItem  -> ItemId = "UNIQUE_ID_FOR_THE_ITEM";
$checkoutOrderItem  -> DeliveryFee = DELIVERY_FEE_IF_AVAILABLE;
$checkoutOrderItem  -> Tax1 = VAT_FEE_IF_AVAILABLE;
$checkoutOrderItem  -> Tax2 = TOT_FEE_IF_AVAILABLE;
$checkoutOrderItem  -> Discount = DISCOUNT_AMOUNT_IF_AVAILABLE;
$checkoutOrderItem  -> HandlingFee = HANDLING_FEE_IF_AVAILABLE;

$checkoutHelper = new CheckoutHelper();
$checkoutUrl = $checkoutHelper -> getSingleCheckoutUrl($checkoutOptions, $checkoutOrderItem);

?>