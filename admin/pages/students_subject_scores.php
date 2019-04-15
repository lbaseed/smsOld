<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>



          <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Input Subjects Scores 
                    <?php if (isset($_GET["class"]) and isset($_GET["subject"]))  
							{echo "[<b>". getSubjectName($_GET["subject"]) ."</b> for <b>". $_GET["class"]."</b>]";}
							
					?>
                    </h3>
                </div>
                
                <div class="box-body">
                
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

											echo "<option value='$row->subjectID'>$row->subjectTitle</option>";

										}

									}
							
                    			?>
                            
                            </select>

                        </div>
                       
                        <div class="input-group"><input type="hidden" name="id" value="71" >
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                            
                        </div>
                        <div class="input-group  pull-right">
                            <a href="<?php echo "forms/scoreSheet.php?class=".$_GET["class"]."&subject=".$_GET["subject"].""; ?>" target="_blank"><input type="button" class="btn btn-info" value="Score Sheet" /></a>
                        </div>
                         	
                    </form>
                    <br>
                    	<?php
                        	if (isset($_POST["save"])=="Save")
							{
								$actvTbl = strtolower("sc_".$_POST["tbl"]);
								$recRows = $_POST["rows"];
								
								for ($k=1; $k<=$recRows; $k++)
								{
									$arecID = $_POST["rec_$k"];
									
									$uca1 =  mysql_real_escape_string(filter_var($_POST["ca1_$k"], FILTER_SANITIZE_STRING));
									$uca2 =  mysql_real_escape_string(filter_var($_POST["ca2_$k"], FILTER_SANITIZE_STRING));
									$uca3 = mysql_real_escape_string(filter_var($_POST["ca3_$k"], FILTER_SANITIZE_STRING));
									$uca4 = mysql_real_escape_string(filter_var($_POST["ca4_$k"], FILTER_SANITIZE_STRING));
									$uexam = mysql_real_escape_string(filter_var($_POST["exam_$k"], FILTER_SANITIZE_STRING));
									$total = $uca1 + $uca2 + $uca3 + $uca4 + $uexam;
									
									$stmt = $pdo->prepare("UPDATE $actvTbl SET ca1=:uca1 , ca2=:uca2, ca3=:uca3, ca4=:uca4, exam=:uexam, total=:total WHERE recID = :arecID ");
									$query = $stmt->execute(['uca1' => $uca1, 'uca2' => $uca2, 'uca3' => $uca3, 'uca4' => $uca4, 'uexam' => $uexam, 'total'=> $total, 'arecID'=>$arecID]);

									if ($query) {$flag="success";}
								}
								if ($flag=="success") {echo "<div class='alert alert-success'>Operation success</div>";}
									else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								
							}
						?>
                    <form action="" method="post">
                	<table class="table table-hover">
                    	<tr><th>#</th><th>Student ID</th><th>CA1</th><th>CA2</th><th>CA3</th><th>CA4</th><th>EXAM</th><th>TOTAL</th></tr>
                        <?php
							if (isset($_GET["go"])=="Load")
							{
								$subjectID= $_GET["subject"];
								
								$split = explode ("_",$_GET["class"]);
								$mclass = $split[0];
								$subclass = $split[1];
								//$term = $_SESSION["term"];
								$term = 'first';
								//$session = $_SESSION["session"];
								$session = '2018/2019';
								if ($subjectID and $_GET["class"])
								{
									$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass ");
									$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);

									$rows = $stmt->rowCount();

									if ($rows>0)
									{
							
										for ($i=1; $i<=$rows; $i++)
										{
											$row = $stmt->fetch(PDO::FETCH_OBJ);
											$studentID = $row->studentID;

											$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :session ");
											$stmt->execute(['studentID' => $studentID, 'subjectID' => $subjectID, 'session' => $session]);

											$rows = $stmt->rowCount();
											
											if ($rows > 0)
											{
												
												$row = $stmt->fetch(PDO::FETCH_OBJ);

												$recID = $row->recID;
												$tbl = "sc_".$subjectID;

												$stmt = $pdo->prepare("SELECT * FROM $tbl WHERE ref = :recID AND term = :term ");
												$stmt->execute(['recID' => $recID, 'term' => $term]);

												$rows = $stmt->rowCount();

												if ($rows > 0)
												{
													$row = $stmt->fetch(PDO::FETCH_OBJ);
													$sid = $row->studentID;
													$scoreRec = $row->recID;
													
													$ca1 = $row->ca1; 
													$ca2 = $row->ca2; 
													$ca3 = $row->ca3;  
													$ca4 = $row->ca4;
													$exam = $row->exam; 
													$total = $row->total;

												echo "<tr> <td>$i</td> 
											<td><input type='hidden' name='rec_$i' value='$scoreRec'>$sid</td> 
											<td><input type='text' name='ca1_$i' class='form-control' style='width:50px;' value='$ca1' /></td> 
											<td><input type='text' name='ca2_$i' class='form-control' style='width:50px;' value='$ca2' /></td> 
											<td><input type='text' name='ca3_$i' class='form-control' style='width:50px;' value='$ca3' /></td>
											<td><input type='text' name='ca4_$i' class='form-control' style='width:50px;' value='$ca4' /></td> 
											<td><input type='text' name='exam_$i' class='form-control' style='width:50px;' value='$exam' /></td> 
											<td><input type='text' name='total_$i' disabled class='form-control' style='width:50px;' value='$total' /></td>
												</tr>";	
												}
												
											}//check record availability in registered subjects table
											
										}// end of loping students table
									}
									else { //use header redirection for appropriate location of error msg 
									}
								}
							}
						?>
                    </table>
                    
                    <br>
                        <div class="input-group pull-right col-lg-4">
                        <input type="hidden" name="tbl" value="<?php echo $subjectID?>" />
                        <input type="hidden" name="rows" value="<?php echo $rows?>" />
                            <input type="submit" class="btn btn-success" value="Save" name="save" />
                        </div>
                	</form>
                </div>
                
           	</div>
		
		<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>