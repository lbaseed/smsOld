<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Assign Class Teacher</h3>
                </div>
                
                <div class="box-body">
                <?php
                	// if ($_POST["go"]=="Assign")
					// {
					// 	$staffID = $_POST["sTeacher"]; $class = $_POST["class"];
						
					// 	if ($staffID and $class)
					// 	{
					// 		$q= mysql_query("update classes set classTeacher='$staffID' where classid='$class'");
							
					// 		if ($q) { echo "<div class='alert alert-success'>Operation Success </div>";}
					// 			else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
					// 	}
					// }

					if(isset($_POST["go"]))
					{
						$staffID = $_POST["sTeacher"]; $class = $_POST["class"];
						if($staffID and $class)
						{
							$sql = "update classes set classTeacher=:classTeacher where classid=:classid";
							$stmt = $pdo->prepare($sql);
							if($stmt->execute( [':classTeacher'=> $staffID, ':classid'=>$class ]))
							{
								echo "<div class='alert alert-success'>Operation Success </div>";
							}
							else
							{
								echo "<div class='alert alert-danger'>Operation Failed</div>";
							}
						}
					}
			
			?>
	<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

	
<?php  endPage();?>
