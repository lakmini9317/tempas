
<html>

<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/css/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .box {
            /* width: 1270px; */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            /* margin-top: 100px; */
        }

        
       

        
    </style>
</head>

<body>
    <div class="container box">
        <h1 align="center"></h1>
        <br />
        <div align="right">
            <button type="button" id="modal_button" class="btn btn-info">Create Records</button>
            <!-- It will show Modal for Create new Records !-->
        </div>
        <br />
        <div id="result" class="table-responsive">
            <!-- Data will load under this tag!-->

        </div>
    </div>
</body>

</html>

<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Records</h4>
            </div>
            <div class="modal-body">
                <div style="background-color:#E5E5E5;padding:15px;border-radius:25px;"> 
                
                    <div class="row" >
                        <div class="col-md-4">
                            <label>Project Name</label>
                            <input type="text" name="projname" id="projname" required class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Agreement Code</label>
                            <input type="text" name="agreec" id="agreec" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>File No</label>
                            <input type="text" name="fileno" id="fileno" class="form-control" />
                        </div>
                    </div> <br>
                

                    <div class="row">
                        <div class="col-md-4">
                            <label>Project Code</label>
                            <input type="text" name="student_last_name" id="iprocode" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Customer Code</label>
                            <input type="text" name="student_last_name" id="icuscode" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>First Name</label>
                            <input type="text" name="student_last_name" id="ifirstname" class="form-control" />
                        </div>
                    </div> <br>
                </div><br>

                <div style="background-color:#E5E5E5;padding:15px;border-radius:25px;"> 
                    <div class="row">
                        <div class="col-md-4">
                            <label>Privet Address</label>
                            <input type="text" name="student_last_name" id="iprivadd" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Premises Address</label>
                            <input type="text" name="student_last_name" id="ipremisadd" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Extent</label>
                            <input type="text" name="student_last_name" id="iextent" class="form-control" />
                        </div>
                    </div> <br>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Plan No</label>
                            <input type="text" name="student_last_name" id="iplanno" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Lot No</label>
                            <input type="text" name="student_last_name" id="ilotno" class="form-control" />
                        </div>

                        <div class="col-md-4">
                            <label>Date of Allocation</label>
                            <input type="text" name="student_last_name" id="iallodate" class="form-control" />
                        </div>
                    </div> <br>
                </div> <br>

                <div style="background-color:#E5E5E5;padding:15px;border-radius:25px;"> 
                    <div class="row">
                            <div class="col-md-4">
                                <label>Physical handed Over Date</label>
                                <input type="text" name="student_last_name" id="iphyhodate" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Period of Allocation</label>
                                <input type="text" name="student_last_name" id="iperidalloc" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Monthly Rent / Date of Expiry</label>
                                <input type="text" name="student_last_name" id="imonrent" class="form-control" />
                            </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Tax</label>
                            <input type="text" name="student_last_name" id="itax" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Security Deposit</label>
                            <input type="text" name="student_last_name" id="isecudep" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Security Deposit Receipt</label>
                            <input type="text" name="student_last_name" id="isecureceipt" class="form-control" />
                        </div>
                    </div><br>
                    
                    <div class="row">
                            <div class="col-md-4">
                                <label>Due Period</label>
                                <input type="text" name="student_last_name" id="iduperiod" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Due Amount</label>
                                <input type="text" name="student_last_name" id="iduamnt" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Rate of Interest</label>
                                <input type="text" name="student_last_name" id="iintrst" class="form-control" />
                            </div>
                    </div><br>
                </div> <br>

                <div style="background-color:#E5E5E5;padding:15px;border-radius:25px;"> 
                    <div class="row">
                            <div class="col-md-4">
                                <label>Officer In Charge</label>
                                <input type="text" name="student_last_name" id="ioic" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Allocated Value</label>
                                <input type="text" name="student_last_name" id="iallocval" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label>Allocated Period</label>
                                <input type="text" name="student_last_name" id="iallocpr" class="form-control" />
                            </div>
                    </div><br>
                        
                    <div class="row">
                        <div class="col-md-4">
                            <label>E-mail</label>
                            <input type="text" name="student_last_name" id="iemail" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <label>Contact Number</label>
                            <input type="text" name="student_last_name" id="icontact" class="form-control" />
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div><br>
                </div> <br>
                    
               

            </div>
            <div class="modal-footer">
                <input type="hidden" name="customer_id" id="customer_id" />
                <input type="submit" name="action" id="action" class="btn btn-success" />
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        fetchUser(); //This function will load all data on web page when page load
        function fetchUser() // This function will fetch data from table and display under <div id="result">
        {
            var action = "Load";
            $.ajax({
                url: "action.php", //Request send to "action.php page"
                method: "POST", //Using of Post method for send data
                data: {
                    action: action
                }, //action variable data has been send to server
                success: function(data) {
                    $('#result').html(data); //It will display data under div tag with id result
                }
            });
        }

        //This JQuery code will Reset value of Modal item when modal will load for create new records
        $('#modal_button').click(function() {
            $('#customerModal').modal('show'); //It will load modal on web page
            $('#projname').val(''); //This will clear Modal first name textbox
            $('#agreec').val(''); //This will clear Modal last name textbox
            $('#fileno').val(''); //This will clear Modal last name textbox
            $('#iprocode').val('');
            $('#icuscode').val('');
            $('#ifirstname').val(''); 
            $('#iprivadd').val('');
            $('#ipremisadd').val('');
            $('#iextent').val(''); 
            $('#iplanno').val(''); 
            $('#ilotno').val(''); 
            $('#iallodate').val(''); 
            $('#iphyhodate').val('');
            $('#iperidalloc').val(''); 
            $('#imonrent').val(''); 
            $('#itax').val('');
            $('#isecudep').val(''); 
            $('#isecureceipt').val(''); 
            $('#iintrst').val('');  
            $('#iduperiod').val('');  
            $('#iduamnt').val('');  
            $('#iintrst').val('');  
            $('#ioic').val('');  
            $('#iallocpr').val('');  
            $('#iallocpr').val('');  
            $('#iemail').val('');  
            $('#icontact').val(''); 
            $('.modal-title').text("Create New Records"); //It will change Modal title to Create new Records
            $('#action').val('Create'); //This will reset Button value ot Create
        });

        //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
        $('#action').click(function() {
            var i_col1 = $('#projname').val(); //Get the value of first name textbox.
            var i_col2 = $('#agreec').val(); //Get the value of last name textbox
            var i_col3 = $('#fileno').val(); //Get the value of last name textbox
            var i_col4 = $('#iprocode').val();
            var i_col5 = $('#icuscode').val();
            var i_col6 = $('#ifirstname').val(); 
            var i_col7 = $('#iprivadd').val();
            var i_col8 = $('#ipremisadd').val();
            var i_col9 = $('#iextent').val(); 
            var i_col10 = $('#iplanno').val(); 
            var i_col11 = $('#ilotno').val(); 
            var i_col12 = $('#iallodate').val(); 
            var i_col13 = $('#iphyhodate').val();
            var i_col14 = $('#iperidalloc').val(); 
            var i_col15 = $('#imonrent').val(); 
            var i_col16 = $('#itax').val();
            var i_col17 = $('#isecudep').val(); 
            var i_col18 = $('#isecureceipt').val(); 
            var i_col19 = $('#iintrst').val();  
            var i_col20 = $('#iduperiod').val();  
            var i_col21 = $('#iduamnt').val();  
            var i_col22 = $('#iintrst').val();  
            var i_col23 = $('#ioic').val();  
            var i_col24 = $('#iallocpr').val();  
            var i_col25 = $('#iallocpr').val();  
            var i_col26 = $('#iemail').val();  
            var i_col27 = $('#icontact').val();  
           
            var id = $('#customer_id').val(); //Get the value of hidden field customer id
            var action = $('#action').val(); //Get the value of Modal Action button and stored into action variable
            if (i_col1 != '' && i_col2 != '') //This condition will check both variable has some value
            {
                $.ajax({
                    url: "action.php", //Request send to "action.php page"
                    method: "POST", //Using of Post method for send data
                    data: {
                        a_projnm: i_col1,
                        a_agref: i_col2,
                        a_fileno: i_col3,
                        a_procode: i_col4,
                        a_cuscode: i_col5,
                        a_firstname: i_col6,
                        a_privadd: i_col7,
                        a_premisadd: i_col8,
                        a_extent: i_col9,
                        a_planno: i_col10,
                        a_lotno: i_col11,
                        a_allodate: i_col12,
                        a_phyhodate: i_col13,
                        a_peridalloc: i_col14,
                        a_expdate: i_col15,
                        a_monrent: i_col16,
                        a_tax: i_col17,
                        a_secudep: i_col18,
                        a_secureceipt: i_col19,
                        a_intrst: i_col20,
                        a_duperiod: i_col21,
                        a_duamnt: i_col22,
                        a_oic: i_col23,
                        a_allocval: i_col24,
                        a_allocpr: i_col25,
                        a_email: i_col26,
                        a_contact: i_col27,
                        id: id,
                        action: action
                    }, //Send data to server
                    success: function(data) {
                        alert(data); //It will pop up which data it was received from server side
                        $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
                        fetchUser(); // Fetch User function has been called and it will load data under divison tag with id result
                    }
                });
            } else {
                alert("Both Fields are Required"); //If both or any one of the variable has no value them it will display this message
            }
        });

        //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
        $(document).on('click', '.update', function() {
            var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
            var action = "Select"; //We have define action variable value is equal to select
            $.ajax({
                url: "action.php", //Request send to "action.php page"
                method: "POST", //Using of Post method for send data
                data: {
                    id: id,
                    action: action
                }, //Send data to server
                dataType: "json", //Here we have define json data type, so server will send data in json format.
                success: function(data) {
                    $('#customerModal').modal('show'); //It will display modal on webpage
                    $('.modal-title').text("Update Records"); //This code will change this class text to Update records
                    $('#action').val("Update"); //This code will change Button value to Update
                    $('#customer_id').val(id); //It will define value of id variable to this customer id hidden field
                    $('#projname').val(data.projname); //It will assign value to modal first name texbox
                    $('#agreec').val(data.agreec); //It will assign value of modal last name textbox
                    $('#fileno').val(data.fileno); //It will assign value of modal last name textbox
                    $('#iprocode').val(data.iprocode); //It will assign value of modal last name textbox
                    $('#icuscode').val(data.icuscode); //It will assign value of modal last name textbox
                    $('#ifirstname').val(data.ifirstname); //It will assign value of modal last name textbox
                    $('#iprivadd').val(data.iprivadd); //It will assign value of modal last name textbox
                    $('#ipremisadd').val(data.ipremisadd); //It will assign value of modal last name textbox
                    $('#iextent').val(data.iextent); //It will assign value of modal last name textbox
                    $('#iplanno').val(data.iplanno); //It will assign value of modal last name textbox
                    $('#ilotno').val(data.ilotno); //It will assign value of modal last name textbox
                    $('#iallodate').val(data.iallodate); //It will assign value of modal last name textbox
                    $('#iphyhodate').val(data.iphyhodate); //It will assign value of modal last name textbox
                    $('#iperidalloc').val(data.iperidalloc); //It will assign value of modal last name textbox
                    $('#imonrent').val(data.imonrent); //It will assign value of modal last name textbox
                    $('#itax').val(data.itax); //It will assign value of modal last name textbox
                    $('#isecudep').val(data.isecudep); //It will assign value of modal last name textbox
                    $('#isecureceipt').val(data.isecureceipt); //It will assign value of modal last name textbox
                    $('#iintrst').val(data.iintrst); //It will assign value of modal last name textbox
                    $('#iduperiod').val(data.iduperiod); //It will assign value of modal last name textbox
                    $('#iduamnt').val(data.iduamnt); //It will assign value of modal last name textbox$('#fileno').val(data.fileno); //It will assign value of modal last name textbox
                    $('#ioic').val(data.ioic); //It will assign value of modal last name textbox
                    $('#iallocval').val(data.iallocval); //It will assign value of modal last name textbox
                    $('#iallocpr').val(data.iallocpr); //It will assign value of modal last name textbox
                    $('#iemail').val(data.iemail); //It will assign value of modal last name textbox
                    $('#icontact').val(data.icontact); //It will assign value of modal last name textbox
                    
                    
                }
            });
        });

        //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
        // $(document).on('click', '.delete', function() {
        //     var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
        //     if (confirm("Are you sure you want to remove this data?")) //Confim Box if OK then
        //     {
        //         var action = "Delete"; //Define action variable value Delete
        //         $.ajax({
        //             url: "action.php", //Request send to "action.php page"
        //             method: "POST", //Using of Post method for send data
        //             data: {
        //                 id: id,
        //                 action: action
        //             }, //Data send to server from ajax method
        //             success: function(data) {
        //                 fetchUser(); // fetchUser() function has been called and it will load data under divison tag with id result
        //                 alert(data); //It will pop up which data it was received from server side
        //             }
        //         })
        //     } else //Confim Box if cancel then 
        //     {
        //         return false; //No action will perform
        //     }
        // });

        $(document).on('click', '.view', function() {
            // var id = $(this).attr("id"); 

            uni_modal("Temporary Allocation Details","view_tenant.php?id="+ $(this).attr("id"),"large")
            
                // var action = "view";
                // $.ajax({
                //     url: "view_payment.php", //Request send to "action.php page"
                //     method: "POST", //Using of Post method for send data
                //     data: {
                //         id: id,
                //         action: action
                //     }, //Data send to server from ajax method
                   
                // })
           
        });




        // $('.view_ctenant').click(function(){
		//     uni_modal("Temporary Allocation Details","view_tenant.php?id="+$(this).attr('data-id'),"large")
		
	    // })
    });
</script>