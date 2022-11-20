    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ZCRS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="./template/AdminLTE 2 _ Starter_files/bootstrap.min.css">
<link rel="stylesheet" href="./template/AdminLTE 2 _ Starter_files/font-awesome.min.css">
<link rel="stylesheet" href="./template/AdminLTE 2 _ Starter_files/ionicons.min.css">
<link rel="stylesheet" href="./template/AdminLTE 2 _ Starter_files/AdminLTE.min.css">
<!-- <link rel="stylesheet" href="./template/AdminLTE 2 _ Starter_files/skin-blue.min.css"> -->
</head>
<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%; background-color: white;">
<header class="main-header" style="background-color: black;">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color: black;">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo" style="float: left;"><a href="index.php">Adminpage</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          <nav id="navbar" class="navbar" style="margin-left: 80px;">
            <ul style="float: left;">
              <li><a class="nav-link scrollto active" href="admin.php">Home</a></li>
              <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
              <li class="dropdown"><a href="#"><span>manage account</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="nav-link  " href="createaccount.php">create account</a></li>
                  <!-- <li><a href="#">remark account</a></li> -->
                  <!-- <li><a href="view_customer.php">view customer</a></li> -->
                  <li><a href="view_employee.php">view users</a></li>
                   <!-- <li><a href="reset.php">reset password</a></li> -->
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="adminviewvehicle.php">view vehicle</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">generate report</a></li>
              <!-- <li><a class="nav-link scrollto" href="index.php">logout</a></li> -->
            <i class="bi bi-list mobile-nav-toggle"></i>
          <?php
  session_start();
include('connect.php');
$username=$_SESSION['username'];
// $password=$_SESSION['passwordd'];
$result = mysqli_query($con,"SELECT * FROM employee WHERE username='$username'") or die(mysqli_error());
       while($row = mysqli_fetch_array($result))
       {
       $id=$row['id'];
       $fname=$row['FirstName'];
       $lnam=$row['LastName'];
       $sex=$row['Sex'];
       $photo=$row['photo'];
       $age=$row['age'];
       $pno=$row['PhoneNumber'];
       $address=$row['address'];
       $email=$row['email'];
       $username=$row['username'];
     }
       ?>
<!-- <nav>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav"> -->
            <li class="dropdown messages-menu">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="label label-success"><img src="image/message.png" style="width: 20px; height: 20px;">4</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 4 messages</li>
<li>
<ul class="menu">
<li>
<a href="#">
<div class="pull-left">
<img src="#" class="img-circle" alt="User Image">
</div>
<h4>
Support Team
<small><i class="fa fa-clock-o"></i> 5 mins</small>
</h4>
<p>Why not buy a new awesome theme?</p>
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">See All Messages</a></li>
</ul>
</li>
<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<span class="label label-warning"><img src="image/notification.png" style="width: 20px; height: 20px;">10</span>
</a>
<ul class="dropdown-menu">
<li class="header">You have 10 notifications</li>
<li>
<ul class="menu">
<li>
<a href="#">
<i class="fa fa-users text-aqua"></i> 5 new members joined today
</a>
</li>
</ul>
</li>
<li class="footer"><a href="#">View all</a></li>
</ul>
</li>
<!-- </ul>
</div>
</nav> -->
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<img src="image/<?php echo $photo ?>" class="img-circle" alt="User Image" width="50" height="50">
<!-- <span class="hidden-xs">Alexander Pierce</span> -->
</a>
<ul class="dropdown-menu" style="width: 170px;">
<li class="user-header" style="margin-left: 50px;">
<img src="image/<?php echo $photo ?>" class="img-circle" alt="User Image"  width="50" height="50">
<p>
       <?php
echo $username;
?>

</p>
</li>

<!-- <li class="user-body">
<div class="row" style="width: 350px;">
<div class="col-xs-4 text-center">
<a href="https://adminlte.io/themes/AdminLTE/starter.html#">Followers</a>
</div>
<div class="col-xs-4 text-center">
<a href="https://adminlte.io/themes/AdminLTE/starter.html#">Sales</a>
</div>
<div class="col-xs-4 text-center">
<a href="https://adminlte.io/themes/AdminLTE/starter.html#">Friends</a>
</div>
</div>
</li> -->
<li class="user-footer" >
<div class="pull-left">
<a href="#" class="btn btn-default btn-flat">Profile</a>
</div>
<div >
<a href="usernamerefresh.php">Sign out</a>
</div>
</li>
</ul>
</li>
</ul>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
    
  </header>
</header>
  <!-- ======= hero Section ======= -->
    
  <section id="hero" style="height: 612px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" style="background-color: white; height: 1200px; margin-top: 100px;">
        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
      <article style="border-radius: 10px; padding: 5px; background: white;  height:500px; width: 600px; margin-left: 400px; border: solid;  border-radius: 10px; border-color: #8B008B; margin-top: 5px;" >   
   
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td align="center" colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td align="center" width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                        name="currentPassword" class="txtField" /><span
                        id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td align="center"><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <tr>
                <td align="center"><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" 
                        value="Submit" class="btnSubmit"></td>

                </tr>
            </table>
        
    </form>
    </article>
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->
    <footer style="background-color: #7FFFD4; height: 40px;">
<div style="float: left; margin-left: 550px;">
   <p><b>ZCRS @2014ll rights reserved!!!</b></p>  
</div>
<div style="float: right; margin-right: 50px;" >
 <?php
 echo  date("Y-m-d") . "<br>". date("l");
 ?>
</div> 
  </footer>
 </body>
 </html>