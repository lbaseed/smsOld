<?php include '../inc/config.php'; session_start(); ob_start();
		
		//class report sheets

	include("../mpdf60/mpdf.php");
	include("../inc/phpFunctions.php");
	
	
	$mpdf=new mPDF('c'); 
	
		$term1 = $_SESSION["term"];
		$session1 = str_replace("/","_",$_SESSION["session"]);
		
		$class = $_GET["class"];
		$split = explode("_", $class);
		$mclass = $split[0]; $sclass = $split[1];
		$q = mysql_query("select * from students where class='$mclass' and subClass='$sclass'");
		
		if (@mysql_num_rows($q)>0)
		{
			$recRows = mysql_num_rows($q);
			for ($i=0; $i<$recRows; $i++)
			{
				$rec= mysql_fetch_array($q);
				$sid = $rec["studentID"];
				
				$html = reportSheetAverage($sid, $_SESSION["session"]);
						
						//creating pdf
						$mpdf->WriteHTML($html);
						$mpdf->SetWatermarkImage('../files/school/logo.jpg', 0.15, 'F');
						$mpdf->showWatermarkImage = true;
						//create new page
						$mpdf->AddPage();
				
			}
		}
					$file = $class ."_".$term1."_".$session1."_ReportSheetsCumulative.pdf";
					$mpdf->Output("reportSheets/".$file,'F');
					header("Location: reportSheets/$file");
					exit;


?>