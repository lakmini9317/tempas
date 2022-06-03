<?php 

?>

<div class="container-fluid">
	
	<div class="row">
	<div class="col-lg-12">
			
	</div>
	</div>
	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>
				<tr>
					<th class="text-center">#</th>
                    <th class="text-center">Customer Code</th>
					<th class="text-center">Project Name</th>
					<th class="text-center">Premises Code</th>
					<th class="text-center">Due Amount</th>
					<th class="text-center">Expirary Date</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					
 					$users = $conn->query("SELECT * FROM ctenants order by id asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?>
				 	</td>
                     <td>
				 		<?php echo $row['cuscode'] ?>
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['projnm']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['premisadd'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['duamnt'] ?>
				 	</td>
				 	<td>
                     <?php echo $row['expdate'] ?>
				 	</td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>
<script>
	$('table').dataTable();

</script>