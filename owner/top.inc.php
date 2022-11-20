<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
}else{
   header('location:login.php');
   die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>OWNER DASHBOARD PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <!-- <style>
    body{
  background-image: url('img/signin-bg.jpg');
  background-position: center center;
  background-size: cover;
  
  bottom: 0;
  height: 100%;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  overflow-y: auto;
  width: 100%;
}
</style>   -->
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">********</li>
                  <?php if($_SESSION['ADMIN_ROLE']!=1){?>
				   <li class="menu-item-has-children dropdown">
                     <a href="addhouse.php" > ADD HOUSE </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="viewhouse.php" > VIEW HOUSE </a>
                  </li>
				
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="agreement.php" > AGREEMENT </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="payment.php" > PAYMENT </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="feedback.php" > FEEDBACK</a>
                  </li>
				  <?php } ?>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/MyLogo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/MyLogo.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="logout.php" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WellCome <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="index.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         