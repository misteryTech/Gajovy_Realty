<?php
# create database connection

include("connection.php");

if(!empty($_POST["checkPassword"])) {
  $query = "SELECT * FROM administrator_tbl WHERE admin_password='" . $_POST["checkPassword"] . "'";
  $result = mysqli_query($connection,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {

	   echo "<span style='color:green'> Click Button Proceed with ID .</span>";
  //  echo "<script>$('#patient_but').prop('disabled',false);</script>";
  }else{
       echo "<span style='color:red'> Sorry Patient Code Not Found ,</span><span style='color:green'> Try Email .</span>";
  //  echo "<script>$('#patient_but').prop('disabled',true);</script>";
  }
}
?>