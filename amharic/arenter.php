
<?php
$include=include("connection.php");
$fname=$lname=$pass=$usererror1=$usererror2=$passerror='';
if(isset($_POST['submit'])){
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$username=$_POST["username"];
$sex=$_POST["Sex"];
$age=$_POST["age"];
$phone=$_POST["phoneNumber"];
$address=$_POST["address"];
$pass=$_POST["password"];
$sq="SELECT * FROM `renter` WHERE username='$username'";
$res=mysqli_query($conn,$sq);

$UPPERCASE=preg_match('@[A-Z]@',$pass);
$LOWERCASE=preg_match('@[a-z]@',$pass);
$NUMBER=preg_match('@[0-9]@',$pass);
$special=preg_match('@[^\w]@',$pass);
if(!preg_match("/^[a-zA-Z]*$/",$fname)){
$usererror1="first name should be alphabet";
}
elseif(!preg_match("/^[a-zA-Z]*$/",$lname)){
  $usererror2="last name should be alphabet";
}
elseif(!$UPPERCASE||!$LOWERCASE||!$NUMBER||!$special||strlen($pass)<6){
    $passerror="password should be strong(uppercase,lowercase,special and contain at least 6 characters)";
}
elseif(mysqli_num_rows($res)>0){
  $usererror3="username is already exist";
}
else{
  mysqli_query($conn, "INSERT INTO renter (first_name,last_name,username,sex,age,phoneNumber,adress,pasword)values ('$fname','$lname','$username','$sex','$age','$phone','$address',
'".md5($pass)."')");
  header("location:renterpage.php");
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
    <title>መጠነሰፊ የቤት ግንባታ</title>

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
                <h4>የምዝገባ ቅጾች</h4>
              </div>
              <form class="contactform" action="" method="post">                                                
                <div class="aa-single-field">
                  <label for="name">የመጀመሪያ ስም <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value=""name="firstname" maxlength="20" placeholder="Enter your first name"><?php echo $usererror1?>
                </div>
                <div class="aa-single-field">
                  <label for="name">ያባት ስም <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="lastname" maxlength="20" placeholder="Enter your last name"><?php echo $usererror2 ?>
                </div>
                <div class="aa-single-field">
                  <label for="name">የተጠቃሚ ስም <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username" maxlength="20" placeholder="Enter your user name">
                </div>
                <div class="aa-single-field">
                <label for="name">ጾታ <span class="required">*</span></label><br/>
                <input type="radio" id="sex" name="Sex" value="female" />ሴት
                <input type="radio" id="sex" name="Sex" value="male" />ወንድ<br/><br/>
                <div class="aa-single-field">
                  <label for="Age">Age <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="age" placeholder="Enter your Age" >
                </div>
                </div>
                <div class="aa-single-field">
                  <label for="phoneNumber">ስልክ ቁጥር <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="phoneNumber" placeholder="Enter your phone number" >
                </div>
                <div class="aa-single-field">
                  <label for="address">አድራሻ </label>
                  <input type="text" required="required" aria-required="true" value="" name ="address" placeholder="Enter your address" >
                </div>
                <div class="aa-single-field">
                  <label for="password">ፕስወርድ <span class="required">*</span></label>
                  <input type="password" name="password" placeholder="Enter your password" required="required" ><?php echo $passerror ?> 
                </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  አባል ነዎት? <a href="renterlogin.php" class='btn btn-primary'>ግባ</a>        
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

