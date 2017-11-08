<?php

	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='root';
	$db['db_name']='lazycorporation-ofwdatabase';

	foreach ($db as $key => $value) {
		
		define(strtoupper($key),$value);
	}

<<<<<<< HEAD
	$connection = mysqli_connect(null,DB_USER,DB_PASS,DB_NAME,null,'/cloudsql/lazzyworks-185201:asia-northeast1:lazzyworksdb');
=======
	$connection = mysqli_connect(null,DB_USER,DB_PASS,DB_NAME,null);
>>>>>>> d08f839a368c3fc6d3873e7c64cf822fe8217ccd
	if($connection)
	{
		
	}
	else
	{
		echo "Not Connected";
	}
?>