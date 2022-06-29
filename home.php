<?php include 'db_connect.php' ?>
<style>
   span.float-right.summary_icon {
    font-size: 3rem;
    position: absolute;
    right: 1rem;
    top: 0;
}
.imgs{
		margin: .5em;
		max-width: calc(100%);
		max-height: calc(100%);
	}
	.imgs img{
		max-width: calc(100%);
		max-height: calc(100%);
		cursor: pointer;
	}
	#imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
		height: 60vh !important;background: black;
	}
	#imagesCarousel .carousel-item.active{
		display: flex !important;
	}
	#imagesCarousel .carousel-item-next{
		display: flex !important;
	}
	#imagesCarousel .carousel-item img{
		margin: auto;
	}
	#imagesCarousel img{
		width: auto!important;
		height: auto!important;
		max-height: calc(100%)!important;
		max-width: calc(100%)!important;
	}

    .card{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        
    }

</style>

<div class="containe-fluid">
	<div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php echo "Welcome back ". $_SESSION['login_name']."!"  ?>
                    <hr>
                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card" style="border:1px solid #3e4444;">
                                <div class="card-body " style="background-color:#3e4444;">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"> <i class="fa fa-home "></i></span>
                                        <h3 style="font-family:Sans-serif;">
                                            <?php echo $conn->query("SELECT * FROM houses")->num_rows ?>
                                        </h3>
                                        <p>Total Lands</p>
                                    </div>
                                </div>
                                <div class="card-footer"  style="background-color:rgba(62,68,68,0.7)">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="index.php?page=houses" class="text-white float-right">View List <span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card " style="border:1px solid #76a14a;">
                                <div class="card-body " style="background-color:#76a14a">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"> <i class="fa fa-user-friends "></i></span>
                                        <h3 style="font-family:Sans-serif;">
                                            <?php echo $conn->query("SELECT * FROM tenants where status = 1 ")->num_rows ?>
                                        </h3>
                                        <p>Total Tenants</p>
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color:rgba(118, 161, 74,0.7)">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="index.php?page=tenants" class="text-white float-right">View List <span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card " style="border:1px solid #405d27;">
                                <div class="card-body " style="background-color:#405d27">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"> <i class="fa fa-file-invoice "></i></span>
                                        <h3 style="font-family:Sans-serif;">
                                            <?php 
                                            //  $payment = $conn->query("SELECT sum(amount) as paid FROM payments where date(date_created) = '".date('Y-m-d')."' "); 
                                            //  echo $payment->num_rows > 0 ? number_format($payment->fetch_array()['paid'],2) : 0;

                                             $payment = $conn->query("SELECT sum(amount) as paid FROM payments where  MONTH(date_created) = '".date('m')."' "); 
                                             echo $payment->num_rows > 0 ? number_format($payment->fetch_array()['paid'],2) : 0;
                                             ?>
                                        </h3>
                                        <p>Payments This Month</p>
                                    </div>
                                </div>
                                <div class="card-footer" style="background-color:rgba(64,93,39,0.7)">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="index.php?page=invoices" class="text-white float-right">View Payments <span class="fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>      			
        </div>
    </div>
   
</div>
    <?php
        include "footer.php";                
    ?>
<script>
	$('#manage-records').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_track',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                resp=JSON.parse(resp)
                if(resp.status==1){
                    alert_toast("Data successfully saved",'success')
                    setTimeout(function(){
                        location.reload()
                    },800)

                }
                
            }
        })
    })
    $('#tracking_id').on('keypress',function(e){
        if(e.which == 13){
            get_person()
        }
    })
    $('#check').on('click',function(e){
            get_person()
    })
    function get_person(){
            start_load()
        $.ajax({
                url:'ajax.php?action=get_pdetails',
                method:"POST",
                data:{tracking_id : $('#tracking_id').val()},
                success:function(resp){
                    if(resp){
                        resp = JSON.parse(resp)
                        if(resp.status == 1){
                            $('#name').html(resp.name)
                            $('#address').html(resp.address)
                            $('[name="person_id"]').val(resp.id)
                            $('#details').show()
                            end_load()

                        }else if(resp.status == 2){
                            alert_toast("Unknow tracking id.",'danger');
                            end_load();
                        }
                    }
                }
            })
    }
</script>