<?php
$connection = mysqli_connect("localhost","root","","gajovy_database");
//fetchdata.php
if(isset($_POST["action"]))
{
 
 $output = '';
 if($_POST["action"] == "appoint_code")
 {
  $query = "SELECT CUST_Fname,CUST_Lname FROM clients_info WHERE Client_Id = '".$_POST["query"]."' ";
  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($result))
  {
	  
	  
	  
   $output .= '<option value="'.$row["CUST_Fname"].'">'.$row["CUST_Fname"].' '.$row["CUST_Lname"].'</option>';

  }
 }

 echo $output;
}
?>
