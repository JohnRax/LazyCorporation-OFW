<?php

	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='root';
	$db['db_name']='lazycorporation-ofwdatabase';
	$db['db_socket']='';

	foreach ($db as $key => $value) {
		
		define(strtoupper($key),$value);
	}


	$connection = mysqli_connect(null,DB_USER,DB_PASS,DB_NAME,0,":/cloudsql/lazzyworks-185201:asia-northeast1:lazzyworksdb");
	try {
		if($connection)
		{
			
		}
		else
		{
			echo "Not Connected";
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
?>