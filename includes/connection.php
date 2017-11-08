<?php

	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='';
	$db['db_name']='lazycorporation-ofwdatabase';

	foreach ($db as $key => $value) {
		
		define(strtoupper($key),$value);
	}

	$connection = mysqli_connect(null,DB_USER,DB_PASS,DB_NAME,null);
	if($connection)
	{
		
	}
	else
	{
		echo "Not Connected";
	}
?>