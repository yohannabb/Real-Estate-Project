
<?php
require('admin/top.inc.php');
?>
<?php

$include=include("connection.php");
$fname=$pass=$username=$usererror1=$passerror=$usererror3='';
if(isset($_POST['submit'])){
$fname=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phoneNumber"];
$pass=$_POST["password"];
$password=md5($pass);
$img=$_FILES['image'];
$img_loc=$_FILES['image']['tmp_name'];
$img_name=$_FILES['image']['name'];
$img_des='img/'.$img_name;
$sq="SELECT * FROM `agent` WHERE username='$username'";
$res=mysqli_query($conn,$sq);
$UPPERCASE=preg_match('@[A-Z]@',$pass);
$LOWERCASE=preg_match('@[a-z]@',$pass);
$NUMBER=preg_match('@[0-9]@',$pass);
$special=preg_match('@[^\w]@',$pass);
if(!preg_match("/^[a-zA-Z]*$/",$fname)){
$usererror1=" name should be alphabet";
}
elseif(!$UPPERCASE||!$LOWERCASE||!$NUMBER||!$special||strlen($pass)<6){
    $passerror="password should be strong(uppercase,lowercase,special and contain at least 6 characters)";
}
elseif(mysqli_num_rows($res)>0){
  $usererror3="username is already exist";
}
else{
  mysqli_query($conn, "INSERT INTO agent (name,username,email,phonenumber,password,image)
  values ('$fname','$username','$email','$phone','$password','$img_des')" );
  
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
    <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    

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
                <h4>AGENT REGISTRATION </h4>
              </div>
              <form enctype="multipart/form-data" action="" method="post">                                             
                <div class="aa-single-field">
                  <label for="name">name <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value=""name="name" maxlength="20" placeholder="Enter your  name"><?php echo $usererror1?>
                </div>
                
                <div class="aa-single-field">
                  <label for="name">username <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="username" maxlength="20" placeholder="Enter your user name"><?php echo $usererror3 ?>
                </div>
                <div class="aa-single-field">
                  <label for="name">email <span class="required">*</span></label>
                  <input type="email" required="required" aria-required="true" value="" name="email" maxlength="20" placeholder="Enter your email">
                </div>
                <div class="aa-single-field">
                  <label for="phoneNumber">phoneNumber <span class="required">*</span></label>
                  <input type="text" required="required" aria-required="true" value="" name="phoneNumber" placeholder="Enter your phone number" >
                </div>
                <div class="aa-single-field">
                  <label for="password">Password <span class="required">*</span></label>
                  <input type="password" name="password" placeholder="Enter your password" required="required" ><?php echo $passerror ?> 
                </div>
                <div>
        <label for="file"> Agent Image:</label>
        <input type="file" id="image" name="image" required="required"/>
    </div>
                <div class="aa-single-submit">
                  <input type="submit" value="Create Account" name="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="buyerlogin.php" class='btn btn-primary'></a>        
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

  
  </body>

</html>

