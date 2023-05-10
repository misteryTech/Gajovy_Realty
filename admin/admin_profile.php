<?php
include("header.php");
include("topnav.php");
include("sidebar.php");
?>



<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

					    		<?php 
					$query_profile=("SELECT * FROM administrator_tbl WHERE admin_id='$admin_id'");
						$query_result = mysqli_query($connection,$query_profile);
					    while($row_admin = mysqli_fetch_array($query_result)){
							$admin_fullname = $row_admin['admin_firstname'].' '.$row_admin['admin_lastname'];
						
					?>
			
			
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../picture/<?=$row_admin['admin_profile']?>" alt="Profile" class="rounded-circle">
				
				
				
              <h2><?php echo $admin_fullname; ?></h2>
              <h3><?php echo $row_admin['admin_account_type']?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $admin_fullname; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Gajovy Realestate</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">Administrator</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_admin['admin_mobileno'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_admin['admin_email'];?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../includes/code.php" method="post" enctype="multipart/form-data">
					  
					  
					
					  
					  
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
						  
						  
                        <img src="../picture/<?=$row_admin['admin_profile']?>" alt="Profile">
						  
						
						  
                        <div class="pt-2">
							 <input type="text" value="<?php echo $admin_id; ?>" name="admin_id" hidden="">
                        <input id="Admin_profilepic" name="Admin_profilepic" type="file" >
                
							
                      
							
							 <button type="submit" name="AdminUpdateBtnPic" class="btn btn-primary"  title="Add my profile image"> <i class="bi bi-upload"></i></button>
             
                        </div>
                      </div>
                    </div>
					  
					</form>
	   <form action="../includes/code.php" method="post" >
		    <input type="text" value="<?php echo $admin_id; ?>" name="admin_id" hidden="">
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Firstname</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_firstname" type="text" class="form-control" id="fullName" value="<?php echo $row_admin['admin_firstname']; ?>">
                      </div>
                    </div>
					  	  
					  <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Middlename</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_middlename" type="text" class="form-control" id="fullName" value="<?php echo $row_admin['admin_middlename']; ?>">
                      </div>
                    </div>
					  <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Lastname</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_lastname" type="text" class="form-control" id="fullName" value="<?php echo $row_admin['admin_lastname']; ?>">
                      </div>
                    </div>

               

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Birthdate</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_birthdate" type="date" class="form-control" id="company" value="<?php echo $row_admin['admin_birthdate']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-control" name="admin_gender" id="gender">
						  	<option value="<?php echo $row_admin['admin_gender']; ?>"><?php echo $row_admin['admin_gender']; ?></option>
						  	<option value="Male">Male</option>
						  	<option value="Female">Female</option>
						  
						  
						  </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_mobileno" type="text" class="form-control" id="Phone" value="<?php echo $row_admin['admin_mobileno']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="admin_email" type="email" class="form-control" id="Email" value="<?php echo $row_admin['admin_email']; ?>">
                      </div>
                    </div>

           

                  
                    <div class="text-center">
                      <button type="submit" name="AdminBtn" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="../includes/code.php" method="POST">
	    <input type="text" value="<?php echo $admin_id; ?>" name="admin_id" hidden="">
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9"> 
                        <input name="checkpassword" type="password" placeholder="need to enhance detect wrong password" class="form-control" id="checkPassword">
                      </div>
						
					
                    </div>
                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="New_Password" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>  
					
					  

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" placeholder="ajax select if same password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name="btnChangePass" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>
     <?php
						}
							?>
        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

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
