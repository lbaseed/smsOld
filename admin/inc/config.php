<?php
	error_reporting(0);
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "sms_compiler";
	

	//set DSN
	$dsn = 'mysql:host='.$db_host.';dbname='.$db_name;

	//create PDO instance
	$pdo = new PDO($dsn, $db_user, $db_pass);
	$pdo1 = new PDO($dsn, $db_user, $db_pass);
	
	
?>