
<?php
$include=include("connection.php");
$name=$username=$usererror1=$usererror3='';
if(isset($_POST['submit'])){
$name=$_POST["name"];
$username=$_POST["username"];
$phone=$_POST["phoneNumber"];
$email=$_POST["email"];
$sq="SELECT * FROM `agent` WHERE username='$username'";
$res=mysqli_query($conn,$sq);
if(!preg_match("/^[a-zA-Z]*$/",$name)){
$usererror1="name should be alphabet";
}

elseif(mysqli_num_rows($res)>0){
  $usererror3="username is already exist";
}
else{
  mysqli_query($conn, "INSERT INTO agent (name,username,phoneNumber,email,)
  values ('$name','$username','$phone','$email')')" );
  header("location:#");
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
    <title>Real Estate</title>

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
  <section id="aa-signin">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-signin-area">
            <div class="aa-signin-form">
              <div class="aa-signin-form-title">
                <a class="aa-property-home" href="index.html"></a>
                <h4>BUYER REGISTRATION </h4>
              </div>
              <form class="contactform" action="" method="post">                                                
                <div class="aa-single-field">
                  <label for="name">Name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value=""name="name" maxlength="20" placeholder="Enter your first name"><?php echo $usererror1?>
                </div>
                
                <div class="aa-single-field">
                  <label for="name">username <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username" maxlength="20" placeholder="Enter your user name"><?php echo $usererror3 ?>
          
                
                <div class="aa-single-field">
                  <label for="phoneNumber">phoneNumber <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="phoneNumber" placeholder="Enter your phone number" >
                </div>
                <div class="aa-single-field">
                  <label for="email">Email </label>
                  <input type="email" required="required" aria-required="true" value="" name ="email" placeholder="Enter your email" >
                </div>
                
                <div class="aa-single-submit">
                  <button type="submit" value="Create Account" name="submit" class='btn btn-primary'>Create Account </button>
                       
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
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

