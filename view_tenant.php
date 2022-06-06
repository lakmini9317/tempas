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
        <div class="col-md-6 ">
            <table class="table-condensed  table-hover" >
                
                <tr>
                    <td>Agreement Reference No</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['agref'] ?></td>
                </tr>
                <tr>
                    <td>Project Name</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo ucwords($row['projnm']) ?></td>
                </tr>
                <tr>
                    <td>File No</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['fileno'] ?></td>
                </tr>
                <tr>
                    <td>Project Code</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['procode'] ?></td>
                </tr>
                <tr>
                    <td>Premises Address</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"> <?php echo $row['premisadd'] ?></td>
                </tr>
                <tr>
                    <td>Extent</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['extent'] ?></td>
                </tr>
                <tr>
                    <td>Plan No</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['planno'] ?></td>
                </tr>
                <tr>
                    <td>Lot No</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['lotno'] ?></td>
                </tr>
                <tr>
                    <td>Date of Allocation</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['allodate'] ?></td>
                </tr>
                <tr>
                    <td>Physical handed Over Date</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['phyhodate'] ?></td>
                </tr>
                <tr>
                    <td>Period of Allocation</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['peridalloc'] ?></td>
                </tr>
                <tr>
                    <td>Date of Expiry</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['expdate'] ?></td>
                </tr>
                <tr>
                    <td>Monthly Rent</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['monrent'] ?></td>
                </tr>
                <tr>
                    <td>taxes</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['tax'] ?></td>
                </tr>
                <tr>
                    <td>Security Deposit</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['secudep'] ?></td>
                </tr>
                <tr>
                    <td>Security Deposit Receipt</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['secureceipt'] ?></td>
                </tr>
                <tr>
                    <td>Rate of Interest</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['intrst'] ?></td>
                </tr>
                <tr>
                    <td>Approved By</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['apprp'] ?></td>
                </tr>
                <tr>
                    <td>Due Period</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['duperiod'] ?></td>
                </tr>
                <tr>
                    <td>Due Amount</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['duamnt'] ?></td>
                </tr>
                <tr>
                    <td>Officer In Charge</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['oic'] ?></td>
                </tr>
                <tr>
                    <td>Allocated Value</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['allocval'] ?></td>
                </tr>
                <tr>
                    <td>Allocated Period</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['allocpr'] ?></td>
                </tr>
                <tr>
                    <td>Allocated Period</td> 
                    <td style="padding-left:15px;">-</td>
                    <td style="padding-left:15px;"><?php echo $row['allocpr'] ?></td>
                </tr>
                
                
            </table>


            
        </div>

        <div class="col-md-5">
            <table table-condensed>
                <tr>
                    <td>Customer Code</td> 
                    <td style="padding-left:20px;padding-right:20px;">-</td>
                    <td><?php echo $row['cuscode'] ?></td>
                </tr>
                <tr>
                    <td>Customer Name</td> 
                    <td style="padding-left:20px;padding-right:20px;">-</td>
                    <td><?php echo $row['firstname'] ?></td>
                </tr>
                <tr>
                    <td>Address</td> 
                    <td style="padding-left:20px;padding-right:20px;">-</td>
                    <td><?php echo $row['privadd'] ?></td>
                </tr>
                
            </table> <br>

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


