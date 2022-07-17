<?php include 'db_connect.php' ?>
<?
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $projname = $_POST['projnm'];

    $query = "UPDATE `ctenants` SET `projnm` = ".$projname." WHERE `ctenants`.`id` = $id";

    $result = mysqli_query($conn, $query)

    if($result){
        echo 'Data Updated';
    }else{
        echo 'Data Not updated';
    }

    mysqli_close($conn);
}
?>

<?php 
    $sql = "SELECT *  FROM ctenants where id = {$_GET['id']} ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

?>

<form action="" method="post">
    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">
                <label for="projnm">Project Name</label>
                <input type="text" class="form-control" id="projnm" name="projnm" value="<?php echo $row['projnm'] ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-default" id="update" name="update">Submit</button>
    </div>
</form>


<?php
    }
    } else {
    echo "0 results";
    }


?>