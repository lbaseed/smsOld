<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

		  <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Students Records
                    	<?php
			if (isset($_GET["stdntClass"])){
                        	echo " || <b>".$_GET["stdntClass"]. "</b> Broad Sheet";
			}
						?>
                    </h3>
                </div>
                
                <div class="box-body" style="overflow:scroll">
                
                	<form action="" method="get" >
                    
                        
                       <div class="input-group">
                        	<select class="form-control" name="stdntClass">
                            <option value="SELECT">Select Class</option>
                            
                           		 <?php
							
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
                        

                        </div>
                       <br>
                        <div class="input-group"> <input type="hidden" name="id" value="61" />
                        
                            <input type="submit" class="btn btn-info" value="Load" name="go" />
                         </div>
                        </form>
                        
                         
                         	
                    
                    <br>
                    
                    
                    <?php

				if(isset($_GET["stdntClass"])) { $currClass= $_GET["stdntClass"];
			
		?>
		<div class="input-group pull-right">
                            <a href="<?php $cl=$_GET["stdntClass"]; echo "../forms/classBroadSheet.php?stdntClass=$cl";?>" target="_blank">
                            <button class="btn btn-primary">Export PDF</button></a>
                        </div>
			
		<?php			
						echo '
								<table class="table table-hover table-striped" width=1200>
                    			<tr><th>#</th><th>Student ID</th>
						';	
							//basic subjects
							 
							
							$subjectList = "";
							if (substr($currClass,0,1)=="J" or substr($currClass,0,1)=="P")
							{

								$stmt = $pdo->query("SELECT * FROM subjects WHERE category = 'BASIC' ORDER BY `subjectID`");

								$rows = $stmt->rowCount();
								if ($rows>0)
								{
									
									while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

										$subjectID = $row->subjectID;
										$sTitle = $row->subjectTitle;

										$subjectList = $subjectList . ",". $subjectID;

									}

								}


							}
							//post basic subjects
							else if (substr($currClass,0,1)=="S")
							{
								$stmt = $pdo->query("SELECT * FROM subjects WHERE category = 'POSTBASIC' ORDER BY `subjectID`");

								$rows = $stmt->rowCount();
								if ($rows>0)
								{
									
									while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

										$subjectID = $row->subjectID;
										$sTitle = $row->subjectTitle;

										$subjectList = $subjectList . ",". $subjectID;

									}

								}

							}
							
							//both basic and postBasic

							$stmt = $pdo->query("SELECT * FROM subjects WHERE category = 'BOTH' ORDER BY `subjectID`");

							$rows = $stmt->rowCount();
							if ($rows>0)
							{
								
								while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

									$subjectID = $row->subjectID;
									$sTitle = $row->subjectTitle;

									$subjectList = $subjectList . ",". $subjectID;

								}

							}

									
							$lst = explode(",", $subjectList);
							sort($lst);
							for ($k=0; $k<sizeof($lst); $k++)
							{
								
								echo "<th>$lst[$k]</th>";
							}
                    	
					echo '<th>Total Score</th></tr>';
					
                    	
							$split = explode("_",$currClass);
							$mclass= $split[0];
							$sclass= $split[1];

							$totalScore = "";

							$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subClass = :sclass");
							$stmt->execute(['mclass' => $mclass, 'sclass' => $sclass]);
							$students = $stmt->fetchALL(PDO::FETCH_OBJ);

							$rows = $stmt->rowCount();
							if ($rows>0){

								$i = 1;
								foreach ($students as $student) {
									$stdntID = $student->studentID;
									echo "<tr> <td>$i</td> <td>$stdntID</td>";
	
									$subject= explode(",",$subjectList);
										sort($subject);
											for ($j=0; $j<count($subject); $j++ )
											{
												
												$subjectID = $subject[$j];
												$tbl = strtolower("sc_".$subjectID);
												
												//get record ID of student\'s subject score
												$recID = getSubjectRegID($stdntID, $subjectID);

												//$term = $_SESSION["term"];
												$term = 'first';
												$score = getSubjectScore($recID, $tbl, $term);
												echo "<td>$score</td>";
												
												$totalScore +=$score;
											}
										
										echo "<td><b>$totalScore</b></td>";
										echo "</tr>";

										$i ++;
	
								}

							}

							


							
						
						
						echo '</table>';
			}
					?>
                    
                    
                </div>
            </div>

			<?php pageBodyFooterSection();?>

<!--can right side bar here -->


<?php  endPage();?>