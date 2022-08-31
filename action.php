<?php 
//Database connection by using PHP PDO
$username = 'root';
$password = '';
$connection = new PDO('mysql:host=localhost;dbname=tempas', $username, $password); // Create Object of PDO class by connecting to Mysql database

if (isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
    //For Load All Data
    if ($_POST["action"] == "Load") {
        $statement = $connection->prepare("SELECT * FROM ctenants ORDER BY id DESC");
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        $output .= '
   <table class="table table-bordered" > 
    <tr>
     <th >Customer Code</th>
     <th >Project Name</th>
     <th >Location</th>
     <th >Customer Name</th>
     <th >Due Amount</th>
     <th >Expiry Date</th>
     <th colspan="3">Action</th>     
    </tr>
  ';
        if ($statement->rowCount() > 0) {
            foreach ($result as $row) {
                $output .= '
    <tr>
     <td>' . $row["cuscode"] . '</td>
     <td>' . $row["projnm"] . '</td>
     <td>' . $row["premisadd"] . '</td>
     <td>' . $row["firstname"] . '</td>
     <td>' . $row["duamnt"] . '</td>
     <td>' . $row["expdate"] . '</td>
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-danger btn-xs view">View</button></td>
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-warning btn-xs update">Update</button> </td>    
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-danger btn-xs updatepay">Update payment</button></td>
    </tr>
    ';
            }
        } else {
            $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }

    //This code for Create new Records
    if ($_POST["action"] == "Create") {
        $statement = $connection->prepare("
   INSERT INTO ctenants (projnm,agref,fileno,procode,cuscode,firstname,privadd,premisadd,extent,planno,lotno,allodate,phyhodate,peridalloc,expdate,monrent,tax,secudep,secureceipt,intrst,duperiod,duamnt,oic,allocval,allocpr,email,contact) 
   VALUES (:col1, :col2, :col3, :col4, :col5, :col6, :col7, :col8, :col9, :col10, :col11, :col12, :col13, :col14, :col15, :col16, :col17, :col18, :col19, :col20, :col21, :col22, :col23, :col24, :col25, :col26, :col27)
  ");
        $result = $statement->execute(
            array(
                ':col1' => $_POST["a_projnm"],
                ':col2' => $_POST["a_agref"],
                ':col3' => $_POST["a_fileno"],
                ':col4' => $_POST["a_procode"],
                ':col5' => $_POST["a_cuscode"],
                ':col6' => $_POST["a_firstname"],
                ':col7' => $_POST["a_privadd"],
                ':col8' => $_POST["a_premisadd"],
                ':col9' => $_POST["a_extent"],
                ':col10' => $_POST["a_planno"],
                ':col11' => $_POST["a_lotno"],
                ':col12' => $_POST["a_allodate"],
                ':col13' => $_POST["a_phyhodate"],
                ':col14' => $_POST["a_peridalloc"],
                ':col15' => $_POST["a_expdate"],
                ':col16' => $_POST["a_monrent"],
                ':col17' => $_POST["a_tax"],
                ':col18' => $_POST["a_secudep"],
                ':col19' => $_POST["a_secureceipt"],
                ':col20' => $_POST["a_intrst"],
                ':col21' => $_POST["a_duperiod"],
                ':col22' => $_POST["a_duamnt"],
                ':col23' => $_POST["a_oic"],
                ':col24' => $_POST["a_allocval"],
                ':col25' => $_POST["a_allocpr"],
                ':col26' => $_POST["a_email"],
                ':col27' => $_POST["a_contact"]
            
            

            )
        );
        if (!empty($result)) {
            echo 'Data Inserted';
        }
    }

    //This Code is for fetch single customer data for display on Modal
    if ($_POST["action"] == "Select") {
        $output = array();
        $statement = $connection->prepare(
            "SELECT * FROM ctenants 
   WHERE id = '" . $_POST["id"] . "' 
   LIMIT 1"
        );
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $output["projname"] = $row["projnm"];
            $output["agreec"]  = $row["agref"];
            $output["fileno"] = $row["fileno"];
            $output["iprocode"] = $row["procode"];
            $output["icuscode"] = $row["cuscode"];
            $output["ifirstname"] = $row["firstname"];
            $output["iprivadd"] = $row["privadd"];
            $output["ipremisadd"] = $row["premisadd"];
            $output["iextent"] = $row["extent"];
            $output["iplanno"] = $row["planno"];
            $output["ilotno"] = $row["lotno"];
            $output["iallodate"] = $row["allodate"];
            $output["iphyhodate"] = $row["phyhodate"];
            $output["iperidalloc"] = $row["peridalloc"];
            $output["imonrent"] = $row["monrent"];
            $output["itax"] = $row["tax"];
            $output["isecudep"] = $row["secudep"];
            $output["isecureceipt"] = $row["secureceipt"];
            $output["iduperiod"] = $row["duperiod"];
            $output["iduamnt"] = $row["duamnt"];
            $output["iintrst"] = $row["intrst"];
            $output["ioic"] = $row["oic"];
            $output["iallocval"] = $row["allocval"];
            $output["iallocpr"] = $row["allocpr"];
            $output["iemail"] = $row["email"];
            $output["icontact"] = $row["contact"];
            

        }
        echo json_encode($output);
    }

    if ($_POST["action"] == "Update") {
        $statement = $connection->prepare(
            "UPDATE ctenants 
                SET projnm = :col1, 
                    agref  = :col2,
                    fileno = :col3,
                    procode = :col4,
                    cuscode = :col5,
                    firstname = :col6,
                    privadd = :col7,
                    premisadd = :col8,
                    extent = :col9,
                    planno = :col10,
                    lotno = :col11,
                    allodate = :col12,
                    phyhodate = :col13,
                    peridalloc = :col14,
                    expdate = :col15,
                    monrent = :col16,
                    tax = :col17,
                    secudep = :col18,
                    secureceipt = :col19,
                    intrst = :col20,
                    duperiod = :col21,
                    duamnt = :col22,
                    oic = :col23 ,
                    allocval = :col24,
                    allocpr = :col25,
                    email = :col26,
                    contact = :col27
                    

        WHERE id = :id
        "
            );
        $result = $statement->execute(
            array(
                ':col1' => $_POST["a_projnm"],
                ':col2' => $_POST["a_agref"],
                ':col3' => $_POST["a_fileno"],
                ':col4' => $_POST["a_procode"],
                ':col5' => $_POST["a_cuscode"],
                ':col6' => $_POST["a_firstname"],
                ':col7' => $_POST["a_privadd"],
                ':col8' => $_POST["a_premisadd"],
                ':col9' => $_POST["a_extent"],
                ':col10' => $_POST["a_planno"],
                ':col11' => $_POST["a_lotno"],
                ':col12' => $_POST["a_allodate"],
                ':col13' => $_POST["a_phyhodate"],
                ':col14' => $_POST["a_peridalloc"],
                ':col15' => $_POST["a_expdate"],
                ':col16' => $_POST["a_monrent"],
                ':col17' => $_POST["a_tax"],
                ':col18' => $_POST["a_secudep"],
                ':col19' => $_POST["a_secureceipt"],
                ':col20' => $_POST["a_intrst"],
                ':col21' => $_POST["a_duperiod"],
                ':col22' => $_POST["a_duamnt"],
                ':col23' => $_POST["a_oic"],
                ':col24' => $_POST["a_allocval"],
                ':col25' => $_POST["a_allocpr"],
                ':col26' => $_POST["a_email"],
                ':col27' => $_POST["a_contact"],
                ':id'   => $_POST["id"]
                )
            );
        if (!empty($result)) {
            echo 'Data Updated';
        }
    }

    if ($_POST["action"] == "Delete") {
        $statement = $connection->prepare(
            "DELETE FROM ctenants WHERE id = :id"
        );
        $result = $statement->execute(
            array(
                ':id' => $_POST["id"]
            )
        );
        if (!empty($result)) {
            echo 'Data Deleted';
        }
    }

   
}
