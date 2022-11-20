<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
  
<head>
  <style>
ul{
  width:auto;
  float:right;
  margin-top:8px;
}
li{
  display:inline-block;
  padding:10px 20px;
  margin-top:8px;

}
a{
  padding:0;
  margin: 0;
  text-align:right;
  text-align:center;
  color:#ffffff;
  text-decoration:none;
  font-size:1.2vw;
}
a:hover{
  color:#f0c330;
  transition:0.5s;
}
.card img{

    cursor:pointer;
    transition:0.4s;
  }
  .card img:hover{
    transform:scale(0.8) rotate(-5deg);
    border-radius:20px;
    box-shadow:0 32px 75px rgba(68,77,136,0.2);
  }


  </style>
<header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    +251911121314
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@Realestate.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="logout.php">LOGOUT</a></li>                                       
            <li><a href="usefeedback.php">FEEDBACK</a></li>
            <!-- <li><a href="#">HELP</a></li> -->
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
    <center>

   <a href="renterpage.php"class="btn btn-primary">BACK TO RENTER PAGE</a>
  <!-- <input type="submit" name="id" placeholder="Search.." > -->
  <!-- <button type="submit"><i class="fa fa-search"value="search"name="search"></i></button> -->
  <!-- <i class="fa fa-search"value="search"name="search"></i> -->
  <!-- <input type="submit"class="btn btn-primary" value="Search" name="search"> -->
</center>

  </section>
</head>
<body>
    
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
$sql= "INSERT INTO payment_renter (TotalAmount ,BuyerId ,MerchantOrderId ,MerchantCode,MerchantId,TransactionCode,TransactionId,Status,Currency) 
values ('$total','$bid','$moid','$mc','$mid','$tc','$tid','$sst','$cu')";
$result1=mysqli_query($conn,"SELECT * FROM `house` where status='for rent'");
$result=mysqli_query($conn,$sql);


?> 
</body>
</html>


 