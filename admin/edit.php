<?php  $include=include("connection.inc.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style> 
    body{
        background-color: lightgrey;
    }
        input{
            width:50%;
            height:5%;
            border:1px;
            border-radius:05px;
           padding:8px 15px 8px 15px;
           margin:10px 0px 15px 0px;
           box-shadow:1px 1px 1px 2px greey;
        }
    </style>
</head>
<body>
    <center>
<form enctype="multipart/form-data" action="" method="post">
<div>
        <label for="file"> </label>
        <input type="hidden"  name="house_id"/>
    </div>
    <div>
        <label for="file"> HOUSE IMAGE:</label>
        <input type="file" id="image" name="image" required="required"/>
    </div>
    <div>
        <label for="type">HOUSE TYPE:</label>
        <input type="text"  required="required" name="type" class="class-control"/>
    </div>
    <div>
        <label for="text">PRICE:</label>
        <input type="text"   required="required"name="price"/>
    </div>
    <div>
        <label for="address">ADDRESS:</label>
        <input type="text"   required="required"name="address"/>
    </div>
    <div>
        <label for="status">STATUS:</label>
        <input type="text"  required="required" name="status"/>
    </div>
    <div>
        <label for="date">DATE:</label>
        <input type="date"   name="date"/>
    </div>
    <div>
       <button type="submit" name="edit" class="btn btn-primary">EDIT</button>
       <a href="house.php" class="btn btn-danger">CANCEL</a>
    </div>
</form>
</center>
<?php 
if(isset($_POST['edit'])){
$id=$_GET['id'];   
$img=$_FILES['image'];
$img_loc=$_FILES['image']['tmp_name'];
$img_name=$_FILES['image']['name'];
$img_des='img/'.$img_name;
$type=$_POST['type'];
$price=$_POST['price'];
$address=$_POST['address'];
$status=$_POST['status']; 
$date=$_POST['date'];
$sql= "UPDATE house SET image='$img_des', type='$type',price='$price',address='$address',status='$status',
uploaded_date ='$date' where id ='$id' ";
$result=mysqli_query($conn,$sql);
If($result){
    echo '<script type="text/javascript">alert:house updated successfuly</script>';
    header('location:house.php');

}

else{
    echo '<script type="text/javascript">alert:house  not updated successfuly</script>';
}
}
mysqli_close($conn);
?>