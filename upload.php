<?php  $include=include("connection.php")?>
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
        background-color: lightblue;
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
       <button type="submit" name="upload" class="btn btn-primary">Upload</button>
    </div>
</form>
</center>
<?php 
if(isset($_POST['upload'])){
$img=$_FILES['image'];
$img_loc=$_FILES['image']['tmp_name'];
$img_name=$_FILES['image']['name'];
$img_des='img/'.$img_name;
$type=$_POST['type'];
$price=$_POST['price'];
$address=$_POST['address'];
$status=$_POST['status'];
$sql= "INSERT INTO house(image,type,price,address,status) values ('$img_des','$type','$price','$address','$status')";
$result=mysqli_query($conn,$sql);
If($result){
    echo '<script type="text/javascript">alert:house uploaded successfuly</script>';
    header('location:owner.php');

}
else{
    echo '<script type="text/javascript">alert:house  not uploaded successfuly</script>';
}
}
mysqli_close($conn);
?>