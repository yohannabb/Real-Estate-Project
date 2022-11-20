
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form enctype="multipart/form-data" action="" method="post">
    <div>
        <label for="file"> HOUSE IMAGE:</label>
       <td><input type="file" id="image" name="image" value=
       "<?php echo $fetch['image'] ?>"/>
       <img src="<?php echo $fetch['image'] ?>" ></td> 
    </div>
    <div>
        <label for="type">HOUSE TYPE:</label>
        <input type="text"  required="required"value="<?php echo $fetch['type'] ?>" name="type" class="class-control"/>
    </div>
    <div>
        <label for="text">PRICE:</label>
        <input type="text"   required="required"value="<?php echo $fetch['price'] ?>"name="price"/>
    </div>
    <div>
        <label for="address">ADDRESS:</label>
        <input type="text" value="<?php echo $fetch['address'] ?>"  required="required"name="address"/>
    </div>
    <div>
        <label for="status">STATUS:</label>
        <input type="text"value="<?php echo $fetch['status'] ?>"  required="required" name="status"/>
    </div>
    <div>
       <button type="submit" name="upload">Upload</button>
    </div>
</form>
</center>  
</body>
<?php 
$include=include("connection.php");
$id=$_GET['id'];
$recored=mysqli_query($conn,"SELECT FROM `house` WHERE id='$id'");
$fetch=myaqli_fetch_array($recored);


?>
</html>