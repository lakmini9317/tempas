<?php include 'db_connect.php' ?>
<?
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $projname = $_POST['projnm'];

    $query = "UPDATE `ctenants` SET `projnm` = ".$projnm." WHERE `ctenants`.`id` = $id";

    $result = mysqli_query($conn, $query)

    if($result){
        echo 'Data Updated';
    }else{
        echo 'Data Not updated';
    }

    mysqli_close($conn);
}



?>
<form action="edit_ctenant2.php" method="post">
    <div class="row">
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="">
                <label for="projnm">Project Name</label>
                <input type="text" class="form-control" id="projnm" name="projnm" value="">
            </div>
        </div>

        <button type="submit" class="btn btn-default" id="update" name="update">Submit</button>
    </div>
</form>


