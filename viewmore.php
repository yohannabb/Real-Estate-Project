<?php


$sql="select disc from house ";
$res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   
							<?php
							$i=1;
							while($row=mysqli_fetch_assoc($res)){
								?>
							<tr>
							   <td><?php echo $row['id']?></td>
							  <td> <img src="<?php echo $row['image'];?>" class="card-img-top"  alt="houses for sell" width='100px' hight='100px'></td>
							   <td><?php echo $row['type']?></td><br>
							   <td><?php echo $row['price']?></td><br>
							   <td><?php echo $row['address']?></td>
							   <td><?php echo $row['status']?></td>
							   <td><?php echo $row['uploaded_date']?></td>
							   <td><a href='edit.php?id=$row[id]'class='btn btn-success'>EDIT</a></td>

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




