<?php
	error_reporting(0);
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "sms_compiler";
	
	$conn = mysql_connect("$db_host","$db_user","$db_pass");
	
	if ($conn)
	{
		mysql_select_db("$db_name",$conn);
		
	}
?>