

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
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

    <form class="example" action=""method="post">
  <input type="text" name="id" placeholder="Search.." >
  <!-- <button type="submit"><i class="fa fa-search"value="search"name="search"></i></button> -->
  <!-- <i class="fa fa-search"value="search"name="search"></i> -->
  <input type="submit"class="btn btn-primary" value="Search" name="search">
</form>
</center>

  </section>
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
<head>
  <style>


  </style>
<div class="container py-5">
<div class="row mt-4">
<?php
$include=include("connection.php");
if(isset($_POST['search']))
    {
$search = $_POST['id'];
  $query = "SELECT * FROM house WHERE (status='for buy') AND (image= '$search' || type='$search' || price='$search' || address='$search') ";
$query_run = mysqli_query($conn, $query);
$num=mysqli_num_rows($query_run);
if($num)
{
while($row=mysqli_fetch_array($query_run))
{
  ?>
  <div class="col-md-3">
  <div class="card">
    <div class="fullimg">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for rent" width='700px' hight='700px'> 
    
    </div>
<img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for rent" width='700px' hight='700px'> 
   <div class="card-body">
  <h3 class="card-title">Type:<?php echo $row['type'];?></h3>
  <h4 class="card-title">Price:<?php echo $row['price'];?></h4>
  <h5 class="card-title">Address:<?php echo $row['address'];?></h5>
 
</div>
</div>
</div>

  <?php
}
}
else{
 echo '<script>alert("NO HOUSE YOU SEARCH!!")</script>';
}
 }
?>
</div>
</div>

</head>


<body>
<div class="container py-5">
<div class="row mt-4">
   <?php
 $result1=mysqli_query($conn,"SELECT * FROM `house` where status='for buy'");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    ?>

     <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for rent" width='700px' hight='600px'>
     <div class="card-body">
    <h3 class="card-title">Type:<?php echo $row['type'];?></h3>
    <h4 class="card-title">Price:<?php echo $row['price'];?></h4>
    <h5 class="card-title">Address:<?php echo $row['address'];?></h5>
    <form method="post" action="https://test.yenepay.com/">
                  <input type="hidden" name="process" value="Express">
                  <input type="hidden" name="successUrl" value="http://localhost/final/Reales/Reales/renterpage.php">
                  
                  <input type="hidden" name="cancelUrl" value="http://localhost/final/Reales/Reales/renterpage.php">
                  <input type="hidden" name="merchantId" value="SB1909">
                  <input type="hidden" name="merchantOrderId" value="xny2">
                  <input type="hidden" name="expiresAfter" value="24">
                  <input type="hidden" name="itemId" value="73">  
                  <input type="hidden" name="itemName" value="<?php echo $row['type'];?>">
                  <input type="hidden" name="unitPrice" value="<?php echo $row['price'];?>">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="discount" value="0">
                  <input type="hidden" name="handlingFee" value="0">
                  <input type="hidden" name="deliveryFee" value="0">
                  <input type="hidden" name="tax1" value="0">
                  <input type="hidden" name="tax2" value="0">
                  <button class="btn btn-primary" type="submit"value="<?php echo $row['id'];?>">buy Now</button>
                 
                  <form action="dsc.php?id=<?php echo $row['id'];?>" method ="post">
                 </form>
                </form>
                   <form action="dsc.php?id=<?php echo $row['id'];?>" method ="post">
                <button type="submit" class="btn btn-primary">ViewDetail</button> 
                 </form>
                
 </div>
 </div>
 </div>

<?php

$sql= "INSERT INTO payment SET"



;


 
$res = mysqli_query($conn, $sql);
if($res==true)
{
  echo "<script>document.getElementById('submit_yenepay').click</script>";
}

else{
  echo "not get";
}

?>

    <?php
}
 }
 else{
  echo 'no house found for rent';
 }
 ?>
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
 </div>
</div>
</body>
</html>
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