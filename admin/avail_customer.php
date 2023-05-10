<?php


 include("../includes/connection.php");
include("header.php");
include("topnav.php");
include("sidebar.php");
?>






  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Avail Realstate</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item">Realestate</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-11">

          
          <div class="card">
            <div class="card-body">
              <center><h5 class="card-title">Registration</h5></center>

              <!-- Multi Columns Form -->
              <form action="../includes/code.php" method="post" class="row g-3">
               
                <div class="col-md-4">
                  <label for="inputEmail5" class="form-label">Customer Id</label>
                   <input type="text" class="form-control action" id="appoint_code" placeholder = "Appointment Code" name="appoint_code" required>
                </div>
				  
				  <div class="col-md-8">
                  <label for="inputEmail5" class="form-label">Fullname</label>
                    <select name="customer_name" id="customer_name" class="form-control action">
    
   </select>
                </div>
				  
			
				  <center>  <h5 class="card-title">Realestate</h5> </center>
				      <div class="col-md-4">
                  <label for="inputCity" class="form-label">SO #</label>
                  <input type="text" name="Cp_sonum" class="form-control action" id="Cp_sonum">
                </div>
                <div class="col-md-8">
                  <label for="inputState" class="form-label">Project Description</label>
                  <select id="cp_proj_desc" name="cp_proj_desc" class="form-control action">
                    <option selected>Select</option>
                    
                  </select>
                </div>
            
				  
			

				  <div class="col-6">
                  <label for="inputAddress5" class="form-label">House Series</label>
                <select id="Cp_Nationality" name="Agent_Nationality" class="form-select">
            <option selected>Select</option>
                    <option>Lot Only</option>
                    <option>Camella</option>
          
                   
                  </select>
                </div> 
				  
				<div class="col-6">
                  <label for="inputAddress5" class="form-label">Hse Model</label>
                <select id="Cp_Nationality" name="Agent_Nationality" class="form-select">
              <option selected>Select</option>
                    <option>Lot Only</option>
                    <option>Freya SF WB SDK STILE ASW EH</option>
                
                   
                  </select>
                </div>
				  
				  <div class="col-6">
                  <label for="inputAddress5" class="form-label">Usage Type</label>
                <select id="Cp_Nationality" name="Agent_Nationality" class="form-select">
              <option selected>Select</option>
                    <option>Lot Only</option>
                    <option>House And Lot</option>
          
                   
                  </select>
                </div>
				  		  
				  <div class="col-6">
                  <label for="inputAddress5" class="form-label">Usage Type2</label>
                <select id="Cp_Nationality" name="Agent_Nationality" class="form-select">
              <option selected>Select</option>
                    <option>Lot Only</option>
                    <option>NRFO</option>
                    <option>RFO</option>
          
                   
                  </select>
                </div>
				  
			
				    
				   <div class="col-3">
		
					   
                  <label for="" class="form-label">RS Date</label>
                   <input type="date" name="Agent_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>
				
				    
				   <div class="col-3">
		
					   
                  <label for="" class="form-label">RS Year</label>
                   <input type="text" name="Agent_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>
				
				    
				   <div class="col-3">
		
					   
                  <label for="" class="form-label">RS Month</label>
                   <input type="text" name="Agent_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>
				
				    
				   <div class="col-3">
		
					   
                  <label for="" class="form-label">RS Age</label>
                   <input type="text" name="Agent_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>
				
				
				
				  
				   <div class="col-4">
		
					   
                  <label for="" class="form-label">TCP</label>
                   <input type="text" name="Agent_Country" class="form-control" id="Cp_Country" placeholder="">
                  	
                   
                  </select>
                </div>  
				  
				    <div class="col-4">
                  <label for="inputAddress5" class="form-label">TCP in M</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                  
                   
                  </select>
                </div>
				  
				 	  		  
				  <div class="col-4">
              <label for="inputAddress5" class="form-label">Media</label>
                <select id="Cp_Nationality" name="Agent_Nationality" class="form-select">
              <option selected>Select</option>
                    <option>Traditional</option>
                    <option>Online</option>
           
          
                   
                  </select>
                </div>
				  <hr>
				 <center> <h5 class="card-title">Broker</h5></center>
          
		




  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Broker Grp</label>
	         <select id="Cp_Region" name="Cp_Region" class="form-select">
            <option selected>Select</option>

                    <option value="N/A">None</option>
                    <option value="broker">Broker</option>
                   
                  </select>
                </div> 


  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Realty Name</label>
    
	         <select id="Cp_Region" name="Cp_Region" class="form-select">
            <option selected>Select</option>
                    <option value="Gajovy Realty">Gajovy Realty</option>
                   
          
                   
                  </select>
                </div> 


  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Managing DIR.</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 


	  			<?php
	  			$broker = '';
	  	$query_broker = mysqli_query($connection, "SELECT * FROM agents_info WHERE position='Broker'");
	  while($result_broker = mysqli_fetch_array($query_broker)){
		  $broker .= '<option value="'.$result_broker["laboratory_name"].'">'.$result_broker["laboratory_name"].'</option>';
	  }
	  
	  
	  ?>
	  
	  
	  
	  		    <div class="col-12">
                  <label for="inputAddress5" class="form-label">Broker</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                  
                   
                  </select>
                </div>

 
				    <div class="col-12">
                  <label for="inputAddress5" class="form-label">Realty Name</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">      
                </div>

				    <div class="col-12">
                  <label for="inputAddress5" class="form-label">Realty Name</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">      
                </div>



  <div class="col-4">
                   <label for="inputAddress5" class="form-label">DP %</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">DP Amt</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 


  <div class="col-4">
                   <label for="inputAddress5" class="form-label">DP Term</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Monthly DP</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">LA Amt</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">LA Interest</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
<label for="inputAddress5" class="form-label">LA Terms</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Monthly Amort</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Mode of Pmt</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Pmt Status</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
<label for="inputAddress5" class="form-label">First Dp Sched</label>
              <input type="date" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 

  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Full Dp Date</label>
              <input type="date" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
               
             
<hr>
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">HTO Date</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">% Hse Completion</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Hse/Unit Status</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Fin. Type</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">Coll Eff.</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-4">
                   <label for="inputAddress5" class="form-label">% of Pmt</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-6">
                   <label for="inputAddress5" class="form-label">Loan Approval Stat</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 
  <div class="col-6">
                   <label for="inputAddress5" class="form-label">Docs For Compliance to Bank</label>
              <input type="text" name="Agent_Region" class="form-control" id="Cp_Region" placeholder="">
                </div> 




                <div class="text-center">
                  <button name="Agent_addBtn" type="submit" class="btn btn-primary">Submit</button>
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


   <script src="../vendor/jquery/jquery.min.js"></script>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function() {
		
		
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "appoint_code")
   {
    result = 'customer_name';
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
				
		
		
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "Cp_sonum")
   {
    result = 'cp_proj_desc';
   }
  
   $.ajax({
    url:"../includes/fetch_realestate.php",
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