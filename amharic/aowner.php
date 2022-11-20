<?php
$include=include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">  
<body> 
<a href='upload.php'> <input type="submit" name='upload'
 value='ADDHOUSE' class="btn btn-primary"alignment:left></a>
 <a href='index.php'> <input type="submit" name='back'
 value='BACK' class="btn btn-primary"></a>
 <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">IMAGE</th>
      <th scope="col">TYPE</th>
      <th scope="col">PRICE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">STATUS</th>
      <th scope="col">DELETE</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
   <?php
 $result1=mysqli_query($conn,"SELECT * FROM `house`");
while($row=mysqli_fetch_array( $result1)){
    echo "
    <tr>
  <td>$row[id]</td>
  <td><img src='$row[image]' width='200px' height='150px'></td>
  <td>$row[type]</td>
  <td>$row[price]</td>
  <td>$row[address]</td>
  <td>$row[status]</td>
  <td><a href='delete.php?id=$row[id]'class='btn btn-danger'>DELETE</a></td>
  <td><a href='edit.php?id=$row[id]'class='btn btn-success'>EDIT</a></td>
    </tr>
  ";
}
 ?>
  </tbody>
</table>
</div>
</body>
</html>






	
