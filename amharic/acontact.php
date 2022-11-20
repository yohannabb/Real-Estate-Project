<?php
$include=include("connection.php");
$fname=$lname=$pass=$username=$usererror1=$usererror2=$passerror=$usererror3='';
if(isset($_POST['submit'])){
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Subject=$_POST["Subject"];
$Message=$_POST["Message"];
echo($Name);
$sql= "INSERT INTO feedback (Name ,Email ,Subject ,Message) values ('$Name','$Email','$Subject','$Message')";
// $sql= "INSERT INTO feedback (Name ,Email ,Subject ,Message) values ('abeb','fuck','you@gmail.com','bitch')";

$result=mysqli_query($conn,$sql);
If($result){
  echo '<script type="text/javascript">alert:house uploaded successfuly</script>';
    header('location:contact.php');

}
else{
  echo '<script type="text/javascript">alert:house  not uploaded successfuly</script>';
}
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | እውቂያ</title>

    <!-- Favicon -->
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
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>
  
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
                    <span class="fa fa-envelope-o"></span> info@tanarealestate.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <!-- <a href="register.php" class="aa-register">Register</a>
                  <a href="login.php" class="aa-login">Login</a> -->
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
          <!-- LOGO -->                                               
          <!-- Text based logo -->
          <a class="navbar-brand aa-logo" href="aindex.php"> መነሻ ገጽ <span>Property</span></a>
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->                     
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="aindex.php">መነሻ ገጽ</a></li>
             <li class="dropdown">
              <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a> -->
              <ul class="dropdown-menu" role="menu">                
                                              
              </ul>
            </li>
            <!-- <li><a href="gallery.php">GALLERY</a></li>                                         -->
            <li class="dropdown">
              <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a> -->
              <ul class="dropdown-menu" role="menu">                
                <li><a href="aabout.php">ስለ</a></li>                                            
              </ul>
            </li>
            >            
          </ul>                          
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>እውቂያ</h2>
            <ol class="breadcrumb">
            <li><a href="aindex.php">መነሻ ገጽ</a></li>            
            <li class="active">እውቂያ</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125074.66836116993!2d37.3804235!3d11.58169505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1644d23307d78069%3A0xab0b134f632dff8!2sBahir%20Dar!5e0!3m2!1sen!2set!4v1657209989062!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe> -->
              </div>
              <div class="aa-contact-top-right">
                <h2>እውቂያ</h2>
                <p>
Tana Real Estate is located in various regional cities, mainly in Bahr Dar City, Hawassa City, Addis Ababa and other cities.</p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i> +251911121314</li>
                  <li> <i class="fa fa-envelope-o"></i> info@tanarealestate.com</li>
                  <li> <i class="fa fa-map-marker"></i> ethiopian amhara region Bahirdar</li>
                </ul>
              </div>
            </div>
            
            <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125074.66836116993!2d37.3804235!3d11.58169505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1644d23307d78069%3A0xab0b134f632dff8!2sBahir%20Dar!5e0!3m2!1sen!2set!4v1657209989062!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <!-- <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256"></iframe> -->
              </div>
              
            <div class="aa-contact-bottom">
              <div class="aa-title">
                <h2>Send Your Message</h2>
                <span></span>
                <p>Your email address will not be published. Required fields are marked <strong class="required">*</strong></p>
                  </div>
                  <div class="aa-contact-form">
                <form method="post" action "" class="contactform" >                  
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input type="text" name="Name" placeholder="Name" size="30" required="required">
                  </p>
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="Email" placeholder="Email" aria-required="true" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Subject</label>
                    <input type="text" name="Subject" placeholder="Subject">  
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Message</label>
        
                    <textarea name="Message" cols="45" rows="8" aria-required="true" required="required" value="Message"></textarea>
                  </p>                
                  <p class="form-submit">
                    <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>


  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
              <p>Designed by <a rel="nofollow" href="index.php">BDU Students</a></p>
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
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
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