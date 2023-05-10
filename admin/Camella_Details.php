<?php


 include("../includes/connection.php");
include("header.php");
include("topnav.php");
include("sidebar.php");
?>






  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Camella</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">House</li>
          <li class="breadcrumb-item">Camella Details</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
	  
	  <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          
          <div class="card">
            <div class="card-body">
              <center><h5 class="card-title">Camella Houses</h5></center>

              <!-- Multi Columns Form -->
              <form  class="row g-3">
          
				  
				  
				  
				  <?php
			   $query_house = ("SELECT * FROM realestate_tbl where category='Camella' ");
			   $query_result = mysqli_query($connection,$query_house);
			   
			   while($row_house = mysqli_fetch_array($query_result)){
				  $picture_house = $row_house['real_estate_pic'];
				  $so_no = $row_house['so_number'];
				  $project_name = $row_house['projec_descrip'];
				  $project_name = $row_house['projec_descrip'];
				   
				   
				   
				   
				   echo"
				            <div class='col-md-4'>
				     <div class='card'>
            <img src='../picture/$picture_house' class='card-img-top' alt=''>
            <div class='card-body'>
              <h5 class='card-title'> $so_no</h5>
              <p class='card-text'> $project_name</p>
            </div>
			<div class='card-footer d-grid gap-1'>
                                            <button id='" . $row_house['realestate_id'] . "' class='btn btn-primary animalView'><i class='fas fa-magnifying-glass'></i> View</button>
                                        
                                        </div>
			
			
			
          </div>
				    </div>
		
				   
				   ";
				   
				   
			   }
			   
			   
		
			   
			   ?>
				  
				  
				  
				  
				  
				  
  
          



         
              </form><!-- End Multi Columns Form -->

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
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>