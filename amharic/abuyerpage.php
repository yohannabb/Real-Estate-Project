

<?php
$include=include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">  
<head>
<div class="container py-5"  id="mixit-container">
<div class="row mt-4">
<center>
<form  action="" method="post" >
     <input type="text" name="id" paceholder="enter id to search">
      <input type="submit"class="btn btn-primary" value="Search" name="search">
</form>
</center>
<?php
$include=include("connection.php");
if(isset($_POST['search']))
    {
$search = $_POST['id'];
  $query = "SELECT * FROM house WHERE (status='for sell') AND (image= '$search' || type='$search' || price='$search' || address='$search') ";
$query_run = mysqli_query($conn, $query);
$num=mysqli_num_rows($query_run);
if($num)
{
while($row=mysqli_fetch_array($query_run))
{
  ?>
  <div class="col-md-3">
  <div class="card">
  <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='300px' hight='260px'>
   <div class="card-body">
  <h3 class="card-title">Type:<?php echo $row['type'];?></h3>
  <h4 class="card-title">Price:<?php echo $row['price'];?></h4>
  <h5 class="card-title">Address:<?php echo $row['address'];?></h5>
  <a href='#'> <input type="submit" name='buy'
value='BUY' class="btn btn-primary"alignment:left></a>
</div>
</div>
</div>

  <?php
}
}
else{
echo 'no house found for sale';
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
 $result1=mysqli_query($conn,"SELECT * FROM `house` where status='for sell'");
 $check=mysqli_num_rows( $result1)>0;
 if( $check){
  while($row=mysqli_fetch_array( $result1)){
    ?>

     <div class="col-md-3">
    <div class="card">
    <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='300px' hight='260px'>
     <div class="card-body">
    <h3 class="card-title">Type:<?php echo $row['type'];?></h3>
    <h4 class="card-title">Price:<?php echo $row['price'];?></h4>
    <h5 class="card-title">Address:<?php echo $row['address'];?></h5>
    <a href='#'> <input type="submit" name='buy'
 value='BUY' class="btn btn-primary"alignment:left></a>
 </div>
 </div>
 </div>

    <?php
}
 }
 else{
  echo 'no house found for sale';
 }
 ?>
 </div>
</div>
</body>
</html>
