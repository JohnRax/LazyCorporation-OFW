<?php 

function view_user()
{

	global $connection;
	$select_user_query="SELECT * from user";
	$select_user_result=mysqli_query($connection,$select_user_query);
	if(!$select_user_result)
	{
	     die("Something went wrong....".mysqli_error($connection));
	}

	while($row=mysqli_fetch_assoc($select_user_result))
	{
	    $id=$row['u_id'];
	    $username=$row['u_username'];
	    $email=$row['u_email'];
	    $role=$row['u_type'];
	    echo "<tr>";
        echo "<td><a href='index.php?source=user&remove_user_id=".$id."' class='fa fa-remove'> Remove User</a></td>";
	    echo "<td>".$id."</td>";
	    echo "<td>".$username."</td>";
	    echo "<td>".$email."</td>";
	    echo "<td>".$role."</td>";
	    echo "</tr>";
	}
                             
}
function remove_user()
{
    global $connection;
    if (isset($_GET['remove_user_id'])) 
    {        
        $user_id=$_GET['remove_user_id'];
        $remove_user_details_query="DELETE from user_details where u_id='$user_id'";
        $remove_user_details_result=mysqli_query($connection,$remove_user_details_query);
        if (!$remove_user_details_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }

        $remove_user_professional_query="DELETE from user_professional_information where u_id='$user_id'";
        $remove_user_professional_result=mysqli_query($connection,$remove_user_professional_query);
        if (!$remove_user_professional_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }


        $remove_user_personal_query="DELETE from user_personal_information where u_id='$user_id'";
        $remove_user_personal_result=mysqli_query($connection,$remove_user_personal_query);
        if (!$remove_user_personal_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }

        $remove_user_job_query="DELETE from job_description where u_id='$user_id'";
        $remove_user_job_result=mysqli_query($connection,$remove_user_job_query);
        if (!$remove_user_job_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }

        $remove_user_query="DELETE from user where u_id='$user_id'";
        $remove_user_result=mysqli_query($connection,$remove_user_query);
        if (!$remove_user_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }
    }

}
function remove_profile()
{
    global $connection;
    if (isset($_GET['remove_profile_id'])) 
    {

        $user_id=$_GET['remove_profile_id'];
        $remove_user_professional_query="DELETE from user_professional_information where u_id='$user_id'";
        $remove_user_professional_result=mysqli_query($connection,$remove_user_professional_query);
        if (!$remove_user_professional_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }


        $remove_user_personal_query="DELETE from user_personal_information where u_id='$user_id'";
        $remove_user_personal_result=mysqli_query($connection,$remove_user_personal_query);
        if (!$remove_user_personal_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }

    }
}
function approved_profile()
{
    global $connection;
    if (isset($_GET['approved_profile_id'])) 
    {
        $user_id=$_GET['approved_profile_id'];
        $approved_profile_query="UPDATE user_personal_information SET up_status='Approved' where u_id='$user_id'";
        $approved_profile_result=mysqli_query($connection,$approved_profile_query);
        if (!$approved_profile_result) 
        {
            die("Something went wrong....".mysqli_error($connection));
        }
    }
}

function view_jobs()
{

    global $connection;
    $select_job_query="SELECT * from job_description";
    $select_job_result=mysqli_query($connection,$select_job_query);
    if(!$select_job_result)
    {
    	die("Something went wrong....".mysqli_error($connection));
    }

    while($row=mysqli_fetch_assoc($select_job_result))
    {
    	$j_id=$row['j_id'];
    	$u_id=$row['u_id'];

    	$jobtitle=$row['j_jobtitle'];
    	$country=$row['j_country'];
    	$districtlocation=$row['j_districtlocation'];
    	$type=$row['j_type'];
    	$category=$row['j_category'];
    	$description=$row['j_description'];
    	$workingstatus=$row['j_workingstatus'];
    	$mainduties=$row['j_mainduties'];
    	$cookingskill=$row['j_cookingskill'];
    	$otherskill=$row['j_otherskills'];
    	$requiredlanguage=$row['j_requiredlanguages'];
    	$applicationemail=$row['j_applicationemail'];
    	$employertype=$row['j_employertype'];
    	$nationality=$row['j_nationality'];
    	$familytype=$row['j_familytype'];
    	$startdate=$row['j_startdate'];
    	$monthlysalary=$row['j_monthlysalary'];
        $jstatus=$row['j_status'];

    	echo "<tr>";
        echo "<td><a href='index.php?source=jobs&remove_job_id=".$j_id."' class='fa fa-remove'> Remove</a></td>";
        echo "<td><a href='index.php?source=jobs&approved_job_id=".$j_id."' class='fa fa-check'> Approved</a></td>";
    	echo "<td>".$jstatus."</td>";
        echo "<td>".$j_id."</td>";
    	echo "<td>".$u_id."</td>";
    	echo "<td>".$jobtitle."</td>";
    	echo "<td>".$country."</td>";
    	echo "<td>".$districtlocation."</td>";
    	echo "<td>".$type."</td>";
    	echo "<td>".$category."</td>";   	
    	echo "<td>".$description."</td>";
    	echo "<td>".$workingstatus."</td>";
    	echo "<td>".$mainduties."</td>";
    	echo "<td>".$cookingskill."</td>";
    	echo "<td>".$otherskill."</td>";
    	echo "<td>".$requiredlanguage."</td>";
    	echo "<td>".$applicationemail."</td>";
    	echo "<td>".$employertype."</td>";
    	echo "<td>".$nationality."</td>";
    	echo "<td>".$familytype."</td>";
    	echo "<td>".$startdate."</td>";
    	echo "<td>".$monthlysalary."</td>";
    
    	echo "</tr>";
    }

}

function remove_job()
{
    global $connection;
    if (isset($_GET['remove_job_id'])) 
    {
        $job_id=$_GET['remove_job_id'];
        $remove_user_job_query="DELETE from job_description where j_id='$job_id'";
        $remove_user_job_result=mysqli_query($connection,$remove_user_job_query);
        if (!$remove_user_job_result) 
        {
           die("Something went wrong....".mysqli_error($connection));
        }
    }  
}

function approved_job()
{
    global $connection;
    if (isset($_GET['approved_job_id'])) 
    {
        $job_id=$_GET['approved_job_id'];
        $approved_job_query="UPDATE job_description SET j_status='Approved' where j_id='$job_id'";
        $approved_job_result=mysqli_query($connection,$approved_job_query);
        if (!$approved_job_result) 
        {
            die("Something went wrong....".mysqli_error($connection));
        }
    }
}

function view_candidate()
{
	global $connection;
	$view_candidate_query="SELECT 
	  user_details.u_id,
	  user_details.u_lname,
	  user_details.u_fname,
	  user_details.u_gender,
      user_personal_information.up_status,
	  user_personal_information.up_category,
	  user_personal_information.up_email,
	  user_personal_information.up_mobile,
	  user_personal_information.up_telephone,
	  user_personal_information.up_nationality,
	  user_personal_information.up_address,
	  user_personal_information.up_age,
	  user_personal_information.up_maritalstatus,
	  user_personal_information.up_children,
	  user_personal_information.up_languages 
	FROM
	  user_details 
	  INNER JOIN user_personal_information 
	    ON user_details.u_id = user_personal_information.u_id ";
    $view_candidate_result=mysqli_query($connection,$view_candidate_query);

    if(!$view_candidate_result)
    {
        die("Something went wrong....".mysqli_error($connection));
    }


    while($row=mysqli_fetch_assoc($view_candidate_result))
    {   
        $id=$row['u_id'];
        $lastname=$row['u_lname'];
        $firstname=$row['u_fname'];
        $gender=$row['u_gender'];
        $job=$row['up_category'];
        $email=$row['up_email'];
        $mobile=$row['up_mobile'];
        $telephone=$row['up_telephone'];
        $nationality=$row['up_nationality'];
        $address=$row['up_address'];
        $age=$row['up_age'];
        $maritalstatus=$row['up_maritalstatus'];
        $children=$row['up_children'];
        $language=$row['up_languages'];
        $status=$row['up_status'];

            echo "<table class='table table-bordered table-hover'>";
            echo "  <thead>
                    <tr>          
                    <th></th>
                    <th></th> 
                    <th>Status</th>              
                    <th>Id</th>      
                    <th>Full Name</th> 
                    <th>Gender</th>  
                    <th>Age</th> 
                    <th>Marital Status</th> 
                    <th>Children</th> 
                    <th>Language</th> 
                    <th>Job</th> 
                    <th>Email</th> 
                    <th>Mobile</th> 
                    <th>Telephone</th> 
                    <th>Nationality</th> 
                    <th>Address</th>     
                    </tr>
                    </thead>
                    <tbody> ";
            echo "<tr>";
            echo "<td><a href='index.php?source=candidate&remove_profile_id=".$id."'class='fa fa-remove'>Remove</a></td>";
            echo "<td><a href='index.php?source=candidate&approved_profile_id=".$id."' class='fa fa-check'>Approved</a></td>";
            echo "<td>".$status."</td>"; 
            echo "<td>".$id."</td>";
            echo "<td>".$firstname.", ".$lastname."</td>";
            echo "<td>".$gender."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$maritalstatus."</td>";
            echo "<td>".$children."</td>";
            echo "<td>".$language."</td>";
            echo "<td>".$job."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$mobile."</td>";
            echo "<td>".$telephone."</td>";
            echo "<td>".$nationality."</td>";
            echo "<td>".$address."</td>";
            echo "</tr>";
            echo "</tbody>";
            echo "<tr>
                  <th></th>      
                  <th></th>   
                  <th></th>    
                  <th></th>    
                  <th>Prefered Work Location</th> 
                  <th>Professional Title</th>  
                  <th>Years Of Experience</th> 
                  <th>Experience Summary</th>  
                  <th>Cooking Skills</th>  
                  <th>Skills</th> 
                  <th>Other Skills</th> 
                  <th>Working Status</th>
                  <th>Availability</th>
                  </tr>
                  <tbody>";   
           echo view_candidate_professional($id)."</tbody>";  
           echo "</table>";
           echo "<br>";
      

    }

}
function view_candidate_professional($id)
{
    global $connection;
    $view_candidate_query="SELECT * from user_professional_information where u_id='$id'";
    $view_candidate_result=mysqli_query($connection,$view_candidate_query);
    if(!$view_candidate_result)
    {
        die("Something went wrong....".mysqli_error($connection));
    }

    while($row=mysqli_fetch_assoc($view_candidate_result))
    {
       $preferedwork=$row['upi_preferedworklocation'];
       $professionaltitle=$row['upi_professionaltitle'];
       $yearsofexp=$row['upi_yearsofexp'];
       $expsummary=$row['upi_expsummary'];
       $cookingskills=$row['upi_cookingskills'];
       $skillexp=$row['upi_skillsexp'];
       $otherskills=$row['upi_otherskills'];
       $workingstatus=$row['upi_workingstatus'];
       $availability=$row['upi_availability'];
        echo "<tr>";
        echo "<td>";
        echo "<td>";
        echo "<td>";
         echo "<td>";
        echo "<td>".$preferedwork."</td>";
        echo "<td>".$professionaltitle."</td>";
        echo "<td>".$yearsofexp."</td>";
        echo "<td>".$expsummary."</td>";
        echo "<td>".$cookingskills."</td>";
        echo "<td>".$skillexp."</td>";
        echo "<td>".$otherskills."</td>";
        echo "<td>".$workingstatus."</td>";
        echo "<td>".$availability."</td>";
        echo "</tr>";


        
                                                                                                   
                    
    }


}


?>