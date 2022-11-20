<!DOCTYPE html>
<html>
<head>
	<title>የኪራይ መግቢያ</title>
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
	<center>
	<div>
     <form action="" method="post">
	 <img src="img/icon.png" alt="" class='login-form'>
     	<h4>ግባ</h4>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>የተጠቃሚ ስም</label>
     	<input type="text" name="username" placeholder="User Name"><br>
        
     	<label>ፕስወርድ</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" class="btn btn-primary" name='submit'>ግባ</button>
		 <a href="arenter.php" class='btn btn-primary'>መለያ ፍጠር</a>
         <a href="abuyerchangepass.php" class='btn btn-primary'>የሚስጥር ቁልፍ ይቀይሩ</a>
		 <h1>h</h1>
     </form>
	 </div>
	 </center>
</body>
</html>

<?php
include('connection.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 //Username and Password sent from Form
 $username = mysqli_real_escape_string($conn, $_POST['username']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $password = md5($password);
 $sql = "SELECT * FROM renter WHERE username='$username' AND pasword ='$password'";
 $query = mysqli_query($conn, $sql);
 $res=mysqli_num_rows($query);
 
 //If result match $username and $password Table row must be 1 row
 if($res == 1)
 {
 header("Location: renterpage.php");
 }
 else
 {
 echo "Invalid Username or Password";
 }
}
?>