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
            <div  class="row" style="background-color:#E5E5E5;padding-left:20px;padding-right:20px;border-radius:25px;padding-top:20px;margin:20px;">
                <div class="col-md-5">                   
                        <p >Agreement Reference No <br>
                        File No <br>
                        Project Code <br>
                        Project Name <br>
                        Customer Code <br>
                        Customer Name <br>
                        Address <br>
                        Email <br>
                        Contact Number</p> 
                </div>
                <div class="col-md-7">
                        <p>- &nbsp;<b><?php echo $row['agref'] ?></b> <br>
                        - &nbsp;<b><?php echo $row['fileno'] ?> </b> <br>
                        - &nbsp;<b><?php echo $row['procode'] ?></b> <br>
                        - &nbsp;<b><?php echo ucwords($row['projnm']) ?></b> <br>
                        - &nbsp;<b><?php echo $row['cuscode'] ?></b> <br>
                        - &nbsp;<b><?php echo $row['firstname'] ?></b> <br>
                        - &nbsp;<b><?php echo $row['privadd'] ?></b> <br>
                        - &nbsp;<b></b> <br>
                        - &nbsp;<b></b></p>
                </div>                
            </div> 

            <div  class="row" style="background-color:#E5E5E5;padding-left:20px;padding-right:20px;border-radius:25px;padding-top:20px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Premises Address <br>
                        Extent <br>
                        Plan No <br>
                        Lot No <br>
                        Date of Allocation <br>
                        Physical handed Over Date <br>
                        Period of Allocation <br>
                        Date of Expiry</p>
                </div>
                <div class="col-md-7">
                        <p>- &nbsp;<b> <?php echo $row['premisadd'] ?>  </b> <br>
                        - &nbsp;<b> <?php echo $row['extent'] ?></b><br>
                        - &nbsp;<b> <?php echo $row['planno'] ?></b><br>
                        - &nbsp;<b> <?php echo $row['lotno'] ?> </b><br>
                        - &nbsp;<b> <?php echo $row['allodate'] ?> </b> <br>
                        - &nbsp;<b> <?php echo $row['phyhodate'] ?> </b> <br>
                        - &nbsp;<b> <?php echo $row['peridalloc'] ?> </b> <br>
                        - &nbsp;<b> <?php echo $row['expdate'] ?></b></p>
                </div>                
            </div> 

            <div  class="row" style="background-color:#E5E5E5;padding-left:20px;padding-right:20px;border-radius:25px;padding-top:20px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Monthly Rent <br>
                        Taxes <br>
                        Security Deposit <br>
                        Security Deposit Receipt <br>
                        Rate of Interest</p>
                      
                       
                </div>
                <div class="col-md-7">
                    <p>- &nbsp;<b> <?php echo $row['monrent'] ?> </b> <br>
                    - &nbsp;<b> <?php echo $row['tax'] ?> </b> <br>
                    - &nbsp;<b> <?php echo $row['secudep'] ?> </b> <br>
                    - &nbsp;<b> <?php echo $row['secureceipt'] ?></b> <br>
                    - &nbsp;<b> <?php echo $row['intrst'] ?></b> <br>          
                        
                </div>                
            </div>

            <div  class="row" style="background-color:#E5E5E5;padding-left:20px;padding-right:20px;border-radius:25px;padding-top:20px;margin:20px;">
                <div class="col-md-5">                   
                        <p>Approved By <br>
                        Due Period <br>
                        Due Amount <br>
                        Officer In Charge <br>
                        Allocated Value <br>
                        Allocated Period</p>
                      
                       
                </div>
                <div class="col-md-7">                    
                    <p>- &nbsp;<b> <?php echo $row['apprp'] ?> </b> <br>   
                    - &nbsp;<b> <?php echo $row['duperiod'] ?></b> <br>  
                    - &nbsp;<b> <?php echo $row['duamnt'] ?></b> <br>  
                    - &nbsp;<b> <?php echo $row['oic'] ?></b> <br>  
                    - &nbsp;<b> <?php echo $row['allocval'] ?></b> <br>  
                    - &nbsp;<b> <?php echo $row['allocpr'] ?></b> </p>  
                                 
                        
                </div>                
            </div>
        </div>


        <div class="col-md-5">
            

            <table class=" table-striped table-bordered mytable" style="cell-padding:15px;margin:20px;table-layout: fixed; width: 100%;  ">
               <tr style="text-align:center;">
                   <th style="width: 150px; ">Renewal Milestone</th>
                   <th>Period</th>
                   <th style="width: 150px; ">Value</th>
               </tr>
                
                <tr >
                    <td class="text-center">1<sup>st</sup> </td>                     
                    <td ><?php echo $row['rnp1'] ?></td>
                    <td > <?php echo $row['rnv1'] ?></td>
                </tr>
                <tr>
                    <td class="text-center">2<sup>nd</sup> </td>                     
                    <td ><?php echo $row['rnp2'] ?></td>
                    <td><?php echo $row['rnv2'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">3<sup>rd</sup> </td>                     
                    <td><?php echo $row['rnp3'] ?></td>
                    <td > <?php echo $row['rnv3'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">4<sup>th</sup></td>                     
                    <td><?php echo $row['rnp4'] ?></td>
                    <td><?php echo $row['rnv4'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">5<sup>th</sup></td>                     
                    <td ><?php echo $row['rnp5'] ?></td>
                    <td ><?php echo $row['rnv5'] ?></td>
                </tr>
                <tr >
                    <td  class="text-center">6<sup>th</sup></td>                     
                    <td ><?php echo $row['rnp6'] ?></td>
                    <td  ><?php echo $row['rnv6'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">7<sup>th</sup></td>                     
                    <td><?php echo $row['rnp7'] ?></td>
                    <td><?php echo $row['rnv7'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">8<sup>th</sup></td>                     
                    <td><?php echo $row['rnp8'] ?></td>
                    <td><?php echo $row['rnv8'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">9<sup>th</sup></td>                     
                    <td><?php echo $row['rnp9'] ?></td>
                    <td><?php echo $row['rnv9'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">10<sup>th</sup></td>                     
                    <td><?php echo $row['rnp10'] ?></td>
                    <td><?php echo $row['rnv10'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">11<sup>th</sup></td>                     
                    <td><?php echo $row['rnp11'] ?></td>
                    <td><?php echo $row['rnv11'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">12<sup>th</sup></td>                     
                    <td><?php echo $row['rnp12'] ?></td>
                    <td><?php echo $row['rnv12'] ?></td>
                </tr>
                <tr >
                    <td class="text-center">13<sup>th</sup></td>                     
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


