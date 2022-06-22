<?php 
include 'db_connect.php'; 
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM tenants where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}  
?>
<div class="container-fluid">
	<form action="" id="manage-tenant">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

		<div style="background-color:#E5E5E5;padding:20px;border-radius:25px;">
			<div class="row form-group">
				<div class="col-md-4">
					<label for="agref" class="control-label">Agreement Reference No</label>
					<input type="text" class="form-control" name="agref"  value="<?php echo isset($agref) ? $agref :'' ?>" >
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">File No</label>
					<input type="text" class="form-control" name="fileno"  value="<?php echo isset($fileno) ? $fileno :'' ?>" required>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Project Code</label>
					<input type="text" class="form-control" name="procode"  value="<?php echo isset($procode) ? $procode :'' ?>" required>
				</div>			
			</div>

			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Customer Code</label>
					<input type="text" class="form-control" name="cuscode"  value="<?php echo isset($cuscode) ? $cuscode :'' ?>" required>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Name of the Customer</label>
					<input type="text" class="form-control" name="firstname"  value="<?php echo isset($firstname) ? $firstname :'' ?>" required>
				</div>	
				<div class="col-md-4">
					<label for="" class="control-label">Private Address</label>
					<input type="text" class="form-control" name="privadd"  value="<?php echo isset($privadd) ? $privadd :'' ?>" required>
				</div>		
			</div>

			<div class="row form-group">

				<div class="col-md-4">
					<label for="" class="control-label">Email</label>
					<input type="email" class="form-control" name="email"  value="<?php echo isset($email) ? $email :'' ?>" >
				</div>

				<div class="col-md-4">
					<label for="" class="control-label">Contact Number</label>
					<input type="text" class="form-control" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" >
				</div>
			
				
										
			</div>
		</div> <br>

		<div style="background-color:#E5E5E5;padding:20px;border-radius:25px;">

			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Premises Address</label>
					<select name="house_id" id="" class="custom-select select2">
						<!-- <option value=""></option> -->
						<?php 
						$house = $conn->query("SELECT * FROM houses where id not in (SELECT house_id from tenants where status = 1) ".(isset($house_id)? " or id = $house_id": "" )." ");
						while($row= $house->fetch_assoc()):
						?>
						<option value="<?php echo $row['id'] ?>" <?php echo isset($house_id) && $house_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['house_no'] ?></option>
						<?php endwhile; ?>
					</select>
				</div>

				<div class="col-md-4">
					<label for="" class="control-label">Extent</label>
					<input type="text" class="form-control" name="extent"  value="<?php echo isset($extent) ? $extent :'' ?>" required>
				</div>	

				<div class="col-md-4">
					<label for="" class="control-label">Plan No</label>
					<input type="text" class="form-control" name="planno"  value="<?php echo isset($planno) ? $planno :'' ?>" required>
				</div>

			</div>

			<div class="row form-group">
				
				<div class="col-md-4">
					<label for="" class="control-label">Lot No</label>
					<input type="text" class="form-control" name="lotno"  value="<?php echo isset($lotno) ? $lotno :'' ?>" required>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Date of Allocation</label>
					<input type="date" class="form-control" name="allodate"  value="<?php echo isset($allodate) ? date("Y-m-d",strtotime($allodate)) :'' ?>" required>
				</div>	

				<div class="col-md-4">
					<label for="" class="control-label">Physically Handed Over Date</label>
					<input type="date" class="form-control" name="phyhodate"  value="<?php echo isset($phyhodate) ? date("Y-m-d",strtotime($phyhodate)) :'' ?>" required>
				</div>
			</div>

			<div class="row form-group">				
					
				<div class="col-md-4">
					<label for="" class="control-label">Period of Allocation</label>
					<input type="date" class="form-control" name="date_in"  value="<?php echo isset($date_in) ? date("Y-m-d",strtotime($date_in)) :'' ?>" required>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Date of Expiry</label>
					<input type="date" class="form-control" name="expdate"  value="<?php echo isset($expdate) ? date("Y-m-d",strtotime($expdate)) :'' ?>" required>
				</div>						
			</div>			
		</div> <br>

		<div style="background-color:#E5E5E5;padding:20px;border-radius:25px;">

			<div class="row form-group">
				
				<div class="col-md-4">
					<label for="" class="control-label">Current Monthly Rent</label>
					<input type="number" class="form-control" name="monrent"  value="<?php echo isset($monrent) ? $monrent :'' ?>" required>
				</div>	
					<div class="col-md-4">
					<label for="" class="control-label">Taxes</label>
					<input type="number" class="form-control" name="tax"  value="<?php echo isset($tax) ? $tax :'' ?>" required>
				</div>		
				<div class="col-md-4">
					<label for="" class="control-label">Security Deposit</label>
					<input type="number" class="form-control" name="secudep"  value="<?php echo isset($secudep) ? $secudep :'' ?>" required>
				</div>
			</div>

			<div class="row form-group">
			
				<div class="col-md-4">
					<label for="" class="control-label">Receipt No</label>
					<input type="text" class="form-control" name="secureceipt"  value="<?php echo isset($secureceipt) ? $secureceipt :'' ?>" required>
				</div>	
				<div class="col-md-4">
					<label for="" class="control-label">Rate of Interest</label>
					<input type="number" class="form-control" name="intrst"  value="<?php echo isset($intrst) ? $intrst :'' ?>" >
				</div>

			</div>


		</div> <br>

		<div style="background-color:#E5E5E5;padding:20px;border-radius:25px;">
			<div class="row form-group">
				
				<div class="col-md-3">
					<label for="" class="control-label">Approved By</label>
					<input type="text" class="form-control" name="apprv"  value="<?php echo isset($apprv) ? $apprv :'' ?>" required>
				</div>	
				<div class="col-md-3">
					<label for="" class="control-label">Due Period</label>
					<input type="text" class="form-control" name="dperiod"  value="<?php echo isset($dperiod) ? $dperiod :'' ?>" >
				</div>	
				<div class="col-md-3">
					<label for="" class="control-label">Due Amount</label>
					<input type="number" class="form-control" name="damnt"  value="<?php echo isset($damnt) ? $damnt :'' ?>" >
				</div>
				<div class="col-md-3">
					<label for="" class="control-label">Officer In Charge</label>
					<input type="text" class="form-control" name="oic"  value="<?php echo isset($oic) ? $oic :'' ?>" required>
				</div>										
			</div>
		</div> <br>

		
		<div style="background-color:#E5E5E5;padding:20px;border-radius:25px;">
			<h3>Rent Renewal Details</h3>
			<div class="row form-group">							
				<div class="col-md-4">
					<label for="" class="control-label"> Allocated Value</label>
					<input type="text" class="form-control" name="rrdav"  value="<?php echo isset($rrdav) ? $rrdav :'' ?>" >
				</div>						
			</div>
		</div> <br>
	

		



	

		
	</form>
</div>
	
<script>
	
	$('#manage-tenant').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_tenant',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved.",'success')
						setTimeout(function(){
							location.reload()
						},1000)
				}
			}
		})
	})
</script>