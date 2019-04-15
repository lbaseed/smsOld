<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>



          <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Scores Analysis  
                    <?php if (isset($_GET["class"]) and isset($_GET["subject"]))  
							{echo "[<b>". getSubjectName($_GET["subject"]) ."</b> for <b>". $_GET["class"]."</b>]";}
							
					?>
                    </h3>
                </div>
                
                <div class="box-body">
                <!-- pick a class and navigate subjects -->
                
                <form action="" method="get" enctype="multipart/form-data">
                    
                        
                         <div class="input-group col-lg-6">
                        	<select class="form-control" name="class">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
									echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";

									$stmt = $pdo->query("SELECT * FROM classes ORDER BY `classid` ASC");

									$rows = $stmt->rowCount();
									if ($rows>0)
									{
										
										while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

											echo "<option value='$row->classid'>$row->classid</option>";

										}

									}
 
									
                    			?>
                            
                            </select>
                        	<select class="form-control" name="subject">
                            <option value="">Select Subject</option>
                            
                           		 <?php
									
									$stmt = $pdo->query("SELECT * FROM subjects ORDER BY `subjectID` ASC");

									$rows = $stmt->rowCount();
									if ($rows>0)
									{
										
										while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

											$sid = $row->subjectID; 
											$sTitle = $row->subjectTitle;

											echo "<option value='$sid'>$sTitle</option>";

										}

									}
									
                    			?>
                            
                            </select>

                        </div>
                       
                        <div class="input-group"><input type="hidden" name="id" value="63" >
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                        </div>
                         	
                    </form>
                
                
                    <table class="table table-hover table-striped">
                    <tr><th>#</th><th>Student ID</th><th>subject Name</th></tr>
                    
                    		<?php
                            	if (isset($_GET["go"])=="Load")
							{
								$subjectID= $_GET["subject"];
								$class = $_GET["class"];
								
								
								if ($subjectID and $class)
								{
									
									$stdntListSplit = highestSubjectScore($subjectID, $class);
									
										
										
										$sn = 1;
										for ($t=0; $t<count($stdntListSplit); $t++)
										{
											
											
									echo "<tr><td>$sn</td><td>".$stdntListSplit[$t]['student']."</td><td>".$stdntListSplit[$t]['score']."</td></tr>";
											$sn+=1;
										}
									
								}
							}
							?>
                    </table>
                   
                </div>
            </div>
	




<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>