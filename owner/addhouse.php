<?php  $include=include("connection.inc.php")?>
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
				   
                   <a href="index.php"><h4 >Dashboard </h4></a>
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
        <label for="file"> HOUSE IMAGE:</label>
        <input type="file" id="image" name="image" required="required"/>
        <!-- accept="image/jpg,image/png,image/jfif -->
    </div>
    <div>
        <label for="type">HOUSE TYPE:</label><br>
        <input type="text"  required="required" name="type" class="class-control"/>
    </div>
    <div>
        <label for="text">PRICE:</label><br>
        <input type="text"   required="required"name="price"/>
    </div>
    <div>
        <label for="address">ADDRESS:</label><br>
        <input type="text"   required="required"name="address"/>
    </div>
    <div>
        <label for="status">STATUS:</label><br>
        <input type="text"  required="required" name="status"/><br>
    </div>
    <div>
        <label for="discription">Discription:</label><br>

        <textarea id="disc" name="disc" rows="4" cols="50">
                       </textarea>    </div>
    <div>
       <button type="submit" name="upload" class="btn btn-primary">Upload</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <a href="index.php"class="btn btn-primary">BACK </a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
</form>
</center>
</div>
<?php 
require('top.inc.php');
if(isset($_POST['upload'])){
$img=$_FILES['image'];
$img_loc=$_FILES['image']['tmp_name'];
$img_name=$_FILES['image']['name'];
$img_des='img/'.$img_name;
$type=$_POST['type'];
$price=(int)$_POST['price'];
$address=$_POST['address'];
$status=$_POST['status'];
$disc=$_POST['disc'];
$sql= "INSERT INTO house(image,type,price,address,status,disc) values ('$img_des','$type','$price','$address','$status','$disc')";
$result=mysqli_query($conn,$sql);
If($result){
    echo '<script type="text/javascript">alert:house uploaded successfuly</script>';
    // header('./../location:owner.php');

}  
else{
    echo '<script type="text/javascript">alert:house  not uploaded successfuly</script>';
}
}
mysqli_close($conn);
?>
<?php
require('footer.inc.php');
?>
