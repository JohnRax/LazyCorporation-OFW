<?php

	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='root';
	$db['db_name']='lazycorporation-ofwdatabase';

	foreach ($db as $key => $value) {
		
		define(strtoupper($key),$value);
	}

	$connection = mysqli(null,DB_USER,DB_PASS,DB_NAME,null,'/cloudsql/lazzyworks-185201:asia-northeast1:lazzyworksdb');
	if($connection)
	{
		
	}
	else
	{
		echo "Not Connected";
	}
?>