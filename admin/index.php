<?php include "../includes/connection.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/topnavigation.php" ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/function.php" ?>

<?php 
    
    if (isset($_GET['source'])) 
    {
        $source=$_GET['source'];
    }
    else
    {
        $source="";
    }

    switch ($source) {
    case 'dashboard':
        include "includes/dashboard.php";
        break;
    case 'user':
        include "user.php";
        break;
    case 'candidate':
        include "candidate.php";
        break;
    case 'jobs':
        include "jobs.php";
        break;
    
    default:
        include "includes/dashboard.php";
        break;
} ?>

<?php include "includes/footer.php" ?>