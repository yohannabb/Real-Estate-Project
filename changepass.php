<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<form method="post" autocomplete="off" id="password_form">
<p>old password<br />
 <input type="password" name="old_password" /></p>
<p>New password<br />
 <input type="password" name="password"  id="password" class="ser" />
</p>
<p>Confirm password<br />
 <input type="password" name="confirm_pwd" id="confirm_pwd" class="ser" />
</p>
 <input name="submit" type="submit" value="ChangePassword" class="btn btn-primary" />
</p>
<div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
 <?php echo @$error; ?><?php echo @$msg_sucess; ?>
</div>
</form>
 </body>
</html>

<?php
  $include=include("connection.php");
  if(isset($_POST['submit'])):
  extract($_POST);
  if($old_password!="" && $password!="" && $confirm_pwd!="") :
  $user_id = '1';// sesssion id
  $pass=md5(mysqli_real_escape_string($conn,$_POST['old_password']));
  $pwd=md5(mysqli_real_escape_string($conn,$_POST['password']));
  $c_pwd=md5(mysqli_real_escape_string($conn,$_POST['confirm_pwd']));
  if($pwd == $c_pwd) :
  if($pwd!=$pass) :
    $sql="SELECT * FROM `buyer` WHERE `username`='$username' AND `pasword` ='$pass'";
    $db_check=$conn->query($sql);
    $count=mysqli_num_rows($db_check);
  if($count==1) :
    $fetch=$db->query("UPDATE `buyer` SET `password` = '$pwd' WHERE `id`='$user_id'");
    $old_password=''; $password =''; $confirm_pwd = '';
    $msg_sucess = "Your new password changed successfully.";
  else:
    $error = "The password you gave is incorrect.";
  endif;
  else :
    $error = "Old password new password same Please try again.";
  endif;
  else:
    $error = "New password and confirm password do not matched";
  endif;
  else :
    $error = "Please fil all the fields";
  endif;   
  endif;
?>






