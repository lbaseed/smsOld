<?php
	include("../inc/config.php");
	include("../inc/phpFunctions.php");
	include("../mpdf60/mpdf.php");
	
		if (isset($_GET["studentID"]))
		{
		
			$studentID = strtoupper($_GET["studentID"]);

			$chck = mysql_query("select * from students where studentID='$studentID'") or die (mysql_error());
			if (mysql_num_rows($chck)>0)
			{
			$mpdf=new mPDF('c','A4-P');
			
			$html = reportSheet($studentID, $_SESSION["term"], $_SESSION["session"]);
			
			
				$mpdf->WriteHTML($html);
				$mpdf->SetWatermarkImage('../files/school/logo.jpg', 0.15, 'F');
				$mpdf->showWatermarkImage = true;
				
					$file = str_replace("/","_",$studentID)."_ReportSheet.pdf";
					$mpdf->Output("reportSheets/".$file,'F');
					header("Location: reportSheets/$file");
					exit;
				
			}
			else {echo "Wrong Student ID";}
		}
		else {echo "Enter Student ID";}
		
?>