<?php 

function register_user()
{
	global $connection;
	if (isset($_POST['submit'])) 
			{
				$firstname=$_POST['u_fname'];
				$lastname=$_POST['u_lname'];
				$username=$_POST['u_username'];
				$password=$_POST['u_password'];
				$email=$_POST['u_email'];
				$role=$_POST['u_role'];
				$gender=$_POST['u_gender'];

				$firstname=mysqli_real_escape_string($connection,$firstname);
				$lastname=mysqli_real_escape_string($connection,$lastname);
				$username=mysqli_real_escape_string($connection,$username);
				$password=md5(mysqli_real_escape_string($connection,$password));
				$email=mysqli_real_escape_string($connection,$email);
				$role=mysqli_real_escape_string($connection,$role);
				$gender=mysqli_real_escape_string($connection,$gender);
	
				$insert_user_query="INSERT INTO user (u_username, u_password, u_email, u_type) 
										VALUES(
										    '$username',
										    '$password',
										    '$email',
										    '$role'
										  )";
				if(mysqli_query($connection,$insert_user_query))
				{
					$id=mysqli_insert_id($connection);				
					$insert_userdetails_query="INSERT INTO user_details (u_id, u_lname, u_fname, u_gender) 
											VALUES(
											    '$id',
											    '$lastname',
											    '$firstname',
											    '$gender'
											  )";
					$insert_userdetails_result=mysqli_query($connection,$insert_userdetails_query);
					if(!$insert_userdetails_result)
					{
						 die("no result".mysqli_error($connection));
					}
					else
					{
						echo "REGISTRATION COMPLETE";
					}
				}
				else
				{
					die("no result".mysqli_error($connection));
				}
			}

}
function login_user()
{
	global $connection;
	if (isset($_POST['submit'])) 
			{
				$username=$_POST['u_username'];
				$password=$_POST['u_password'];
				$db_username="";
				$db_password="";
				$username=mysqli_real_escape_string($connection,$username); 
				$password=mysqli_real_escape_string($connection,$password);

				$login_query="SELECT * 
								FROM
								  USER 
								WHERE u_username = '$username' 
								  AND u_password = '$password' ";
				$login_result=mysqli_query($connection,$login_query);
				if(!$login_result)
				{
					 die("no result".mysqli_error($connection));
				}

				while($row=mysqli_fetch_assoc($login_result))
				{
					$db_userid=$row['u_id'];
					$db_username=$row['u_username'];
					$db_password=$row['u_password'];
					$db_role=$row['u_type'];
				}

				if($db_username===$username && $db_password===$password)
				{
					echo "login success <br>";
					if ($db_role==='employer') 
					{					
						header("Location:index-employer.php");

					}
					else
					{				
						header("Location:index-candidate.php");
					}
				}
				else
				{
					echo "WRONG PASSWORD/USERNAME";
				}
				
			}
			
}
function post_job()
{
	global $connection;
	if (isset($_POST['submit'])) 
			{
				$u_id="1";
				$jobtitle=$_POST['j_jobtitle'];
				$jobcountry=$_POST['j_country'];
				$jobdistrictlocation=$_POST['j_districtlocation'];
				$jtype=$_POST['j_type'];
				$jcategory=$_POST['j_category'];
				$jtags=$_POST['j_tags'];
				$jdescription=$_POST['j_description'];
				$jworkingstatus=$_POST['j_workingstatus'];
				$jmainduties=$_POST['j_mainduties'];
				$jcookingskills=$_POST['j_cookingskills'];
				$jotherskills=$_POST['j_otherskills'];
				$jrequired=$_POST['j_requiredlanguages'];
				$japplicationemail=$_POST['j_applicationemail'];
				$jemployertype=$_POST['j_employertype'];
				$jnationality=$_POST['j_nationality'];
				$jfamily=$_POST['j_familytype'];
				$jstartdate=$_POST['j_startdate'];
				$jmonthlysalary=$_POST['j_monthlysalary'];

				
				$jobtitle= mysqli_real_escape_string($connection,$jobtitle);			
				$jobcountry= mysqli_real_escape_string($connection,$jobcountry);
				$jobdistrictlocation= mysqli_real_escape_string($connection,$jobdistrictlocation);
				$jtype= mysqli_real_escape_string($connection,$jtype);
				$jcategory= mysqli_real_escape_string($connection,$jcategory);
				$jtags= mysqli_real_escape_string($connection,$jtags);
				$jdescription= mysqli_real_escape_string($connection,$jdescription);
				$jworkingstatus= mysqli_real_escape_string($connection,$jworkingstatus);
				$jmainduties= mysqli_real_escape_string($connection,$jmainduties);
				$jcookingskills= mysqli_real_escape_string($connection,$jcookingskills);
				$jotherskills= mysqli_real_escape_string($connection,$jotherskills);
				$jrequired= mysqli_real_escape_string($connection,$jrequired);
				$japplicationemail= mysqli_real_escape_string($connection,$japplicationemail);
				$jemployertype= mysqli_real_escape_string($connection,$jemployertype);
				$jnationality= mysqli_real_escape_string($connection,$jnationality);
				$jfamily= mysqli_real_escape_string($connection,$jfamily);
				$jstartdate= mysqli_real_escape_string($connection,$jstartdate);
				$jmonthlysalary= mysqli_real_escape_string($connection,$jmonthlysalary);
	
				$insert_jobdescription_query="INSERT INTO job_description (
																	u_id,
																	j_jobtitle,
																	j_country,
																	j_districtlocation,
																	j_type,
																	j_category,
																	j_tags,
																	j_description,
																	j_workingstatus,
																	j_mainduties,
																	j_cookingskill,
																	j_otherskills,
																	j_requiredlanguages,
																	j_applicationemail,
																	j_employertype,
																	j_nationality,
																	j_familytype,
																	j_startdate,
																	j_monthlysalary
																	) 
																	VALUES
																	(
																		'$u_id',
																		'$jobtitle',
																		'$jobcountry',
																		'$jobdistrictlocation',
																		'$jtype',
																		'$jcategory',
																		'$jtags',
																		'$jdescription',
																		'$jworkingstatus',
																		'$jmainduties',
																		'$jcookingskills',
																		'$jotherskills',
																		'$jrequired',
																		'$japplicationemail',
																		'$jemployertype',
																		'$jnationality',
																		'$jfamily',
																		'$jstartdate',
																		'$jmonthlysalary'
																	) ";  
				
				
				$insert_jobdescription_result=mysqli_query($connection,$insert_jobdescription_query);
				if(!$insert_jobdescription_result)
				{
					die("no result".mysqli_error($connection));
				}
				else
				{
					echo "POST SUCCESSFULLY";
				}
			}

}
function submit_profile()
{
	global $connection;
	if (isset($_POST['submit'])) 
			{
				$u_id="1";
				$resumecategory=$_POST['up_category'];
				$upemail=$_POST['up_email'];
				$nationality=$_POST['up_nationality'];
				$address=$_POST['up_address'];
				$age=$_POST['up_age'];
				$maritalstatus=$_POST['up_maritalstatus'];
				$mobile=$_POST['up_mobile'];
				$telephone=$_POST['up_telephone'];
				$children=$_POST['up_children'];
				$languages=$_POST['up_languages'];
				$picture=$_POST['up_picture'];
				$preferedworklocation=$_POST['upi_preferedworklocation'];
				$professionaltitle=$_POST['upi_professionaltitle'];
				$mainskills=$_POST['upi_mainskills'];
				$yearsofexp=$_POST['upi_yearsofexp'];
				$expsummary=$_POST['upi_expsummary'];
				$cookingskills=$_POST['upi_cookingskills'];
				$skillsexp=$_POST['upi_skillsexp'];
				$otherskills=$_POST['upi_otherskills'];
				$workingstatus=$_POST['upi_workingstatus'];
				$availability=$_POST['upi_availability'];



				$resumecategory=mysqli_real_escape_string($connection,$resumecategory);
				$upemail=mysqli_real_escape_string($connection,$upemail);
				$nationality=mysqli_real_escape_string($connection,$nationality);
				$address=md5(mysqli_real_escape_string($connection,$address));
				$age=mysqli_real_escape_string($connection,$age);
				$maritalstatus=mysqli_real_escape_string($connection,$maritalstatus);
				$mobile=mysqli_real_escape_string($connection,$mobile);
				$telephone=mysqli_real_escape_string($connection,$telephone);
				$children=mysqli_real_escape_string($connection,$children);
				$languages=mysqli_real_escape_string($connection,$languages);
				$picture=mysqli_real_escape_string($connection,$picture);	
				$preferedworklocation=mysqli_real_escape_string($connection,$preferedworklocation);
				$professionaltitle=mysqli_real_escape_string($connection,$professionaltitle);
				$mainskills=mysqli_real_escape_string($connection,$mainskills);
				$yearsofexp=mysqli_real_escape_string($connection,$yearsofexp);
				$expsummary=mysqli_real_escape_string($connection,$expsummary);
				$cookingskills=mysqli_real_escape_string($connection,$cookingskills);
				$skillsexp=mysqli_real_escape_string($connection,$skillsexp);
				$otherskills=mysqli_real_escape_string($connection,$otherskills);
				$workingstatus=mysqli_real_escape_string($connection,$workingstatus);
				$availability=mysqli_real_escape_string($connection,$availability);

				$insert_user_personal_information_query="INSERT INTO user_personal_information (
																	  u_id,
																	  up_category,
																	  up_email,
																	  up_nationality,
																	  up_address,
																	  up_age,
																	  up_maritalstatus,
																	  up_mobile,
																	  up_telephone,
																	  up_children,
																	  up_languages,
																	  up_picture
																	) 
																	VALUES
																	  (
																	  '$u_id',
																	  '$resumecategory',
																	  '$upemail',
																	  '$nationality',
																	  '$address',
																	  '$age',
																	  '$maritalstatus',
																	  '$mobile',
																	  '$telephone',
																	  '$children',
																	  '$languages',
																	  '$picture')";
				if(mysqli_query($connection,$insert_user_personal_information_query))
				{
					$id=mysqli_insert_id($connection);				
					$insert_user_professional_information_query="INSERT INTO user_professional_information (
																  u_id,
																  upi_preferedworklocation,
																  upi_professionaltitle,
																  upi_mainskills,
																  upi_yearsofexp,
																  upi_expsummary,
																  upi_cookingskills,
																  upi_skillsexp,
																  upi_otherskills,
																  upi_workingstatus,
																  upi_availability
																) 
																VALUES
																  (
																    '$u_id',
																    '$preferedworklocation',
																    '$professionaltitle',
																    '$mainskills',
																    '$yearsofexp',
																    '$expsummary',
																    '$cookingskills',
																    '$skillsexp',
																    '$otherskills',
																    '$workingstatus',
																    '$availability'
																  ) " ;

					$insert_user_professional_information_result=mysqli_query($connection,$insert_user_professional_information_query);
					if(!$insert_user_professional_information_result)
					{
						 die("no result".mysqli_error($connection));
					}
					else
					{
						echo "SUBMIT PROFILE SUCCESS";
					}
				}
				else
				{
					die("no result".mysqli_error($connection));
				}
			}
		
}

 ?>