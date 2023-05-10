<?php
include('connection.php');

//Admin Info Btn
if(isset($_POST["AdminBtn"])){
			$admin_ids = mysqli_real_escape_string($connection , $_POST['admin_id']);
			$Admin_firstname = mysqli_real_escape_string($connection , $_POST['admin_firstname']);
			$Admin_middlename = mysqli_real_escape_string($connection , $_POST['admin_middlename']);
			$Admin_lastname = mysqli_real_escape_string($connection , $_POST['admin_lastname']);
			$Admin_birthdate = mysqli_real_escape_string($connection , $_POST['admin_birthdate']);
			$Admin_gender = mysqli_real_escape_string($connection , $_POST['admin_gender']);
			$Admin_mobileno = mysqli_real_escape_string($connection , $_POST['admin_mobileno']);
			$Admin_email = mysqli_real_escape_string($connection , $_POST['admin_email']);
		
	
	
	
   $update_admin_info = "UPDATE administrator_tbl SET `admin_firstname`='$Admin_firstname',`admin_middlename`='$Admin_middlename',`admin_lastname`='$Admin_lastname',`admin_birthdate`='$Admin_birthdate',`admin_gender`='$Admin_gender',`admin_mobileno`='$Admin_mobileno',`admin_email`='$Admin_email' WHERE `admin_id`='$admin_ids'";
	 $update_profile = mysqli_query($connection, $update_admin_info);
	
	
	echo '<script>alert("Admin Profile Updated")</script>';

echo"<script>window.location.href='../admin/admin_profile.php';</script>";

}
//Admin Picture Btn
if(isset($_POST["AdminUpdateBtnPic"])){
		$admin_id = mysqli_real_escape_string($connection , $_POST['admin_id']);
		$admin_picture_name = $_FILES['Admin_profilepic']['name'];
        $admin_picture_tmp = $_FILES['Admin_profilepic']['tmp_name'];

        $query_pictures = "UPDATE administrator_tbl SET `admin_profile`='$admin_picture_name' WHERE `admin_id`='$admin_id'";

        $result_picture = mysqli_query($connection, $query_pictures);

        if($result_picture){
            move_uploaded_file($admin_picture_tmp, "../picture/".$admin_picture_name);
        }
	echo '<script>alert("Profile Picture Updated")</script>';

echo"<script>window.location.href='../admin/admin_profile.php';</script>";
}



//Admin Picture Btn
if(isset($_POST["BtnSaveRealestate"])){

			$sales_Order = mysqli_real_escape_string($connection , $_POST['sales_Order']);
		$project_Desc = mysqli_real_escape_string($connection , $_POST['project_Desc']);
		$blk_Lot = mysqli_real_escape_string($connection , $_POST['blk_Lot']);
		$lot_Area = mysqli_real_escape_string($connection , $_POST['lot_Area']);
		$floor_area = mysqli_real_escape_string($connection , $_POST['floor_area']);
		$area = mysqli_real_escape_string($connection , $_POST['area']);
		$category = mysqli_real_escape_string($connection , $_POST['category']);
		$realestate_picture_name = $_FILES['realestate_Pic']['name'];
        $realestate_picture_tmp = $_FILES['realestate_Pic']['tmp_name'];

      $RealEsate_query="INSERT INTO realestate_tbl (`so_number`,`projec_descrip`,`blk_lot`,`lot_area`,`floor_area`,`area`,`real_estate_pic`,`category`) VALUES ('$sales_Order','$project_Desc','$blk_Lot','$lot_Area','$floor_area','$area','$realestate_picture_name','$category')";
	
		$result_realestate = mysqli_query($connection, $RealEsate_query) or die(mysqli_error($connection));
	
	
	
	  if($result_realestate){
            move_uploaded_file($realestate_picture_tmp, "../picture/".$realestate_picture_name);
        }
	echo '<script>alert("Realestate Inserted Successfully!")</script>';
echo"<script>window.location.href='../admin/admin_dashboard.php';</script>";
	
	
}



if(isset($_POST["btnChangePass"])){
		$admin_id = mysqli_real_escape_string($connection , $_POST['admin_id']);
		$newpassword = mysqli_real_escape_string($connection , $_POST['New_Password']);
	

        $query_password = "UPDATE administrator_tbl SET `admin_password`='$newpassword' WHERE `admin_id`='$admin_id'";

        $change_password = mysqli_query($connection, $query_password);

	echo '<script>alert("Admin Password Updated")</script>';

echo"<script>window.location.href='../admin/admin_profile.php';</script>";
}


//Client Add Form
if(isset($_POST["Client_addBtn"])){
			$CP_firstname = mysqli_real_escape_string($connection , $_POST['Cp_Firstname']);
			$CP_lastname = mysqli_real_escape_string($connection , $_POST['Cp_Lastname']);
			$CP_age = mysqli_real_escape_string($connection , $_POST['Cp_Age']);
			$CP_Age_bracket = mysqli_real_escape_string($connection , $_POST['Cp_Age_bracket']);
			$CP_Gender = mysqli_real_escape_string($connection , $_POST['Cp_Gender']);
		$CP_marital_status = mysqli_real_escape_string($connection , $_POST['Cp_Marital_status']);
			$CP_mobileno = mysqli_real_escape_string($connection , $_POST['Cp_mobileno']);
			$CP_email = mysqli_real_escape_string($connection , $_POST['Cp_Email']);
			$CP_nationality = mysqli_real_escape_string($connection , $_POST['Cp_Nationality']);
			$CP_country = mysqli_real_escape_string($connection , $_POST['Cp_Country']);
			$CP_region = mysqli_real_escape_string($connection , $_POST['Cp_Region']);
			$CP_province = mysqli_real_escape_string($connection , $_POST['Cp_Province']);
			$CP_proffesion = mysqli_real_escape_string($connection , $_POST['Cp_Profession']);
			$CP_employment= mysqli_real_escape_string($connection , $_POST['Cp_Employment']);
		$CP_employment_g = mysqli_real_escape_string($connection , $_POST['Cp_Employment_group']);
	$CP_employment_c = mysqli_real_escape_string($connection , $_POST['Cp_Employment_country']);
	
$Add_Client_query="INSERT INTO clients_info (`CUST_Fname`,`CUST_Lname`,`CUST_Age`,`CUST_Age_bracket`,`CUST_Gender`,`CUST_Mobileno`,`CUST_Email_ad`,`CUST_Marital_status`,`CUST_Province`,`CUST_Country`,`CUST_Region`,`CUST_Nationality`,`CUST_Profession`,`CUST_Emp_country`,`CUST_Per_Employment_Group`,`CUST_Employment`) VALUES ('$CP_firstname','$CP_lastname','$CP_age','$CP_Age_bracket','$CP_Gender','$CP_mobileno','$CP_email','$CP_marital_status','$CP_province','$CP_country','$CP_region','$CP_nationality','$CP_proffesion','$CP_employment_c','$CP_employment_g','$CP_employment')";
	mysqli_query($connection, $Add_Client_query) or die(mysqli_error($connection));
	
	echo '<script>alert("Client Registered!")</script>';
  	echo"<script>window.location.href='../admin/Client_Regform.php';</script>";

}


//Agent AddForm
if(isset($_POST["Agent_addBtn"])){
			$Agent_firstname = mysqli_real_escape_string($connection , $_POST['Agent_Firstname']);
			$Agent_lastname = mysqli_real_escape_string($connection , $_POST['Agent_Lastname']);
			$Agent_age = mysqli_real_escape_string($connection , $_POST['Agent_Age']);
			$Agent_Age_bracket = mysqli_real_escape_string($connection , $_POST['Agent_Age_bracket']);
			$Agent_Gender = mysqli_real_escape_string($connection , $_POST['Agent_Gender']);
		$Agent_marital_status = mysqli_real_escape_string($connection , $_POST['Agent_Marital_status']);
			$Agent_mobileno = mysqli_real_escape_string($connection , $_POST['Agent_mobileno']);
			$Agent_email = mysqli_real_escape_string($connection , $_POST['Agent_Email']);
			$Agent_nationality = mysqli_real_escape_string($connection , $_POST['Agent_Nationality']);
			$Agent_country = mysqli_real_escape_string($connection , $_POST['Agent_Country']);
			$Agent_region = mysqli_real_escape_string($connection , $_POST['Agent_Region']);
			$Agent_province = mysqli_real_escape_string($connection , $_POST['Agent_Province']);
			$Agent_position = mysqli_real_escape_string($connection , $_POST['position']);
		
	
$Add_Agents_query="INSERT INTO agents_info (`CUST_Fname`,`CUST_Lname`,`CUST_Age`,`CUST_Age_bracket`,`CUST_Gender`,`CUST_Mobileno`,`CUST_Email_ad`,`CUST_Marital_status`,`CUST_Province`,`CUST_Country`,`CUST_Region`,`CUST_Nationality`,`position`) VALUES ('$Agent_firstname','$Agent_lastname','$Agent_age','$Agent_Age_bracket','$Agent_Gender','$Agent_mobileno','$Agent_email','$Agent_marital_status','$Agent_province','$Agent_country','$Agent_region','$Agent_nationality','$Agent_position')";
	
	
	mysqli_query($connection, $Add_Agents_query) or die(mysqli_error($connection));
	
	echo '<script>alert("Agent Registered!")</script>';
  	echo"<script>window.location.href='../admin/Agent_Regform.php';</script>";

}

//Broker AddForm
if(isset($_POST["Broker_addBtn"])){
			$Agent_firstname = mysqli_real_escape_string($connection , $_POST['Agent_Firstname']);
			$Agent_lastname = mysqli_real_escape_string($connection , $_POST['Agent_Lastname']);
			$Agent_age = mysqli_real_escape_string($connection , $_POST['Agent_Age']);
			$Agent_Age_bracket = mysqli_real_escape_string($connection , $_POST['Agent_Age_bracket']);
			$Agent_Gender = mysqli_real_escape_string($connection , $_POST['Agent_Gender']);
		$Agent_marital_status = mysqli_real_escape_string($connection , $_POST['Agent_Marital_status']);
			$Agent_mobileno = mysqli_real_escape_string($connection , $_POST['Agent_mobileno']);
			$Agent_email = mysqli_real_escape_string($connection , $_POST['Agent_Email']);
			$Agent_nationality = mysqli_real_escape_string($connection , $_POST['Agent_Nationality']);
			$Agent_country = mysqli_real_escape_string($connection , $_POST['Agent_Country']);
			$Agent_region = mysqli_real_escape_string($connection , $_POST['Agent_Region']);
			$Agent_province = mysqli_real_escape_string($connection , $_POST['Agent_Province']);
		
	
$Add_Agents_query="INSERT INTO agents_info (`CUST_Fname`,`CUST_Lname`,`CUST_Age`,`CUST_Age_bracket`,`CUST_Gender`,`CUST_Mobileno`,`CUST_Email_ad`,`CUST_Marital_status`,`CUST_Province`,`CUST_Country`,`CUST_Region`,`CUST_Nationality`) VALUES ('$Agent_firstname','$Agent_lastname','$Agent_age','$Agent_Age_bracket','$Agent_Gender','$Agent_mobileno','$Agent_email','$Agent_marital_status','$Agent_province','$Agent_country','$Agent_region','$Agent_nationality')";
	
	
	mysqli_query($connection, $Add_Agents_query) or die(mysqli_error($connection));
	
	echo '<script>alert("Agent Registered!")</script>';
  	echo"<script>window.location.href='../admin/Agent_Regform.php';</script>";

}




//login form
if(isset($_POST["BtnLogin"])){
	$username = mysqli_escape_string($connection, $_POST['username']);
    $password = mysqli_escape_string($connection, $_POST['password']);
	


    $check_email = mysqli_query($connection,"SELECT * FROM administrator_tbl WHERE `admin_email` = '$username' AND `admin_password`='$password'");
    $check_email_row = mysqli_num_rows($check_email);
  
	if($check_email_row > 0 ){
		
		
		
		while($row = mysqli_fetch_assoc($check_email)){
			$administrator_id = $row["admin_id"];
			
			
			$db_password = $row["admin_password"];
			
			
			$db_account_type = $row["admin_account_type"];
			
			if($password == $db_password){
				session_start();
				
				$_SESSION["admin_id"] = $administrator_id;
				
				if($db_account_type == "Admin"){
					echo "<script>window.location.href='../admin/admin_dashboard.php';</script>";
				}
				
			}
		}
		
	}else{
			echo '<script type="text/javascript">
                      alert("Check Username and Password");
					  location="../login.php";
                           </script>';
		
	}
	
	
			
}
?>