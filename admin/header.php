
<?php
session_start();

if(isset($_SESSION["admin_id"])){
	
	$admin_id = $_SESSION["admin_id"];
	include("../includes/connection.php");
	
	
	$get_record = mysqli_query($connection,"SELECT * FROM administrator_tbl WHERE admin_id ='$admin_id'");
	
	while($row_edit = mysqli_fetch_assoc($get_record)){
		$db_role  = $row_edit["admin_account_type"];
		$db_name  = $row_edit["admin_firstname"];
		$db_lastname  = $row_edit["admin_lastname"];
		
		$full_name = strtoupper($row_edit["admin_firstname"]).' '.strtoupper($row_edit["admin_lastname"]);
		
	}
	
}else{
		echo '<script type="text/javascript">
					  location="../login.php";
                           </script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
	
	  <link rel="stylesheet" type="text/css" href="../css/datatables-1.10.25.min.css" />


  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
	
	<body>