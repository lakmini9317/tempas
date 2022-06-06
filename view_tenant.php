<?php include 'db_connect.php' ?>

<style>
    .mytable>tbody>tr>td, .mytable>tbody>tr>th, .mytable>tfoot>tr>td, .mytable>tfoot>tr>th, .mytable>thead>tr>td, .mytable>thead>tr>th {
    padding: 8px;
    }

   
</style>

<?php 
    $sql = "SELECT *  FROM ctenants where id = {$_GET['id']} ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

?>


<div class="container-fluid">
	<div class="row">

        <div class="col-md-6">
            <div  class="row" style="background-color:#E5E5E5;padding:20px;border-radius:25px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Agreement Reference No </p>
                        <p>File No </p>
                        <p>Project Code</p>
                        <p>Project Name</p>
                        <p>Customer Code</p>
                        <p>Customer Name</p>
                        <p>Address</p>
                        <p>Email</p>
                        <p>Contact Number</p> 
                </div>
                <div class="col-md-7">
                        <p>- <b><?php echo $row['agref'] ?></b> </p>
                        <p>- <b><?php echo $row['fileno'] ?> </b></p>
                        <p>- <b><?php echo $row['procode'] ?></b></p>
                        <p>- <b><?php echo ucwords($row['projnm']) ?></b></p>
                        <p>- <b><?php echo $row['cuscode'] ?></b></p>
                        <p>- <b><?php echo $row['firstname'] ?></b></p>
                        <p>- <b><?php echo $row['privadd'] ?></b></p>
                        <p>- <b></b></p>
                        <p>- <b></b></p>
                </div>                
            </div> 

            <div  class="row" style="background-color:#E5E5E5;padding:20px;border-radius:25px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Premises Address</p>
                        <p>Extent</p>
                        <p>Plan No</p>
                        <p>Lot No</p>
                        <p>Date of Allocation</p>
                        <p>Physical handed Over Date</p>
                        <p>Period of Allocation</p>
                        <p>Date of Expiry</p>
                </div>
                <div class="col-md-7">
                        <p>- <b> <?php echo $row['premisadd'] ?>  </b> </p>
                        <p>- <b> <?php echo $row['extent'] ?></b></p>
                        <p>- <b> <?php echo $row['planno'] ?></b></p>
                        <p>- <b> <?php echo $row['lotno'] ?> </b></p>
                        <p>- <b> <?php echo $row['allodate'] ?> </b></p>
                        <p>- <b> <?php echo $row['phyhodate'] ?> </b></p>
                        <p>- <b> <?php echo $row['peridalloc'] ?> </b></p>
                        <p>- <b> <?php echo $row['expdate'] ?></b></p>
                </div>                
            </div> 

            <div  class="row" style="background-color:#E5E5E5;padding:20px;border-radius:25px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Monthly Rent</p>
                        <p>Taxes</p>
                        <p>Security Deposit</p>
                        <p>Security Deposit Receipt</p>
                        <p>Rate of Interest</p>
                      
                       
                </div>
                <div class="col-md-7">
                    <p>- <b> <?php echo $row['monrent'] ?> </b> </p>
                    <p>- <b> <?php echo $row['tax'] ?> </b> </p>
                    <p>- <b> <?php echo $row['secudep'] ?> </b> </p>
                    <p>- <b> <?php echo $row['secureceipt'] ?></b> </p>
                    <p>- <b> <?php echo $row['intrst'] ?></b> </p>
                    <p>- <b> </b> </p>                
                        
                </div>                
            </div>

            <div  class="row" style="background-color:#E5E5E5;padding:20px;border-radius:25px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Approved By</p>
                        <p>Due Period</p>
                        <p>Due Amount</p>
                        <p>Officer In Charge</p>
                        <p>Allocated Value</p>
                        <p>Allocated Period</p>
                      
                       
                </div>
                <div class="col-md-7">                    
                    <p>- <b> <?php echo $row['apprp'] ?> </b> </p>   
                    <p>- <b> <?php echo $row['duperiod'] ?></b> </p>  
                    <p>- <b> <?php echo $row['duamnt'] ?></b> </p>  
                    <p>- <b> <?php echo $row['oic'] ?></b> </p>  
                    <p>- <b> <?php echo $row['allocval'] ?></b> </p>  
                    <p>- <b> <?php echo $row['allocpr'] ?></b> </p>  
                                 
                        
                </div>                
            </div>
        </div>


        <div class="col-md-5">
            

            <table class=" table-striped table-bordered mytable" style="cell-padding:15px;">
               <tr style="text-align:center;">
                   <th>Renewal</th>
                   <th>Period</th>
                   <th>Value</th>
               </tr>
                
                <tr >
                    <td >1st </td>                     
                    <td ><?php echo $row['rnp1'] ?></td>
                    <td > <?php echo $row['rnv1'] ?></td>
                </tr>
                <tr>
                    <td >2nd </td>                     
                    <td ><?php echo $row['rnp2'] ?></td>
                    <td><?php echo $row['rnv2'] ?></td>
                </tr>
                <tr >
                    <td>3rd</td>                     
                    <td><?php echo $row['rnp3'] ?></td>
                    <td > <?php echo $row['rnv3'] ?></td>
                </tr>
                <tr >
                    <td >4th</td>                     
                    <td><?php echo $row['rnp4'] ?></td>
                    <td><?php echo $row['rnv4'] ?></td>
                </tr>
                <tr >
                    <td >5th</td>                     
                    <td ><?php echo $row['rnp5'] ?></td>
                    <td ><?php echo $row['rnv5'] ?></td>
                </tr>
                <tr >
                    <td  >6th</td>                     
                    <td ><?php echo $row['rnp6'] ?></td>
                    <td  ><?php echo $row['rnv6'] ?></td>
                </tr>
                <tr >
                    <td>7th</td>                     
                    <td><?php echo $row['rnp7'] ?></td>
                    <td><?php echo $row['rnv7'] ?></td>
                </tr>
                <tr >
                    <td>8th</td>                     
                    <td><?php echo $row['rnp8'] ?></td>
                    <td><?php echo $row['rnv8'] ?></td>
                </tr>
                <tr >
                    <td>9th</td>                     
                    <td><?php echo $row['rnp9'] ?></td>
                    <td><?php echo $row['rnv9'] ?></td>
                </tr>
                <tr >
                    <td>10th</td>                     
                    <td><?php echo $row['rnp10'] ?></td>
                    <td><?php echo $row['rnv10'] ?></td>
                </tr>
                <tr >
                    <td>11th</td>                     
                    <td><?php echo $row['rnp11'] ?></td>
                    <td><?php echo $row['rnv11'] ?></td>
                </tr>
                <tr >
                    <td>12th</td>                     
                    <td><?php echo $row['rnp12'] ?></td>
                    <td><?php echo $row['rnv12'] ?></td>
                </tr>
                <tr >
                    <td>13th</td>                     
                    <td><?php echo $row['rnp13'] ?></td>
                    <td><?php echo $row['rnv13'] ?></td>
                </tr>
                

            </table>
        </div>

        

    </div>
</div>

<?php
    }
    } else {
    echo "0 results";
    }


?>


