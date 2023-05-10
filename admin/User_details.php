<?php


 include("../includes/connection.php");
include("header.php");
include("topnav.php");
include("sidebar.php");
?>






  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Registered Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item">Registered Users</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-11">

             <div class="card">
            <div class="card-body">
            <center> <h5 class="card-title">Users Information</h5></center> 

              <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Clients</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Agents</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Broker</button>
                </li> 
				  
				  <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contacts" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Sales Manager</button>
                </li>
              </ul>
				
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                  
					
					
					   <section class="section">
      <div class="row">
		  
		  
		  
		  <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Client Table</h5>

              <!-- Default Table -->
             <table id="client" class="table" >
                <thead>
                  <tr>
                    <th scope="col">Client Id</th>
                    <th scope="col">Name</th>
         
                    <th scope="col">Email</th>
                    <th scope="col">MobileNo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 	<?php			
						
								$query_broker=mysqli_query($connection, "SELECT * FROM clients_info ");
										
										
											while($broker_req = mysqli_fetch_assoc($query_broker)){
										?>
										
						<tr>
						
						<td><?php echo  $broker_req['Client_Id']?></td>
						<td><?php echo  strtoupper($broker_req['CUST_Fname']).' '.strtoupper($broker_req['CUST_Lname'])?></td>
					
						<td><?php echo  $broker_req['CUST_Email_ad']?></td>
				
						<td><?php echo  $broker_req['CUST_Mobileno']?></td>
						<td>
							
							     <button type="button" class="btn btn-primary">Edit</button> ||               <button type="button" class="btn btn-danger">Update</button>
							
						</td>
							
					</tr>
					
					
					
					
					<?php
											}
					?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

          

          

          

        </div>
						   </div>
		  </section>
					
					
					
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                
							   <section class="section">
      <div class="row">
		  
		  
		  
		  <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agents Table</h5>

              <!-- Default Table -->
              <table id="agent" class="table" >
                <thead>
                  <tr>
                     <th scope="col">Id</th>
                    <th scope="col">Name</th>
          
                    <th scope="col">Email</th>
                    <th scope="col">MobileNo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 	<?php			
						
								$query_broker=mysqli_query($connection, "SELECT * FROM agents_info WHERE position='Agent' ");
										
										
											while($broker_req = mysqli_fetch_assoc($query_broker)){
										?>
										
						<tr>
						
						<td><?php echo  $broker_req['Client_Id']?></td>
						<td><?php echo  strtoupper($broker_req['CUST_Fname']).' '.strtoupper($broker_req['CUST_Lname'])?></td>
				
						<td><?php echo  $broker_req['CUST_Email_ad']?></td>
				
						<td><?php echo  $broker_req['CUST_Mobileno']?></td>
						<td>
							
							     <button type="button" class="btn btn-primary">Edit</button>|| <button type="button" class="btn btn-danger">Delete</button>
							
						</td>
							
					</tr>
					
					
					
					
					<?php
											}
					?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

          

          

          

        </div>
						   </div>
		  </section>
					
					
					
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                		   <section class="section">
      <div class="row">
		  
		  
		  
		  <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Broker Table</h5>

              <!-- Default Table -->
              <div class="table-responsive">
                                <table id="broker" class="table" >
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
          
                    <th scope="col">Email</th>
                    <th scope="col">MobileNo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 	<?php			
						
								$query_broker=mysqli_query($connection, "SELECT * FROM agents_info WHERE position='Broker' ");
										
										
											while($broker_req = mysqli_fetch_assoc($query_broker)){
										?>
										
						<tr>
						
						<td><?php echo  $broker_req['Client_Id']?></td>
						<td><?php echo  strtoupper($broker_req['CUST_Fname']).' '.strtoupper($broker_req['CUST_Lname'])?></td>
		
						<td><?php echo  $broker_req['CUST_Email_ad']?></td>
				
						<td><?php echo  $broker_req['CUST_Mobileno']?></td>
						<td>
							
							     <button type="button" class="btn btn-primary">Edit</button> ||               <button type="button" class="btn btn-danger">Update</button>
							
						</td>
							
					</tr>
					
					
					
					
					<?php
											}
					?>
                </tbody>
              </table>
                            </div>
              <!-- End Default Table Example -->
            </div>
          </div>

          

          

          

          

        </div>
						   </div>
		  </section>
                </div>
				  
				  
				      <div class="tab-pane fade" id="pills-contacts" role="tabpanel" aria-labelledby="contact-tab">
                		   <section class="section">
      <div class="row">
		  
		  
		  
		  <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sales Manager Table</h5>

              <!-- Default Table -->
              <table id="Salesm" class="table" >
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
          
                    <th scope="col">Email</th>
                    <th scope="col">MobileNo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 	<?php			
						
								$query_broker=mysqli_query($connection, "SELECT * FROM agents_info WHERE position='Sales_Manager' ");
										
										
											while($broker_req = mysqli_fetch_assoc($query_broker)){
										?>
										
						<tr>
						
						<td><?php echo  $broker_req['Client_Id']?></td>
						<td><?php echo  strtoupper($broker_req['CUST_Fname']).' '.strtoupper($broker_req['CUST_Lname'])?></td>
		
						<td><?php echo  $broker_req['CUST_Email_ad']?></td>
				
						<td><?php echo  $broker_req['CUST_Mobileno']?></td>
						<td>
							
							     <button type="button" class="btn btn-primary">Edit</button> ||               <button type="button" class="btn btn-danger">Update</button>
							
						</td>
							
					</tr>
					
					
					
					
					<?php
											}
					?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

          

          

          

        </div>
						   </div>
		  </section>
                </div>
              </div><!-- End Pills Tabs -->

            </div>
          </div>
          

          

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
include("footer.php");
?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>

  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Page level plugins -->


  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>


	  <script type="text/javascript">
		$(document).ready(function() {
			
$(document).ready(function () {
    $('#client').DataTable();
});
			
			$(document).ready(function () {
    $('#agent').DataTable();
});
			$(document).ready(function () {
    $('#broker').DataTable();
});
			$(document).ready(function () {
    $('#Salesm').DataTable();
});
	
});
				</script>
</body>
</html>