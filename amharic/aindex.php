<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>የሪል እስቴት ስርዓት</title>
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
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header section -->
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
                    <span class="fa fa-envelope-o"></span> info@tanaRealestate.com
                  </div>
                </div>              
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="./../index.php" class="aa-login">English</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <a href="amharic/aindex.php" class="aa-login">አማርኛ</a>&nbsp;&nbsp;&nbsp; -->
                  <a href="./../admin/login.php" class="aa-login">አስተዳዳሪ</a>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->
  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="#">መነሻ ገጽ</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="services.php">አገልግሎቶች
 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="abuyerlogin.php">ይግዙ</a></li>
                <li><a href="arenterlogin.php">ይከራዩ</a></li>                                            
              </ul>
            </li>
            <!-- <li><a href="gallery.php">GALLERY</a></li> -->
           <li><a href="./../owner/login.php">ባለቤት</a></li>                                         
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="aabout.php">ስለ</a></li>
            <li><a href="acontact.php">እውቂያ</a></li>
           
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/3.jpg" alt="img">
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/2.jpg" alt="img">
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/1.jpg" alt="img">
        </div>       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/5.jpg" alt="img">
        </div>
        <!-- / Top slider single slide -->        
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/4.jpg" alt="img">
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/6.jpg" alt="img">
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->
  <style>


.card{
   width: 200px;
   margin:100px auto 50px;
 
  }
.card{
    display: grid;
    grid-template-columns :repeat(auto-fit,minmax(250px,1fr));
    grid-gap:30px;
  margin: 0 10px;
  display: flex;
  flex-direction: column;
  width: 400px;
  }
  .card img{
    cursor:pointer;
    transition:0.4s;
    alignment:right;
  }
  img{
    height:40vh;
    
  }
  .card img:hover{
    transform:scale(0.8) rotate(-5deg);
    border-radius:20px;
    box-shadow:0 32px 75px rgba(68,77,136,0.2);
  }
   .col-md-3{
    margin-left:20px;
    margin-right:30px;
    padding:25px;
    align:right;
 }
  </style>

 


 <!-- Latest property -->
 <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>ቤት</h2>
          <span></span> 
          <div class="container py-5">
<div class="row mt-4">

   <?php
   $include=include("connection.php");
 $result1=mysqli_query($conn,"SELECT * FROM `house` where status='for sell' limit 3");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    ?>

     <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='300px' hight='260px'>
     <div class="card-body">
    <h4 class="card-title">ዓይነት:<?php echo $row['type'];?></h4>
    <h5 class="card-title">ዋጋ:<?php echo $row['price'];?></h5>
    <h5 class="card-title">አድራሻ:<?php echo $row['address'];?></h5>
    <a href='abuyer.php'> <input type="submit" name='buy'
 value='አሁን ይግዙ!' class="btn btn-primary"alignment:left></a>
 <a href=''> <input type="submit" name='view'
 value='ዝርዝር ይመልከቱ!' class="btn btn-primary"alignment:left></a>
 </div>
 </div>
 </div>
    <?php
}
 }
 else{
  echo 'no house found for sale';
 }
 ?>
            </div>       
          </div>    
        </div>
      </div>
    </div>
    <div class="container py-5">
<div class="row mt-4">
   <?php
   $include=include("connection.php");
 $result1=mysqli_query($conn,"SELECT * FROM `house` where status='for rent' limit 3");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    ?>

     <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='300px' hight='260px'>
     <div class="card-body">
    <h4 class="card-title">ዓይነት:<?php echo $row['type'];?></h4>
    <h5 class="card-title">ዋጋ:<?php echo $row['price'];?></h5>
    <h5 class="card-title">አድራሻ:<?php echo $row['address'];?></h5>
    <a href='arenter.php'> <input type="submit" name='rent'
 value='አሁን ይከራዩ!' class="btn btn-primary"alignment:left></a>
 <a href=''> <input type="submit" name='view'
 value='ዝርዝር ይመልከቱ!' class="btn btn-primary"alignment:left></a>
 </div>
 </div>
 </div>
    <?php
}
 }
 else{
  echo 'no house found for rent';
 }
 ?>
  <!-- Our Agent Section-->


  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>የእኛ ወኪል</h2>
          <span></span> 
          <div class="container py-5">
<div class="row mt-4">     
   <?php
   $include=include("connection.php");
 $result1=mysqli_query($conn,"SELECT * FROM `agent`limit 3");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    ?>
     <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="" width='250px' hight='350px'>
     <div class="card-body">
    <h3 class="card-title">ስም:<?php echo $row['name'];?></h3>
    <h4 class="card-title">ኢሜይል:<?php echo $row['email'];?></h4>
    <h5 class="card-title">ስልክ:<?php echo $row['phonenumber'];?></h5>
    <a href='#'> <input type="submit" name='contact me'
 value='አግኙኝ' class="btn btn-primary"alignment:left></a>
 </div>
 </div>
 </div>

    <?php
}
 }
 else{
  echo '';
 }
 ?>
                </div>
               </div>
              </div>
             </div>
          </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->


 


  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
              <p>&copy;
የተነደፈ በ <a rel="nofollow" href="#">BDU ተማሪዎች</a></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">ቤት</a>
                <a href="acontact.php">ድጋፍ</a>
                <a href="#">ፈቃድ</a>
                <a href="#">በየጥ</a>
                <a href="#">ግላዊነት እና ጊዜ</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>