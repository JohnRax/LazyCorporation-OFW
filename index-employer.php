<?php ob_start();?>

<?php include "includes/connection.php" ?>
<?php include "includes/function.php" ?>
<?php include "includes-employer/header.php" ?>
<?php include "includes-employer/navigation.php" ?>
<?php 
	
	if(!isset($_SESSION['u_id']))
	{
		header("Location:index.php");
	}
	else
	{
		if($_SESSION['u_role']!=='employer')
		{
			header("Location:includes-employer/logout.php");
		}
	}

	if (isset($_GET['source'])) {

		$source=$_GET['source'];
	}
	else{

		$source="";
	}

	switch ($source) {
		case 'postjobs':
			include "includes-employer/post-jobs.php";
			break;
		case 'myaccount':
			include "includes-employer/my-account.php";
			break;
		case 'findcandidate':
			include "includes-employer/find-candidate.php";
			break;
		case 'pricing':
			include "includes-employer/pricing.php";
			break;
		case 'managejobs':
			include "includes-employer/manage-jobs.php";
			break;
		default:
			include "includes-employer/homepage.php";
			break;
	}
 ?>
<?php include "includes-employer/footer.php" ?>