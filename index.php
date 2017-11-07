<?php ob_start();
session_start();?>
<?php include "includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/function.php" ?>
<?php 
	
	if(isset($_SESSION['u_role']))
	{
		if($_SESSION['u_role']=="employer")
		{
			header("Location:index-employer.php");
		}
		else
		{
			header("Location:index-candidate.php");
		}
	}


	
	if (isset($_GET['source'])) {

		$source=$_GET['source'];
	}
	else{

		$source="";
	}

	switch ($source) {
		case 'findjob':
			include "includes/search-find-job.php";
			break;
		case 'submitprofile':
			include "includes/submit-profile.php";
			break;
		case 'postjob':
			include "includes/post-job.php";
			break;
		case 'findcandidate':
			include "includes/find-candidate.php";
			break;
		case 'pricing':
			include "includes/pricing.php";
			break;
		case 'faq':
			include "includes/faq.php";
			break;
		case 'privacypolicy':
			include "includes/privacy-policy.php";
			break;
		case 'termsandcondition':
			include "includes/terms-and-condition.php";
			break;
		case 'register':
			include "includes/register.php";
			break;
		case 'login':
			include "includes/login.php";
			break;
		default:
			include "includes/homepage.php";
			break;
	}
 ?>
<?php include "includes/footer.php" ?>