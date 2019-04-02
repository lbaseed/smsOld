<?php  ob_start(); session_start(); include "config.php";  date_default_timezone_set("Africa/Lagos"); 

		
		function numOfCredits($studentID, $class, $subClass)
		{
			$term = $_SESSION["term"]; $session = $_SESSION["session"];
			
			$q = mysql_query("select * from reg_subjects where studentID='$studentID' and $session='$session' and term='$term'");
			
			
		}

?>