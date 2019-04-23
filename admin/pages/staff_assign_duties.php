<?php include("../inc/html_controls.php");?>


    <?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

	<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Assign Duties to Staff</h3>
                </div>
                
                <div class="box-body">		
                
                		<?php

						if(isset($_POST["go"]))
						{
							$stID = $_POST["staffID"];  $nClrs = $_POST["clrs"];
							$sql = "update staff set clrs=:clrs where staffID =:staffID";
							$stmt = $pdo->prepare($sql);
							if($stmt->execute([':clrs'=>$nClrs, ':staffID'=>$stID]))
							{
								echo "<div class='alert alert-success'>Duty Assigned</div>";
							}else
							{
								echo "<div class='alert alert-success'>Operation Failed</div>";
							}

						}
                        		// if ($_POST["go"]=="Assign")
								// {
								// 	$stID = $_POST["staffID"];  $nClrs = $_POST["clrs"];
									
								// 	$q = mysql_query("update staff set clrs='$nClrs' where staffID = '$stID'");
									
								// 	if ($q) {echo "<div class='alert alert-success'>Duty Assigned</div>";}
								// 	else  {echo "<div class='alert alert-success'>Operation Failed</div>";}
								// }
						?>
                <form action="" method="post">
                	
                    <div class="input-group col-lg-4">
                    <select class="form-control" name="staffID">
                    <option value="">Select Staff ID</option>
                    	<?php
								$stmt = $pdo->query("select * from staff order by `staffID` ASC");
								
								$rows = $stmt->rowCount();
								
									
								if ($rows>0)
								{
									for ($i=1; $i<=$rows; $i++)
									{
										$row = $stmt->fetch(PDO::FETCH_OBJ);

										$sid = $row->staffID; 
										$fullName = $row->lastName .', '. $row->firstName .' '. $row->othernames;
										
										echo "<option value='$sid'>$fullName : $sid</option>";
									}
								}
						
                    			?>
                    </select>
                        	<select class="form-control" name="clrs">
                            <option value="">Select Clearance</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="PRINCIPAL">PRINCIPAL</option>
                            <option value="ACCOUNTANT">ACCOUNTANT</option>
                            <option value="DEAN">DEAN</option>
                            <option value="EOFFICER">EXAM OFFICER</option>
                            <option value="STAFF">STAFF</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Assign" name="go" />
                        </div>
                </form>
                <hr>
                <table class="table table-hover">
                    <tr><th>#</th><th>Staff ID</th><th>Full Name</th> <th>Clearance</th> <th>Date of Birth</th></tr>
                    <?php

						$stmt = $pdo->prepare("select * from staff order by `staffID` ASC");
						$stmt->execute();
														
						$rows = $stmt->rowCount();
	
						if ($rows>0)
						{
							for ($i=1; $i<=$rows; $i++)
							{
								$row = $stmt->fetch(PDO::FETCH_OBJ);

								$sid = $row->staffID; 
								$staffID = $row->staffID; $dob = $row->dob; $clrs = $row->clrs;
								$fullName = $row->lastName .', '.$row->firstName .' '. $row->otherNames;
								echo "<tr><td>$i</td> <td>
								<a href='index.php?sid=$staffID'>$staffID</a>
								</td> <td>$fullName</td> <td>$clrs</td> <td>$dob</td></tr>";
							
                    	}
						}
					?>
                    </table>
               </div>
            </div>
		


<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>