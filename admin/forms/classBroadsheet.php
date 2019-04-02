<?php

include("../inc/config.php");
include("../inc/phpFunctions.php");
include("../mpdf60/mpdf.php");

$mpdf=new mPDF('c','A4-L');

		$term = $_SESSION["term"];
		$session = str_replace("/","_",$_SESSION["session"]);
		
		$currClass = $_GET["stdntClass"];
		$html = classBroadSheet($currClass);
		
				$mpdf->WriteHTML($html);
				$mpdf->SetWatermarkImage('../files/school/logo.jpg', 0.15, 'F');
				$mpdf->showWatermarkImage = true;
				
				//create new page
				$mpdf->AddPage();

					$file = $currClass."_".$term."_".$session."_BroadSheet.pdf";
					$mpdf->Output("broadSheets/".$file,'F');
					header("Location: broadSheets/$file");
					exit;
?>

