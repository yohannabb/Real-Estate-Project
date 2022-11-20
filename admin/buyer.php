<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($conn,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($conn,$_GET['id']);
		$delete_sql="delete from buyer where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}

$sql="select * from buyer order by id desc";
$res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">BUYER </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <!-- <th class="serial">#</th> -->
							   <th>ID</th>
							   <th>first_name</th>
							   <th>Last Name</th>
							   <th>Username</th>
							   <th>Sex</th>
						       <th>Age</th>
							   <th>Phone Number</th>
							   <th>Address</th>
							   <th>Password</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							// $i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <!-- <td class="serial"><?php echo $i?></td> -->
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['first_name']?></td>
							   <td><?php echo $row['last_name']?></td>
							   <td><?php echo $row['username']?></td>
							   <td><?php echo $row['sex']?></td>
							   <td><?php echo $row['age']?></td>
							   <td><?php echo $row['phoneNumber']?></td>
							   <td><?php echo $row['adress']?></td>
							   <td><?php echo $row['pasword']?></td>
							   <!-- <td><?php echo $row['create_at']?></td> -->
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
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