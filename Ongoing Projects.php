<?php 

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="container-fluid">
	
	<div class="row">
	<div class="col-lg-12">
			
	</div>
	</div>
	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-hovered table-striped table-bordered  col-md-12">
			<thead>
				<tr>
					<th class="text-center">#</th>
                    <th class="text-center">Customer Code</th>
					<th class="text-center">Project Name</th>
					<th class="text-center">Location</th>
					<th class="text-center">Customer Name</th>
					<th class="text-center">Due Amount</th>
					<th class="text-center">Expiry Date</th>
					<th class="text-center">Action</th>
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
				 		<?php echo $row['firstname'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['duamnt'] ?>
				 	</td>
				 	<td>
                     <?php echo $row['expdate'] ?>
				 	</td>
					<td class="text-center">
						<button class="btn btn-sm btn-outline-primary view_ctenant" type="button" 
						data-id="<?php echo $row['id'] ?>" > View</button>
						<!-- <button class="btn btn-sm btn-outline-primary" type="button" 
						href="edit_ctenant2.php?id=<?php echo $row['id'] ?>" >Edit</button> -->
						
						<a href="edit_ctenant2.php?id=<?php echo $row['id'] ?>">EDIT</a>
					</td> 
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>   
		</div>
	</div>

</div>

<?php
        include "footer.php";                
    ?>
<script>
	

	$(document).ready(function(){
		$('table').dataTable()
	})

	$('.view_ctenant').click(function(){
		uni_modal("Temporary Allocation Details","view_tenant.php?id="+$(this).attr('data-id'),"large")
		
	})

	$('.edit_ctenant').click(function(){
		// uni_modal("Edit Temporary Allocation Details","edit_ctenant2.php?id="+$(this).attr('data-id'),"large")
		window.open("edit_ctenant2.php?id= $row['id']","My Window");
		
	})

</script>