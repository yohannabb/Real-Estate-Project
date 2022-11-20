<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
  $type=get_safe_value($conn,$_GET['type']);
  if($type=='delete'){
    $id=get_safe_value($conn,$_GET['id']);
    $delete_sql="delete from house where id='$id'";
    mysqli_query($conn,$delete_sql);
  }
}

$sql="select * from house order by id desc";
$res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
  <div class="orders">
     <div class="row">
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
           <h4 class="box-title">HOUSE </h4>
        </div>
        <div class="card-body--">
           <div class="table-stats order-table ov-h">
            <table class="table ">
             <thead>
              <tr>
                 <!-- <th class="serial">#</th> -->
                 <th>ID</th>
                 <th>IMAGE</th>
                 <th>TYPE</th>
                 <th>PRICE</th>
                   <th>ADDRESS</th>
                 <th>STATUS</th>
                 <th>DATE</th>
                 <th>EDIT</th>
                 <th>DELETE</th>
                 <th></th>
              </tr>
             </thead>
             <tbody>
              <?php
              $i=1;
              while($row=mysqli_fetch_assoc($res)){
                ?>
            
              <tr>
                 <!-- <td class="serial"><?php echo $i?></td> -->
                 <td><?php echo $row['id']?></td>
                <td> <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='100px' hight='100px'></td>

                 <!-- <td><img src='$row[image]' width='90px' height='90px'></td> -->
                 <!-- <td><?php echo $row['image']?></td> -->
                 <td><?php echo $row['type']?></td>
                 <td><?php echo $row['price']?></td>
                 <td><?php echo $row['address']?></td>
                 <td><?php echo $row['status']?></td>
                 <td><?php echo $row['uploaded_date']?></td>
                 <!-- <td>


                 <?php 
                 if($row['status2']=='active'){
                  echo 'enable';
                 }
                 else{
                  echo'desable';
                 
                 }
                 
                 
                 ?>



                 </td> -->
                 <!-- <td><a href='edit.php?id=$row[id]'class='btn btn-success'>EDIT</a></td> -->

                 <!-- <td><?php echo $row['create_at']?></td> -->
                 <td>
                <?php
                echo"<a href='edit.php?id=$row[id]'class='btn btn-success'>EDIT</a>";
                echo "<td><span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></td></span>";
          
                
                ?>
                 </td>
              </tr>
              <?php } ?>
             </tbody>
            </table>
           </div>
        </div>
       </div>
      </div>
     </div>
  </div>
</div>
<?php
require('footer.inc.php');
?>