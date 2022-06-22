<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-12">
			<form action="" id="manage-house">
				<div class="card" style="padding:20px;">
					
					<h4>New Temporary Allocation</h4>    <hr style="background-color:#007bff;"><br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Agreement Reference Number</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">File number</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Project Code</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Customer Code</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Name of the Customer</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Private Address</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Premises Address</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Extent</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Plan No.</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Lot No.</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Date of Allocation</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<label class="control-label">Physical Possession Handed Over Date</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
								<label class="control-label">Period of Allocation</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
								<label class="control-label">Date of Expiry</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
								<label class="control-label">Monthly Rent</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
						<div class="col-md-3">
                            <div class="form-group">
								<label class="control-label">Taxes</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
                        </div>
                    </div>

					
					<div class="card-body">
							<div class="form-group" id="msg"></div>
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Land No</label>
								<input type="text" class="form-control" name="house_no" required="">
							</div>
							<div class="form-group">
								<label class="control-label">Category</label>
								<select name="category_id" id="" class="custom-select" required>
									<?php 
									$categories = $conn->query("SELECT * FROM categories order by name asc");
									if($categories->num_rows > 0):
									while($row= $categories->fetch_assoc()) :
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
								<?php else: ?>
									<option selected="" value="" disabled="">Please check the category list.</option>
								<?php endif; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Description</label>
								<textarea name="description" id="" cols="30" rows="4" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control text-right" name="price" step="any" required="">
							</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="reset" > Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			
		</div>
	</div>	

</div>
	<?php
        include "footer.php";                
    ?>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p {
		margin: unset;
		padding: unset;
		line-height: 1em;
	}
</style>
<script>
	$('#manage-house').on('reset',function(e){
		$('#msg').html('')
	})
	$('#manage-house').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_house',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					$('#msg').html('<div class="alert alert-danger">Land number already exist.</div>')
					end_load()
				}
			}
		})
	})
	$('.edit_house').click(function(){
		start_load()
		var cat = $('#manage-house')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='house_no']").val($(this).attr('data-house_no'))
		cat.find("[name='description']").val($(this).attr('data-description'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		cat.find("[name='category_id']").val($(this).attr('data-category_id'))
		end_load()
	})
	$('.delete_house').click(function(){
		_conf("Are you sure to delete this house?","delete_house",[$(this).attr('data-id')])
	})
	function delete_house($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_house',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>