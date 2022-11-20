
<!DOCTYPE html>
<html>
<head>
	<title>RENTER CHANGE PASSWORD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<style>
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
	</style>
</head>
<body>
     <form action="" method="post">
     	<h2>change password</h2>
		 <label for="username">USER NAMR</label>
        <input type="text" class="form-control" id="username" name="username"> 
        
		<label for="newpassword">New Password</label>
        <input type="password" class="form-control" id="newpassword" name="newpassword">
		<label for="re_password">Retype New Password</label>
        <input type="password" class="form-control" id="re_password" name="re_password">
		<button type="submit" class="btn btn-primary">Update</button>
     </form>
</body>
</html>
<?php
 session_start();;
include('connection.php');
if ((isset($_POST['username'])) AND (isset($_POST['newpassword'])) AND (isset($_POST['re_password']))){
    $username =  ($_POST['username']);       
    $newpassword =  md5($_POST['newpassword']); 
    $re_password =  md5($_POST['re_password']);
    if ($newpassword!=$re_password){
        echo "Both Passwords are not matched.";
     }
     else if (($_POST['username']=='') OR ($_POST['newpassword']=='') OR ($_POST['re_password']=='')){
        echo " all Fields are required, Please Retry";
     } 
     
     else {
         $check = "SELECT * FROM  agent WHERE `username`='$username'";
         $result = $conn->query($check);
         $count = $result->num_rows;
         
         if ($count==1){
             $update = "UPDATE agent SET pasword ='$newpassword' WHERE username ='$username'";
             if ($conn->query($update)){
                //Success
                echo "Password Updated Successfully."; 
                header('location:agentusefeedback.php');   
             } 
         } else {
             echo "Invalid user name.";
         }
     }
}
?>