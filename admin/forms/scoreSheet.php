<?php ob_start();  date_default_timezone_set("Africa/Lagos"); include '../inc/config.php';
		include '../inc/phpFunctions.php';
		
	include("../mpdf60/mpdf.php");

	$mpdf=new mPDF('c','A4-P');

		$term = $_SESSION["term"];
		$session = str_replace("/","_",$_SESSION["session"]);
		
		$currClass = $_GET["class"];
		$subject = $_GET["subject"];
		
		$html = scoreSheet($subject, $currClass);
		
				$mpdf->WriteHTML($html);
				$mpdf->SetWatermarkImage('../files/school/logo.jpg', 0.15, 'F');
				$mpdf->showWatermarkImage = true;
				
				//create new page
				$mpdf->AddPage();

					$file = $currClass."_".$term."_".$session."_scoreSheet.pdf";
					$mpdf->Output();
					//$mpdf->Output($file,'F');
					//header("Location: broadSheets/$file");
					exit;
			
?>