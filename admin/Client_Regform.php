<?php


 include("../includes/connection.php");
include("header.php");
include("topnav.php");
include("sidebar.php");
?>






  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client Registration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item">Register Clients</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-11">

          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registration</h5>

              <!-- Multi Columns Form -->
              <form action="../includes/code.php" method="post" class="row g-3">
               
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Firstname</label>
                  <input type="text" name="Cp_Firstname" class="form-control" id="Cp_Firstname">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Lastname</label>
                  <input type="text" name="Cp_Lastname" class="form-control" id="Cp_Lastname">
                </div>
				  
				      <div class="col-md-2">
                  <label for="inputCity" class="form-label">Age</label>
                  <input type="text" name="Cp_Age" class="form-control" id="Cp_Age">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Age Bracket</label>
                  <select id="Cp_Age_bracket" name="Cp_Age_bracket" class="form-select">
                    <option selected>Choose...</option>
                    <option>21 - 25</option>
                    <option>26 - 30</option>
                    <option>31 - 35</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputState" class="form-label">Gender</label>
                  <select id="Cp_Gender" name="Cp_Gender" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                   
                  </select>
                </div>  
				  
				  
				  <div class="col-md-4">
                  <label for="inputState" class="form-label">Marital Status</label>
                  <select id="Cp_Marital_status" name="Cp_Marital_status" class="form-select">
                    <option selected>Choose...</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Live-in</option>
                   
                  </select>
                </div>
				  
				  
				  
				  
                <div class="col-4">
                  <label for="inputAddress5" class="form-label">Mobile No.</label>
                  <input type="text" class="form-control" name="Cp_mobileno" id="Cp_mobileno" placeholder="">
                </div>  
				  
				  <div class="col-4">
                  <label for="inputAddress5" class="form-label">Email</label>
                  <input type="text" class="form-control" name="Cp_Email" id="Cp_Email" placeholder="Sample@gmail.com">
                </div> 
				  
				  <div class="col-4">
                  <label for="inputAddress5" class="form-label">Nationality</label>
                <select id="Cp_Nationality" name="Cp_Nationality" class="form-select">
            <option selected>Choose...</option>
                    <option>Filipino</option>
                    <option>American</option>
                    <option>Portogues</option>
                   
                  </select>
                </div>
				  
			
				  
				  
				   <div class="col-4">
		
					   
                  <label for="" class="form-label">Country</label>
                   <input type="text" name="Cp_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>  
				  
				    <div class="col-4">
                  <label for="inputAddress5" class="form-label">Region</label>
              <input type="text" name="Cp_Region" class="form-control" id="Cp_Region" placeholder="">
                  
                   
                  </select>
                </div>
				  
				  <div class="col-4">
                  <label for="inputAddress5" class="form-label">Province</label>
                  <input type="text" name="Cp_Province" class="form-control" id="Cp_Province" placeholder="">
                </div> 
				  
				
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Profession</label>
                  <input type="text" name="Cp_Profession" class="form-control" id="Cp_Profession" placeholder="">
                </div>
				  
				  
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Employment</label>
                  <input type="text" name="Cp_Employment" class="form-control" id="Cp_Employment" placeholder="">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Employment Country</label>
                  <input type="text" name="Cp_Employment_country" class="form-control" id="Cp_Employment_country" placeholder="">
                </div>
				  
				  
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Per Employment Group</label>
                  <input type="text" name="Cp_Employment_group" class="form-control" id="Cp_Employment_group" placeholder="">
                </div>
               
             
                <div class="text-center">
                  <button name="Client_addBtn" type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
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