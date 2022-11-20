<?php  $include=include("connection.inc.php")?>
<?php
$include=include("connection.inc.php");
if(isset($_POST['submit'])){
$name=$_POST["name"];
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phonenumber"];
$pass=$_POST["password"];
$enc=md5($pass);
$sq="SELECT * FROM `owner` WHERE username='$username'";
$res=mysqli_query($conn,$sq);
  mysqli_query($conn, "INSERT INTO owner (name,username,email,phonenumber,password)
  values ('$name','$username','$email','$phone','$enc')" );
  mysqli_error($conn);
  echo " '<script>alert('REGISTER SUCCESSFUL')</script>'";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Upload house</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  /* background-image: url('./../img/signin-bg.jpg'); */
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   
                <h4>..................................................REGISTER OWNER </h4>
				</div>
				<div class="card-body--">
				</div>
			 </div>
		  </div>
		  <div>
          </div>
	   </div>
	</div>
</div>
    <center>
        <div class="container">
<form enctype="multipart/form-data" action="" method="post" class="contactform">
    <div>
        <label for="name"> </label>
    FULL NAME:<br><br><input type="text"value="" id="name" name="name"placeholder="Name" 
    required="required"/>
    </div>
    <div>
   <label for="type"></label><br>
   USER NAME: <br><br> <input type="text"  required="required" name="username"placeholder="user name"
    class="class-control"/><br>
    </div>
    <div>
     <label for="email"></label><br>
    EMAIL:<br><br><input type="text" placeholder="email"  required="required"name="email"/><br>
    </div>
    <div>
     <label for="phonenumber"></label><br>
     PHONE NUMBER:<br><br><input type="text"  placeholder="Phone number" required="required"name="phonenumber"/>
    </div>
    <label for="type"></label><br>
     PASSWORD:<br><br><input type="password"  required="required" name="password" placeholder="Password"
     class="class-control"/>
    </div>
       <button value="Create Account" name="submit" class="btn btn-primary">CREATE ACCOUNT</button>
   <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
      </div>
    <div >
       </div>
</form>

</center>
<?php require('top.inc.php');?>
</body>
</html>