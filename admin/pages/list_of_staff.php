<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>
				

				<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">List of All Staff</h3>
                </div>
                
                <div class="box-body">
                	<table class="table table-hover">
                    <tr><th>#</th><th>Staff ID</th><th>Full Name</th> <th>Clearance</th> <th>Date of Birth</th></tr>
                    <?php
						
						
                    	//$q = mysql_query("select * from staff order by `staffID` ASC");
//						//if (mysql_num_rows($q)>0)
//						{
//							$row = mysql_num_rows($q);
//							for ($i=1; $i<=$row; $i++)
//							{
//								$rec= mysql_fetch_array($q);
//								$staffID = $rec["staffID"]; $fullName = $rec["lastName"] .", ". $rec["firstName"] ." ". $rec["otherNames"];
//								$dob = $rec["dob"]; $clrs = $rec["clrs"];
//								echo "<tr><td>$i</td> <td>
//								<a href='index.php?id=13&sid=$staffID'>$staffID</a>
//								</td> <td>$fullName</td> <td>$clrs</td> <td>$dob</td></tr>";
//							}
//						}
					?>
                    </table>
                </div>
                <!--end of box body-->
            </div>
			


		<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>
