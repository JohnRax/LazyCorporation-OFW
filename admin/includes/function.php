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
	    echo "<td>".$id."</td>";
	    echo "<td>".$username."</td>";
	    echo "<td>".$email."</td>";
	    echo "<td>".$role."</td>";
	    echo "<td><a href=''>EDIT</a></td>";
	    echo "<td><a href=''>DELETE</a></td>";
	    echo "</tr>";
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

    	echo "<tr>";
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
    	echo "<td><a href=''>EDIT</a></td>";
	    echo "<td><a href=''>DELETE</a></td>";
    	echo "</tr>";
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

        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$lastname."</td>";
        echo "<td>".$firstname."</td>";
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
       
        echo "<td><a href=''>DELETE</a></td>";
        echo "</tr>";

    }

}

?>