<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['Name']) && $_GET['Name']!=''){
	$type=get_safe_value($conn,$_GET['Name']);
	if($type=='delete'){
		$id=get_safe_value($conn,$_GET['id']);
		$delete_sql="delete from feedback where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}
// if(isset($_GET['type']) && $_GET['type']!=''){
// 	$type=get_safe_value($conn,$_GET['type']);
// 	if($type=='delete'){
// 		$id=get_safe_value($conn,$_GET['id']);
// 		$delete_sql="delete from house where id='$id'";
// 		mysqli_query($conn,$delete_sql);
// 	}
// }

$sql="select * from feedback order by id desc";
// order by id desc";
$res=mysqli_query($conn,$sql);

?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">FEEDBACK </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <!-- <th class="serial">#</th> -->
							  
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Subject</th>
						       <th>Message</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							// $i=1;
							// if(mysqli_num_rows($res)>0)
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
										
										<td><?php echo $row['id']?></td>
										<td><?php echo $row['Name']?></td>
										<td><?php echo $row['Email']?></td>
										<td><?php echo $row['Subject']?></td>
										<td><?php echo $row['Message']?></td>
							  
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['Name']."'>Delete</a></span>";
								?>
							   </td>
							</tr>
							
							<?php } ?>
							<!-- }
							else
							{
								echo " 0 row inserted";
							} -->
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