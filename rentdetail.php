
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Real Estate System</title>
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
    <link rel="stylesheet" type="text/css" href="css/search.css">
    </head>
    <div class="container py-5">
<div class="row mt-4">
   <?php
   $include=include("connection.php");
   $id=$_GET['id'];
 $result1=mysqli_query($conn,"SELECT * FROM `house`WHERE id='$id'");
while($row=mysqli_fetch_array( $result1)){
  ?>
    <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='300px' hight='260px'>
     <div class="card-body">
    <h4 class="card-title">Type:<?php echo $row['type'];?></h4>
    <h5 class="card-title">Price:<?php echo $row['price'];?></h5>
    <h5 class="card-title">Address:<?php echo $row['address'];?></h5>
    <h5 class="card-title">Description:<?php echo $row['disc'];?></h5>
    </div>
 </div>
 </div>
</div>
</div>
<center>
<a href='buyerpage.php'> <input type="submit" name='back'
 value='BACK' class="btn btn-primary"></a>
 </center>
<?php
}
 ?>
 </html>