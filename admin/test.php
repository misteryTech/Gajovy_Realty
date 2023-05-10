
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIOANALYTICAL LABORATORY & DIAGNOSTIC CLINIC </title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	
	
<!-- Important -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
    <!-- Custom styles for this template-->

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
	
		<style>
		
		.form-control{
			text-transform: uppercase;
		}
	
	</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
		include ('../includes/sidenav.php');
		?>
		
		
					<?php
						date_default_timezone_set("Asia/Manila");
						$date_now = date("F/d/Y");
						$time_now = date("h:i a");
						$date = date("Y/m/d");
		
						?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                 
					
					<h6>BIOANALYTICAL LABORATORY &  DIAGNOSTIC CLINIC</h6>

                    <!-- Topbar Navbar -->
              
					
				
<h5 <h5 class="text-center p-1" style="background-color: #85e9e7">Customer Entry Form</h5>
<form name="entry_customer" action="<?=$_SERVER['PHP_SELF']?>" method="post">
	
	
	
	
	
	
<div class="form-row">

    <div class="form-group col-md-6">
			<label>Patient Appointment Code:</label>
    <input type="text" class="form-control action" id="appoint_code" placeholder = "Appointment Code" name="appoint_code" required>
    </div>
 <div class="form-group col-md-6">
   <label>Select Patient ID:</label>
    <select name="patient_name" id="patient_name" class="form-control action">
    <option value="">Select Patient ID</option>
   </select>
 
    </div>
</div>
<div class="form-row">
<div class="form-group select-boxes col-md-6" class="form-control">
	<label> Laboratory:</label>
    <?php
      
          $country = '';
          $query = "SELECT services_id,services_name FROM services_table GROUP BY services_id ORDER BY services_id ASC";
          $result = mysqli_query($connection, $query);
          while($row = mysqli_fetch_array($result))
          {
          $country .= '<option value="'.$row["services_id"].'">'.$row["services_name"].'</option>';
          }
    ?>
    <select name="services_inquire" id="services_inquire" class="form-control action">
    <option value="">Select Laboratory</option>
    <?php echo $country; ?>
   </select>
</div>
<div class="form-group col-md-6">
	   <label>Select Services:</label>
    <select name="laboratory[]" id="laboratory" multiple class="form-control action">
    <option value="">Select Services</option>
   </select>
 </div></div>

	
	  <div class="form-group col-md-6">
  <input type="submit" name="submit_patient_avail" value="Submit" class="btn btn-info" > 
  </div>
  </form>
				
					
					
					
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



					
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
	
	
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "services_inquire")
   {
    result = 'laboratory';
   }
  
   $.ajax({
    url:"../includes/fetch_services.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
	
	
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "appoint_code")
   {
    result = 'patient_name';
   }
  
   $.ajax({
    url:"../includes/fetch_customer.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
	
	
	
});
</script>


</html>