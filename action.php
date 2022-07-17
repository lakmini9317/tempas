<?php
include 'db_connect.php';

if(isset($_POST['submit'])){
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $projname = isset($_POST['projnm']) ? $_POST['projnm'] : '';
  $update = "UPDATE 'ctenants' SET 'projnm'='".$projname."' WHERE 'id' = $id";
  $up = mysqli_query($conn, $update);
  if(!isset($up)){
  die ("Error $sql" .mysqli_connect_error());
  }
  else
  {
  header("location: disp.php");
  }
 }
 ?>


?>