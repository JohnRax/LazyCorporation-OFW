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
									alert('Registration Complete!');
									location.href = 'index.php';
							</script>";
						}
						else
						{
							echo"<script>
									alert('Registration Complete!');
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
								  user 
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
					echo"<script>
							alert('Your credentials are incorrect');
						</script>";
				}
				
			}
			
}
function post_job()
{
	global $connection;
	if (isset($_POST['submit'])) 
			{




				if( isset($_POST['j_mainduties']) && !empty($_POST['j_mainduties']) ) 
				{ 
				    $jmainduties = implode(', ', $_POST['j_mainduties']);
				    
				   
				}
				else
				{
					$jmainduties="none";
					
				}
				if( isset($_POST['j_cookingskills']) && !empty($_POST['j_cookingskills']) ) 
				{ 
				    $jcookingskills = implode(', ', $_POST['j_cookingskills']);
				    
				   
				}
				else
				{
					$jcookingskills="none";
					
				}
				if( isset($_POST['j_otherskills']) && !empty($_POST['j_otherskills']) ) 
				{ 
				    $jotherskills = implode(', ', $_POST['j_otherskills']);
				    
				   
				}
				else
				{
					$jotherskills="none";
					
				}
					if( isset($_POST['j_requiredlanguages']) && !empty($_POST['j_requiredlanguages']) ) 
				{ 
				    $jrequired = implode(', ', $_POST['j_requiredlanguages']);
				    
				   
				}
				else
				{
					$jrequired="none";
					
				}
				$u_id=$_SESSION['u_id'];
				$jobtitle=$_POST['j_jobtitle'];
				$jobcountry=$_POST['j_country'];
				$jobdistrictlocation=$_POST['j_districtlocation'];
				$jtype=$_POST['j_type'];
				$jcategory=$_POST['j_category'];
				$jdescription=$_POST['j_description'];
				$jworkingstatus=$_POST['j_workingstatus'];
<<<<<<< HEAD
=======
				
				
			
>>>>>>> 283833f5308c77a6fe075e7cdbfe35a38a97cba7
				$japplicationemail=$_POST['j_applicationemail'];
				$jemployertype=$_POST['j_employertype'];
				$jnationality=$_POST['j_nationality'];
				$jfamily=$_POST['j_familytype'];
				$jstartdate=$_POST['j_startdate'];
				$jmonthlysalary=$_POST['j_monthlysalary'];
				$jstatus="Unapproved";

				
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
																	j_monthlysalary,
																	j_status
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
																		'$jmonthlysalary',
																		'$jstatus'
																	) ";  
				
				
				$insert_jobdescription_result=mysqli_query($connection,$insert_jobdescription_query);
				if(!$insert_jobdescription_result)
				{
					die("no result".mysqli_error($connection));
				}
				else
				{
					echo"<script>
									alert('Your Job Post has been Submited and is Pending Approval');
									location.href = 'index-employer.php';
							</script>";
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
				if( isset($_POST['upi_cookingskills']) && !empty($_POST['upi_cookingskills']) ) 
				{ 
				    $cookingskills = implode(', ', $_POST['upi_cookingskills']);
				    
				   
				}
				else
				{
					$cookingskills="none";
					
				}
				if( isset($_POST['upi_skillsexp']) && !empty($_POST['upi_skillsexp']) ) 
				{ 
				    $skillsexp = implode(', ', $_POST['upi_skillsexp']);
				    
				   
				}
				else
				{
					$skillsexp="none";
					
				}
				if( isset($_POST['upi_otherskills']) && !empty($_POST['upi_otherskills']) ) 
				{ 
				    $otherskills = implode(', ', $_POST['upi_otherskills']);
				    
				   
				}
				else
				{
					$otherskills="none";
					
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
				$workingstatus=$_POST['upi_workingstatus'];
				$availability=$_POST['upi_availability'];
				$status="Unapproved";



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
																	  up_picture,
																	  up_status
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
																	  '$picture','$status')";
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
							alert('Your Resume has been Submited and is Pending Approval');
							location.href = 'index-candidate.php';
						</script>";
				}
				
			}
		
}

function search_candidate()
{
  global $connection;
  $search_candidate_query="SELECT
							  a.u_id, 
							  a.u_fname,
							  a.u_lname,
							  b.up_category,
							  b.up_address,
							  c.upi_yearsofexp
							FROM
							  user_details AS a 
							   JOIN user_personal_information AS b 
							    ON b.u_id = a.u_id 
							   JOIN user_professional_information AS c 
							    ON a.u_id = c.u_id ";
    $search_candidate_result=mysqli_query($connection,$search_candidate_query);

    while($row=mysqli_fetch_assoc($search_candidate_result))
    {
    	$u_id=$row['u_id'];
        $fname=$row['u_fname'];
        $lname=$row['u_lname'];
        $category=$row['up_category'];
        $address=$row['up_address'];
        $yearsofexp=$row['upi_yearsofexp'];

        echo "<li id='resume-100053592' class='resume post-100053592 type-resume status-publish hentry resume_region-hong-kong resume_category-helper resume_skill-child-care resume_skill-cooking resume_skill-housekeeping candidate_language-english candidate_language-filipino candidate_nationality-filipino cooking_requirement2-chinese cooking_requirement2-western helper_requirement2-child-care helper_requirement2-cooking helper_requirement2-housekeeping other_skill2-baking other_skill2-gardening other_skill2-housework other_skill2-sewing other_skill2-tutoring working_statut2-termination-due-to-relocation' data-longitude='114.109497' data-latitude='22.396428' data-title='Jenalyn B. - Domestic Helper' data-href='https://www.helperplace.com/resume/jenalyn-ppbvsoeh-domestic-helper-hong-kong' style='visibility: visible;'>";
    
       echo"<a href='index.php?profile_id=".$u_id."' class='resume-clickbox'></a>";

	
			echo"
				<div class='resume-about'>
					<div class='resume-candidate resume__column'>
						<h3 class='resume-title'>".$lname.",".$fname."</h3>
						<div class='resume-candidate-title'>
							<strong>".$category."</strong>
						</div>
					</div>
					<div class='v_resume_location resume-location resume__column'>
						<span class='candidate-location'>Hong Kong</span> <span class='total_exp'>".$yearsofexp." Year(s) of Experience</span>
					</div>
					<ul class='resume-meta resume__column'>
						<li class='resume-category'>Domestic Helper</li>
						<li class='resume-date'>Available from 15 Dec, 2017</li>
					</ul>
				</div>
			</li>";





    }



}
function view_candidate ()
{
	
	global $connection;
	if (isset($_GET['profile_id'])) 
	{
			   $id=$_GET['profile_id'];
			  
			$view_candidate_query="SELECT 
			  a.u_id,
			  a.u_lname,
			  a.u_fname,
			  b.up_age,
			  b.up_category,
			  b.up_address,
			  b.up_languages,
			  b.up_picture,
			  b.up_nationality,

			  c.upi_availability,
			  c.upi_mainskills,
			  c.upi_expsummary,
			  c.upi_skillsexp,
			  c.upi_cookingskills,
			  c.upi_otherskills,
			  c.upi_workingstatus,
			  DATE_FORMAT(c.upi_availability,'%M %d, %Y') as availability
			FROM
		  user_details AS a 
		  JOIN user_personal_information AS b 
		    ON b.u_id = a.u_id 
		  JOIN user_professional_information AS c 
		    ON a.u_id = c.u_id where a.u_id='$id'";


		     $view_candidate_result=mysqli_query($connection,$view_candidate_query);
		    while($row=mysqli_fetch_assoc($view_candidate_result))
		    {
		        $fname=$row['u_fname'];
		        $lname=$row['u_lname'];
		        $age=$row['up_age'];
		        $category=$row['up_category'];
		        $address=$row['up_address'];
		        $languages=$row['up_languages'];
		        $nationality=$row['up_nationality'];
		        $availability=$row['availability'];
		        $mainskills=$row['upi_mainskills'];
		        $expsummary=$row['upi_expsummary'];
		        $skillsexp=$row['upi_skillsexp'];
		        $cookingskills=$row['upi_cookingskills'];
		        $otherskills=$row['upi_otherskills'];
		        $workingstatus=$row['upi_workingstatus'];
		        echo "
		            <div id='main' class='site-main'>
		            <div class='page-header'>
		            <h2 class='page-title'> ".$fname." , ".$lname."</h2>
		            <h3 class='page-subtitle'>
		            <ul>
		            <li id='jmfe-wrap-candidate_age' class='jmfe-custom-field-wrap '><age id='jmfe-label-candidate_age' class='jmfe-custom-field-label'>Age:</age> ".$age."</li><li id='jmfe-wrap-candidate_available' class='jmfe-custom-field-wrap '><strong id='jmfe-label-candidate_available' class='jmfe-custom-field-label'>Available from:</strong> ".$availability."</li>
		            <li class='job-title'>".$category."</li>
		            <li class='location'><i class='icon-location'></i> <span class='candidate-location'>".$address."</span></li>

		            </h3>
		            </div>
		            <div id='content' class='container content-area' role='main'>
		            <div class='resume-meta-top row'>
		            <div class='col-md-3 col-sm-6 col-xs-12'>
		            <aside id='jobify_widget_job_company_logo-3' class='widget widget--resume widget--resume-top jobify_widget_job_company_logo'><img class='candidate_photo' src='https://www.helperplace.com/wp-content/uploads/2017/11/59f9261189810_FB_IMG_1509499567380.jpg' alt='Photo' /></aside> </div>
		            <div class='col-md-3 col-sm-6 col-xs-12'>
		            <aside id='jmfe_widget-4' class='widget widget--resume widget--resume-top widget_jmfe_widget'><h3 class='widget-title widget-title--resume widget-title--resume-top'>Nationality</h3><li id='jmfe-custom-candidate_nationalities' class='jmfe-custom-field '>".$nationality."</li>
		            </aside>
		            <aside id='jmfe_widget-3' class='widget widget--resume widget--resume-top widget_jmfe_widget'><h3 class='widget-title widget-title--resume widget-title--resume-top'>Spoken Languages</h3><li id='jmfe-custom-candidate_languages' class='jmfe-custom-field '>".$languages."</li></aside> </div> 
		            <div class='col-md-3 col-sm-6 col-xs-12'>
		            <aside id='jobify_widget_resume_skills-2' class='widget widget--resume widget--resume-top jobify_widget_resume_skills'><h3 class='widget-title widget-title--resume widget-title--resume-top'>My Skills</h3>".$skillsexp."</aside><aside id='jobify_widget_job_share-3' class='widget widget--resume widget--resume-top jobify_widget_job_share'><h3 class='widget-title widget-title--resume widget-title--resume-top'></aside> </div>
		            <div class='col-md-3 col-sm-6 col-xs-12'>
		            <aside id='jobify_widget_job_apply-3' class='widget widget--resume widget--resume-top jobify_widget_job_apply'> <div class='resume_contact'>
		            <input class='resume_contact_button' type='button' value='Contact' />
		            <div class='resume_contact_details'>
		            <div class='resume_contact_details_inner'><h2><img class='alignnone size-full wp-image-99991470' src='https://www.helperplace.com/wp-content/uploads/2016/07/HelperPlace2.png' alt='Logo HelperPlace' width='200' height='44' /></h2><hr /><p style='padding-left: 30px;'>To contact this candidate, please <strong>freely post a Job Offer.</strong></p><p style='text-align: center;'><a class='button button--type-action' href='https://www.helperplace.com/post-a-job/'>Click Here</a></p> <br /> <br /></div> </div>
		            </div>
		            </aside> </div>
		            </div>
		            <div class='resume-overview-content row'>
		            <div class='resume-description col-md-12 col-sm-12'>
		            <h2 class='widget-title widget-title--resume-top'>Description</h2>
		            <p>".$expsummary."</p>
		            </div>
		            <div class='resume-info col-md-12 col-sm-12 col-xs-12'>
		           

		            <div class='clearfix'></div><div class='col-sm-3 helperoverview'><div id='jmfe-wrap-cooking_requirements2-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'><strong id='jmfe-label-cooking_requirements2' class='jmfe-custom-field-label'>My cooking skills:</strong> </div><ul id='jmfe-wrap-cooking_requirements2' class='jmfe-custom-field-wrap '><li id='jmfe-custom-cooking_requirements2' class='jmfe-custom-field '>".$cookingskills."</li></ul></div><div class='clearfix'></div><div class='col-sm-3 helperoverview'>

		            <div id='jmfe-wrap-other_skills2-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'><strong id='jmfe-label-other_skills2' class='jmfe-custom-field-label'>My other skills:</strong> </div>
		            <ul id='jmfe-wrap-other_skills2' class='jmfe-custom-field-wrap '><li id='jmfe-custom-other_skills2' class='jmfe-custom-field '>".$otherskills."</li></ul></div>

		            <div class='clearfix'></div><div class='col-sm-3 helperoverview'><div id='jmfe-wrap-working_statuts2-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'><mark id='jmfe-label-working_statuts2' class='jmfe-custom-field-label'>My working status:</mark> </div><ul id='jmfe-wrap-working_statuts2' class='jmfe-custom-field-wrap '><li id='jmfe-custom-working_statuts2' class='jmfe-custom-field '>".$workingstatus."</li></ul></div><div class='clearfix'></div> </div>

		            <h2 class='widget-title widget-title--resume-top'>Experience</h2>
		            <div class='resume-manager-experience'>
		            <div style='width:100%; float:left; '>
		            <div class='col-sm-4'>
		            <small class='date'>
		            December 2013 - December 2017</small>
		            <dd>
		            <strong class='job_title'>Domestic Helper</strong>
		            <span class='working_place'> Hong Kong</span>
		            </dd>
		            </div>
		            <div class='col-sm-4'>
		            <small>&nbsp;</small>
		            <dd>
		            <strong>Chinese Family</strong>
		            <br />
		            <span class='family_type_resume'> Couple + 2 kids</span>
		            <br />
		            <span class='main_duties_resume'> Duties: Child Care, Groceries, Housekeeping</span>
		            <br />
		            <span class='reference_resume'>
		            No reference</span>
		            </dd>
		            </div>
		            <div class='col-sm-4'>
		            <small> &nbsp; </small>
		            <dd>
		            </dd>
		            </div>
		            </div>
		            <div class='clearfix'></div>
		            </div>
		            </div>
		            </div>
		            <div> <a class='button' href='https://www.helperplace.com/find-domestic-helper'> Back </a></div>
		            </div>
		            <script type='text/javascript'>
		                jQuery(document).ready(function() {
		                   
		                    var summaries = jQuery('.resume_contact');
		                    
		                    summaries.each(function(i) {
		                        var summary = jQuery(summaries[i]);
		                        var next = summaries[i + 1];

		                        summary.scrollToFixed({
		                            marginTop: jQuery('header').outerHeight(true) + 10,
		                            limit: function() {
		                                var limit = 0;
		                                if (next) {
		                                    limit = jQuery(next).offset().top - jQuery(this).outerHeight(true) - 10;
		                                } else {
		                                    limit = jQuery('.footer-cta').offset().top - jQuery(this).outerHeight(true) - 10;
		                                }
		                                return limit;
		                            },
		                            zIndex:9
		                        });
		                    });
		                });
		            </script>
		            </div>";

		    }
	}


	
}    

function search_job()
{
	global $connection;
<<<<<<< HEAD
	$search_job_query="SELECT 
					  j_id,
					  j_jobtitle,
					  j_employertype,
					  j_type,
					  j_country,
						DATE_FORMAT(j_dateposted,'%M %d, %Y') as date
					  FROM job_description
					  	order by j_id desc";
=======
	$search_job_query="SELECT * from job_description where j_status='Approved'";
>>>>>>> 283833f5308c77a6fe075e7cdbfe35a38a97cba7
    $search_job_result=mysqli_query($connection,$search_job_query);

    while($row=mysqli_fetch_assoc($search_job_result))
    {
        $jobid=$row['j_id'];
        $jobtitle=$row['j_jobtitle'];
        $employertype=$row['j_employertype'];
        $joblocation=$row['j_country'];
        $jobtype=$row['j_type'];
        $dateposted=$row['date'];

        echo "<li id='job_listing-100053756' class='post-100053756 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_region-hong-kong job_listing_category-helper job_listing_type-full-time job_listing_tag-baby-care job_listing_tag-cooking job_listing_tag-housekeeping candidate_language2-english employer_nationality-chinese-family family_type-couple-1-kid working_statut-any-situation job-type-full-time' data-title='Looking for a helper to start right away at Direct Employer' data-href='https://www.helperplace.com/job/direct-employer-2-looking-for-a-helper-to-start-right-away' style='visibility: visible;'>";
        echo "<br>";
        echo "<a href='index.php?jobid=".$jobid."' class='job_listing-clickbox'></a>";
        echo "<div class='job_listing-about'>";
        echo "<div class='job_listing-position job_listing__column'>";
        echo "<h3 class='job_listing-title'>".$jobtitle."</h3>";
        echo "<div class='job_listing-company'>";
        echo "<strong>".$employertype."</strong>  ";
        echo "</div>";
        echo "</div>";        
        echo "<div class='job_listing-location job_listing__column'>";   
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
function view_job()
{
	global $connection;
<<<<<<< HEAD
	if (isset($_GET['jobid'])) 
	{
			 $id=$_GET['jobid'];
			  
			$view_job_query="SELECT 	  
							j_jobtitle,
							j_familytype,
							j_category,
							j_country,
							j_employertype,
							j_mainduties,
							j_familytype,
							j_requiredlanguages,
							j_startdate,
							j_description,
							j_workingstatus,
							j_otherskills,
							j_monthlysalary,
							j_cookingskill,
							j_type
						FROM
							job_description
									 where j_id='$id'";


		     $view_job_result=mysqli_query($connection,$view_job_query);
		    while($row=mysqli_fetch_assoc($view_job_result))
		    {
		        $jobtitle=$row['j_jobtitle'];
		        $familytype=$row['j_familytype'];
		        $category=$row['j_category'];
		        $country=$row['j_country'];
		        $employertype=$row['j_employertype'];
		        $mainduties=$row['j_mainduties'];
		        $familytype=$row['j_familytype'];
		        $requiredlanguages=$row['j_requiredlanguages'];
		        $cookingskill=$row['j_cookingskill'];
		        $startdate=$row['j_startdate'];
		        $description=$row['j_description'];
		        $workingstatus=$row['j_workingstatus'];
		        $otherskills=$row['j_otherskills'];
		        $monthlysalary=$row['j_monthlysalary'];
		        $type=$row['j_type'];
		        
		        echo"
						<div id='main' class='site-main'>
						<div class='single_job_listing' itemscope itemtype='http://schema.org/JobPosting'>
						<div class='page-header'>
						<h2 class='page-title'>
						".$jobtitle."<meta itemprop='title' content='Hongkongese family looking for a domestic helper' />
						</h2>
						<h3 class='page-subtitle'>
						".$familytype."<br />
						<ul class='job-listing-meta meta'>
						<li class='job-type full-time' itemprop='employmentType'>".$type."</li>
						<li class='location' itemprop='jobLocation'><a href='https://www.helperplace.com/job-region/hong-kong' rel='tag'>".$country."</a></li>
						<li class='job-company'>
						<a href='https://www.helperplace.com/company/Direct%20Employer/' target='_blank'>".$employertype."</a>
						</li>
						</ul>
						</h3>
						</div>
						<div id='content' class='container content-area' role='main'>
						<div class='job-meta-top row'>

						<div class='col-md-3 col-sm-6 col-xs-12'>
						<aside id='jobify_widget_job_company_logo-2' class='widget widget--job_listing widget--job_listing-top jobify_widget_job_company_logo'><a href='https://www.helperplace.com/company/Direct%20Employer/' target='_blank'><img class='company_logo' src='https://i2.wp.com/www.helperplace.com/wp-content/uploads/2017/02/Couple.jpg?w=680&#038;ssl=1' alt='Direct Employer' data-recalc-dims='1' /></a>
						</aside> </div>

						<div class='col-md-3 col-sm-6 col-xs-12'>
						<aside id='jobify_widget_job_tags-2' class='widget widget--job_listing widget--job_listing-top jobify_widget_job_tags'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Required Skills</h3><a href='https://www.helperplace.com/job-tag/cooking' class='job-tag'>Cooking</a><a href='https://www.helperplace.com/job-tag/housekeeping' class='job-tag'>".$category."</a></aside>

						<aside id='jmfe_widget-5' class='widget widget--job_listing widget--job_listing-top widget_jmfe_widget'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Family Type</h3>".$familytype."<br /></aside><aside id='jmfe_widget-7' class='widget widget--job_listing widget--job_listing-top widget_jmfe_widget'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Start Date</h3>".$startdate."</aside> </div>

						<div class='col-md-3 col-sm-6 col-xs-12'>
						<aside id='jobify_widget_job_categories-2' class='widget widget--job_listing widget--job_listing-top jobify_widget_job_categories'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Looking for</h3><div class='job_listing-categories'><a href='https://www.helperplace.com/job-category/helper' class='job-category'>".$mainduties."</a></div></aside>
						<aside id='jmfe_widget-6' class='widget widget--job_listing widget--job_listing-top widget_jmfe_widget'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Speaking</h3>".$requiredlanguages."<br /></aside> </div>

						<div class='col-md-3 col-sm-6 col-xs-12'>
						<aside id='jobify_widget_job_apply-4' class='widget widget--job_listing widget--job_listing-top jobify_widget_job_apply'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>New User?</h3> <div class='job_application application'>
						<input type='button' class='application_button button' value='Apply for job' />
						<div class='application_details'>
						<form class='apply_with_resume' method='post' action='https://www.helperplace.com/submit-your-profile'>
						<p>You can apply to this job and others using your online resume. Click the link below to submit your online resume and email your application to this employer.</p>
						<p>
						<input type='submit' name='wp_job_manager_resumes_apply_with_resume_create' value='Submit Resume &amp; Apply' />
						<input type='hidden' name='job_id' value='100053779' />
						</p>
						</form>
						</div>
						</div>
						</aside><aside id='text-9' class='widget widget--job_listing widget--job_listing-top widget_text'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Have a Profile?</h3> <div class='textwidget'><a href='/my-account/' class='popup-trigger-ajax'>Login & Apply</a>
						</div>
						</aside><aside id='jobify_widget_job_share-2' class='widget widget--job_listing widget--job_listing-top jobify_widget_job_share'><h3 class='widget-title widget-title--job_listing widget-title--job_listing-top'>Share This Job</h3><div class='sharedaddy sd-sharing-enabled'><div class='robots-nocontent sd-block sd-social sd-social-icon sd-sharing'><h3 class='sd-title'>Share this:</h3><div class='sd-content'><ul><li class='share-facebook'><a rel='nofollow' data-shared='sharing-facebook-100053779' class='share-facebook sd-button share-icon no-text' href='https://www.helperplace.com/job/direct-employer-kowloon-east-2-hongkongese-family-looking-domestic-helper?share=facebook' target='_blank' title='Click to share on Facebook'><span></span><span class='sharing-screen-reader-text'>Click to share on Facebook (Opens in new window)</span></a></li><li class='share-jetpack-whatsapp'><a rel='nofollow' data-shared='' class='share-jetpack-whatsapp sd-button share-icon no-text' href='whatsapp://send?text=Hongkongese%20family%20looking%20for%20a%20domestic%20helper https%3A%2F%2Fwww.helperplace.com%2Fjob%2Fdirect-employer-kowloon-east-2-hongkongese-family-looking-domestic-helper' target='_blank' title='Click to share on WhatsApp'><span></span><span class='sharing-screen-reader-text'>Click to share on WhatsApp (Opens in new window)</span></a></li><li class='share-google-plus-1'><a rel='nofollow' data-shared='sharing-google-100053779' class='share-google-plus-1 sd-button share-icon no-text' href='https://www.helperplace.com/job/direct-employer-kowloon-east-2-hongkongese-family-looking-domestic-helper?share=google-plus-1' target='_blank' title='Click to share on Google+'><span></span><span class='sharing-screen-reader-text'>Click to share on Google+ (Opens in new window)</span></a></li><li class='share-twitter'><a rel='nofollow' data-shared='sharing-twitter-100053779' class='share-twitter sd-button share-icon no-text' href='https://www.helperplace.com/job/direct-employer-kowloon-east-2-hongkongese-family-looking-domestic-helper?share=twitter' target='_blank' title='Click to share on Twitter'><span></span><span class='sharing-screen-reader-text'>Click to share on Twitter (Opens in new window)</span></a></li><li class='share-end'></li></ul></div></div></div></aside> </div>
						</div>
						<div class='job-overview-content row'>
						<div itemprop='description' class='job_listing-description job-overview col-md-12 col-sm-12'>
						<h2 class='widget-title widget-title--job_listing-top job-overview-title'>Overview</h2>
						<p>".$description."</p>

						<div class='col-sm-3 helperoverview'><div id='jmfe-wrap-working_statuts-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'><strong id='jmfe-label-working_statuts' class='jmfe-custom-field-label'>Preferred Working Status:</strong> </div>
						<ul id='jmfe-wrap-working_statuts' class='jmfe-custom-field-wrap '><li id='jmfe-custom-working_statuts' class='jmfe-custom-field '>".$workingstatus."</li></ul></div>

						<div class='clearfix'></div><div class='col-sm-3 helperoverview'><div id='jmfe-wrap-other_skills-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'><strong id='jmfe-label-other_skills' class='jmfe-custom-field-label'>Other Required Skills:</strong> </div>
						<ul id='jmfe-wrap-other_skills' class='jmfe-custom-field-wrap '><li id='jmfe-custom-other_skills' class='jmfe-custom-field '>".$otherskills."</li></ul></div><div class='clearfix'></div><div class='col-sm-3 helperoverview'><div id='jmfe-wrap-cooking_requirements-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'>

						<strong id='jmfe-label-cooking_requirements' class='jmfe-custom-field-label'>Cooking Skills:</strong> </div><ul id='jmfe-wrap-cooking_requirements' class='jmfe-custom-field-wrap '><li id='jmfe-custom-cooking_requirements' class='jmfe-custom-field '>".$cookingskill."</li></ul></div><div class='clearfix'></div><div class='col-sm-3 helperoverview'><div id='jmfe-wrap-helper_requirements-multi-label' class='jmfe-custom-field-wrap jmfe-custom-field-multi-label'>

						<strong id='jmfe-label-salary_range' class='jmfe-custom-field-label'>Monthly Salary:</strong> <p id='jmfe-custom-salary_range' class='jmfe-custom-field '>".$monthlysalary."</p> </div>
						</div>
						</div>
						<div class='related-jobs container'>
						<h3 class='widget-title widget--title-job_listing-top'>Related Jobs</h3>
						<ul class='job_listings related'>
						<li id='job_listing-100035016' class='post-100035016 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_region-hong-kong job_listing_category-helper job_listing_type-full-time job_listing_tag-child-care job_listing_tag-cooking job_listing_tag-housekeeping candidate_language2-english employer_nationality-british-family family_type-couple-2-kids helper_requirement-child-care helper_requirement-groceries helper_requirement-housekeeping working_statut-finished-contract job-type-full-time' data-longitude='114.2707867' data-latitude='22.383689' data-title='British family looking for a Filipino helper at Direct Employer' data-href='https://www.helperplace.com/job/direct-employer-sai-kung-hong-kong-2-british-family-looking-for-a-filipino-helper'>
						<a href='https://www.helperplace.com/job/direct-employer-sai-kung-hong-kong-2-british-family-looking-for-a-filipino-helper' class='job_listing-clickbox'></a>
						<div class='job_listing-logo'>
						<img class='company_logo' src='https://i1.wp.com/www.helperplace.com/wp-content/uploads/2016/08/Family-of-4-western-1.jpg?resize=150%2C150&amp;ssl=1' alt='Direct Employer' />
						</div><div class='job_listing-about'>
						<div class='job_listing-position job_listing__column'>
						<h3 class='job_listing-title'>British family looking for a Filipino helper</h3>
						<div class='job_listing-company'>
						<strong>Direct Employer</strong> </div>
						</div>
						<div class='job_listing-location job_listing__column'>
						<a href='https://www.helperplace.com/job-region/hong-kong' rel='tag'>Hong Kong</a> </div>
						<ul class='job_listing-meta job_listing__column'>
						<li class='job_listing-type job-type full-time'>Full Time</li>
						<li class='job_listing-date'><date>4 weeks ago</date></li>
						</ul>
						</div>
						</li>
						<li id='job_listing-100052530' class='post-100052530 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_region-hong-kong job_listing_category-helper job_listing_type-full-time job_listing_tag-cooking job_listing_tag-driver job_listing_tag-pet-care candidate_language2-english cooking_requirement-western employer_nationality-american-family family_type-couple-2-kids other_skill-driving-licence working_statut-finished-contract job-type-full-time' data-longitude='114.1832323' data-latitude='22.2474034' data-title='Western Family looking for helper/driver at Direct Employer' data-href='https://www.helperplace.com/job/direct-employer-shouson-hill-2-western-family-looking-for-helper-driver'>
						<a href='https://www.helperplace.com/job/direct-employer-shouson-hill-2-western-family-looking-for-helper-driver' class='job_listing-clickbox'></a>
						<div class='job_listing-logo'>
						<img class='company_logo' src='https://i1.wp.com/www.helperplace.com/wp-content/uploads/2016/08/Driver.png?resize=150%2C150&amp;ssl=1' alt='Direct Employer' />
						</div><div class='job_listing-about'>
						<div class='job_listing-position job_listing__column'>
						<h3 class='job_listing-title'>Western Family looking for helper/driver</h3>
						<div class='job_listing-company'>
						<strong>Direct Employer</strong> </div>
						</div>
						<div class='job_listing-location job_listing__column'>
						<a href='https://www.helperplace.com/job-region/hong-kong' rel='tag'>Hong Kong</a> </div>
						<ul class='job_listing-meta job_listing__column'>
						<li class='job_listing-type job-type full-time'>Full Time</li>
						<li class='job_listing-date'><date>1 week ago</date></li>
						</ul>
						</div>
						</li>
						<li id='job_listing-100048951' class='post-100048951 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_region-hong-kong job_listing_category-helper job_listing_type-full-time job_listing_tag-cooking job_listing_tag-housekeeping candidate_language2-english cooking_requirement-chinese employer_nationality-canadian-family family_type-couple-1-kid helper_requirement-groceries helper_requirement-housekeeping other_skill-car-wash working_statut-finished-contract job-type-full-time' data-longitude='114.1485675' data-latitude='22.2427992' data-title='Chinese family of 3 looking for live-in domestic helper at Direct Employer' data-href='https://www.helperplace.com/job/direct-employer-south-horizons-ap-lei-chau-chinese-family-looking-live-in-domestic-helper'>
						<a href='https://www.helperplace.com/job/direct-employer-south-horizons-ap-lei-chau-chinese-family-looking-live-in-domestic-helper' class='job_listing-clickbox'></a>
						<div class='job_listing-logo'>
						<img class='company_logo' src='https://i2.wp.com/www.helperplace.com/wp-content/uploads/2017/10/Family-need-maid.jpg?resize=150%2C150&amp;ssl=1' alt='Direct Employer' />
						</div><div class='job_listing-about'>
						<div class='job_listing-position job_listing__column'>
						<h3 class='job_listing-title'>Chinese family of 3 looking for live-in domestic helper</h3>
						<div class='job_listing-company'>
						<strong>Direct Employer</strong> </div>
						</div>
						<div class='job_listing-location job_listing__column'>
						<a href='https://www.helperplace.com/job-region/hong-kong' rel='tag'>Hong Kong</a> </div>
						<ul class='job_listing-meta job_listing__column'>
						<li class='job_listing-type job-type full-time'>Full Time</li>
						<li class='job_listing-date'><date>4 weeks ago</date></li>
						</ul>
						</div>
						</li>
						</ul>
						</div>
						</div>
						<div id='jp-relatedposts' class='jp-relatedposts'>
						</div>
						</div> ";

		    	}
}
=======
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
							    ON a.u_id = c.u_id  where b.up_status='Approved'";
    $search_candidate_result=mysqli_query($connection,$search_candidate_query);

    while($row=mysqli_fetch_assoc($search_candidate_result))
    {
        $fname=$row['u_fname'];
        $lname=$row['u_lname'];
        $category=$row['up_category'];
        $address=$row['up_address'];
        $yearsofexp=$row['upi_yearsofexp'];
>>>>>>> 283833f5308c77a6fe075e7cdbfe35a38a97cba7


	
}    

<<<<<<< HEAD
 ?>
=======

    }

}
	    
?>
>>>>>>> 283833f5308c77a6fe075e7cdbfe35a38a97cba7
