<?php
$connection = mysqli_connect("localhost","root","","gajovy_database");
//fetchdata.php
if(isset($_POST["action"]))
{
 
 $output = '';
 if($_POST["action"] == "Cp_sonum")
 {
  $query = "SELECT projec_descrip,blk_lot,lot_area FROM realestate_tbl WHERE so_number = '".$_POST["query"]."' ";
  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["projec_descrip"].'">'.$row["projec_descrip"].', Blk & Lot '.$row["blk_lot"].' ,Area '.$row["lot_area"].'</option>';

  }
 }

	

 echo $output;
}
?>
