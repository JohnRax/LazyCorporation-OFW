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
				$password=mysqli_real_escape_string($connection,$password);
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
						$_SESSION['u_id']=$id;
						$_SESSION['u_username']=$username;
						$_SESSION['u_role']=$role;
						if($role=="employer")
						{
							echo"<script>
									alert('Saved!');
									location.href = 'index.php';
							</script>";
						}
						else
						{
							echo"<script>
									alert('Saved!');
									location.href = 'index-candidate.php?source=submitprofile';
							</script>";
						}
							session_start();
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
					$_SESSION['u_id']=$db_userid;
					$_SESSION['u_username']=$db_username;
					$_SESSION['u_role']=$db_role;
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
				$u_id=$_SESSION['u_id'];
				$jobtitle=$_POST['j_jobtitle'];
				$jobcountry=$_POST['j_country'];
				$jobdistrictlocation=$_POST['j_districtlocation'];
				$jtype=$_POST['j_type'];
				$jcategory=$_POST['j_category'];
				
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

				if( isset($_POST['up_languages']) && !empty($_POST['up_languages']) ) 
				{ 
				    $languages = implode(', ', $_POST['up_languages']);
				   
				}
				else
				{
					$languages="none";
				}

			

				$u_id=$_SESSION['u_id'];
				$resumecategory=$_POST['up_category'];
				$upemail=$_POST['up_email'];
				$nationality=$_POST['up_nationality'];
				$address=$_POST['up_address'];
				$age=$_POST['up_age'];
				$maritalstatus=$_POST['up_maritalstatus'];
				$mobile=$_POST['up_mobile'];
				$telephone=$_POST['up_telephone'];
				$children=$_POST['up_children'];
				$picture=$_POST['up_picture'];
				$preferedworklocation=$_POST['upi_preferedworklocation'];
				$professionaltitle=$_POST['upi_professionaltitle'];
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
				$address=mysqli_real_escape_string($connection,$address);
				$age=mysqli_real_escape_string($connection,$age);
				$maritalstatus=mysqli_real_escape_string($connection,$maritalstatus);
				$mobile=mysqli_real_escape_string($connection,$mobile);
				$telephone=mysqli_real_escape_string($connection,$telephone);
				$children=mysqli_real_escape_string($connection,$children);
				$languages=mysqli_real_escape_string($connection,$languages);
				$picture=mysqli_real_escape_string($connection,$picture);	
				$preferedworklocation=mysqli_real_escape_string($connection,$preferedworklocation);
				$professionaltitle=mysqli_real_escape_string($connection,$professionaltitle);
				
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
					echo"<script>
							alert('Saved!');
							location.href = 'index-candidate.php';
						</script>";
				}
				
			}
		
}
function search_job()
{
	global $connection;
	$search_job_query="SELECT * from job_description";
    $search_job_result=mysqli_query($connection,$search_job_query);

    while($row=mysqli_fetch_assoc($search_job_result))
    {
        $jobid=$row['j_id'];
        $jobtitle=$row['j_jobtitle'];
        $employertype=$row['j_employertype'];
        $joblocation=$row['j_country'];
        $jobtype=$row['j_type'];
        $dateposted=$row['j_dateposted'];

        echo "<li id='job_listing-100053756' class='post-100053756 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_region-hong-kong job_listing_category-helper job_listing_type-full-time job_listing_tag-baby-care job_listing_tag-cooking job_listing_tag-housekeeping candidate_language2-english employer_nationality-chinese-family family_type-couple-1-kid working_statut-any-situation job-type-full-time' data-title='Looking for a helper to start right away at Direct Employer' data-href='https://www.helperplace.com/job/direct-employer-2-looking-for-a-helper-to-start-right-away' style='visibility: visible;'>";
        echo "<br>";
        echo "<a href='index.php?jobid=".$jobid."' class='job_listing-clickbox'></a>";
        echo "<div class='job_listing-about'>";
        echo "<div class='job_listing-position job_listing__column'>";
        echo "<h3 class='job_listing-title'>".$jobtitle."</h3>";
        echo "<div class='job_listing-company'>";
        echo "<strong>".$employertype."</strong>  ";
        echo "</div>";
        echo "</div>"
;        echo "<div class='job_listing-location job_listing__column'>";   
        echo $joblocation;                   
        echo "</div>";
        echo "<ul class='job_listing-meta job_listing__column'>";
        echo "<li class='job_listing-type job-type full-time'>".$jobtype."</li>";
        echo "<li class='job_listing-date'>".$dateposted."</li>";
        echo "</ul>";
        echo "</div>";                          
        echo "</li>";

    }
}

function search_candidate()
{
	global $connection;
	$search_candidate_query="SELECT 
  a.`u_fname`,
  a.`u_lname`,
  b.`up_category`,
  b.`up_address`,
  c.`upi_yearsofexp` 
FROM
  `user_details` AS a 
   JOIN `user_personal_information` AS b 
    ON b.u_id = a.u_id 
   JOIN `user_professional_information` AS c 
    ON a.u_id = c.u_id ";
    $search_candidate_result=mysqli_query($connection,$search_candidate_query);

    while($row=mysqli_fetch_assoc($search_candidate_result))
    {
        $fname=$row['u_fname'];
        $lname=$row['u_lname'];
        $category=$row['up_category'];
        $address=$row['up_address'];
        $yearsofexp=$row['upi_yearsofexp'];

        echo "<li id='resume-100053592' class='resume post-100053592 type-resume status-publish hentry resume_region-hong-kong resume_category-helper resume_skill-child-care resume_skill-cooking resume_skill-housekeeping candidate_language-english candidate_language-filipino candidate_nationality-filipino cooking_requirement2-chinese cooking_requirement2-western helper_requirement2-child-care helper_requirement2-cooking helper_requirement2-housekeeping other_skill2-baking other_skill2-gardening other_skill2-housework other_skill2-sewing other_skill2-tutoring working_statut2-termination-due-to-relocation' data-longitude='114.109497' data-latitude='22.396428' data-title='Jenalyn B. - Domestic Helper' data-href='https://www.helperplace.com/resume/jenalyn-ppbvsoeh-domestic-helper-hong-kong' style='visibility: visible;'>";
    
       echo"<a href='https://www.helperplace.com/resume/jenalyn-ppbvsoeh-domestic-helper-hong-kong' class='resume-clickbox'></a>";

	
	echo"
		<div class='resume-about'>
			<div class='resume-candidate resume__column'>
				<h3 class='resume-title'>".$lname.",".$fname."</h3>
				<div class='resume-candidate-title'>
					<strong>".$category."</strong>
				</div>
			</div>
			<div class='v_resume_location resume-location resume__column'>
				<span class='candidate-location'>Hong Kong</span> <span class='total_exp'>>".$yearsofexp."</span>
			</div>
			<ul class='resume-meta resume__column'>
				<li class='resume-category'>Domestic Helper</li>
				<li class='resume-date'>Available from 15 Dec, 2017</li>
			</ul>
		</div>
	</li>";



    }

}
	    
 ?>