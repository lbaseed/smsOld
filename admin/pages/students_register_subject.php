<?php include("../inc/html_controls.php");?>

<?php initializePage(); ?>

    <?php pageBodyTopSection();?>
<!-- content -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Register Subjects for Students</h3>
                </div>
                
                <div class="box-body">
                		
                        <div class="input-group">
                            <a href="<?php echo "?subID=1"; ?>"><button class="btn">Register Core Subjects</button></a> &nbsp &nbsp &nbsp
                            <a href="<?php echo "?subID=2"; ?>"><button class="btn">Register Optional Subjects</button></a>
                        </div>
                      <br><hr>
                      
					<?php
						if (isset($_GET["subID"]))
						{
							
					if ($_GET["subID"]=="1")
						
							
						{	echo "<label>Core Subjects Registration</label>";
						 
						 	if(isset($_POST["go"]) == "Register Subjects"){

								$term = "SECOND";
								$session = "2018/2019";
								$numrows = $_POST["numrows"];
								$split = explode("_",$_POST["class"]);
								$class = $split[0]; $subclass = $split[1];

								//get number of students in a class
								$stmt1 = $pdo->prepare("select studentID from students where class=:class and subClass =:subclass");
								$q = $stmt1->execute(['class'=>$class, 'subclass'=>$subclass]);
								$num_of_students = $stmt1->rowCount();
								
								$flag="";
								$flag2 = 0;
								
								if($num_of_students > 0){
									
									//loop through all the students
									foreach ($stmt1->fetchAll(PDO::FETCH_OBJ) as $row){
										
										
										$studentID = $row->studentID;

										for ($i=0; $i< $numrows; $i++) { 
											$recID3 = time() + rand(0,999) + rand(55,111);
											$subjectID= $_POST["sb_$i"]; 

											if($subjectID){
												//check for already registered subject
												$stmt2 = $pdo->prepare("select * from reg_subjects where studentID=:studentID and subjectID=:subjectID and session=:session");
												$chk = $stmt2->execute([
													'studentID'=>$studentID,
													'subjectID'=>$subjectID,
													'session' => $session
													]);
												
												if($stmt2->rowCount() > 0){$flag="ignored";}
												
												else{
													$recID = time() + rand(0,999) + rand(03,777);
													$stmt = $pdo->prepare("insert into reg_subjects (recID, studentID,subjectID,session,remark)values(:recID,:studentID,:subjectID,:session,:remark)");
													$q2 = $stmt->execute(['recID'=>$recID,
													'studentID'=> $studentID,
													'subjectID'=>$subjectID,
													'session'=>$session,
													'remark'=>''
													]);

													$tbl = "sc_".$subjectID;
													$stmt4 = $pdo->prepare("insert into $tbl (recID, ref, studentID,ca1,ca2,ca3,ca4,exam,total,term,session) values(:recID,:ref, :studentID,:ca1,:ca2,:ca3,:ca4,:exam,:total,:term,:session)");
													$q31 = $stmt4->execute([
														'recID'=>$recID3,
														'ref'=>$recID,
														'studentID'=>$studentID,
														'ca1' => '',
														'ca2' => '',
														'ca3' => '',
														'ca4' => '',
														'exam' => '',
														'total' => '',
														'term' => 'FIRST',
														'session'=> $session
														]);
													$recID3 += 6 + rand (0,99);
													$q32 = $stmt4->execute([
														'recID'=>$recID3,
														'ref'=>$recID,
														'studentID'=>$studentID,
														'ca1' => '',
														'ca2' => '',
														'ca3' => '',
														'ca4' => '',
														'exam' => '',
														'total' => '',
														'term' => 'SECOND',
														'session'=> $session
														]);
													$recID3+= 9 + rand(99, 199);
													$q33 = $stmt4->execute([
														'recID'=>$recID3,
														'ref'=>$recID,
														'studentID'=>$studentID,
														'ca1' => '',
														'ca2' => '',
														'ca3' => '',
														'ca4' => '',
														'exam' => '',
														'total' => '',
														'term' => 'THIRD',
														'session'=> $session
														]);
													

													if ($q2 and $q31 and $q32 and $q33) {$flag2+=1;}

												}
											}
										}
										//looping through selected subjects;
										if ($flag=="ignored") {echo "<div class='alert alert-info'>Duplicate Subject Ignored</div>"; $flag="";}

								
									}
									//end of looping through students
											if ($flag2!=0) {echo "<div class='alert alert-success'>Operation Success</div>"; $flag2="";}
											else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
									
									
								} else {echo "<div class='alert alert-info'>Currently no students in $class _ $subclass</div>";}
								
								
							}//end of on post checking
						 ?>
					
					<form action="" method="post">	
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
								
                           		 <?php
		
									$sql = "select * from classes order by `classid` ASC";
									$stmt = $pdo->prepare($sql);
						 			$stmt -> execute();
									if($stmt->rowCount() > 0){
										$i=1;
										
										while( $row = $stmt->fetch(PDO::FETCH_OBJ)){
											$cid = $row->classid;
											echo "<option value='$cid'>$cid</option>";
											$i++;
										}

									}
					
                    			?>
                            
                            </select>
                            
                        </div>
                        <br><hr>
                        <div class="input-group">
                        	<?php
								$sql = 'select * from subjects where type=:type order by `subjectID` ASC';
								$stmt = $pdo->prepare($sql);
						 		$stmt -> execute(['type'=>"CORE"]);
						 		$rows = $stmt -> rowCount();
								if($stmt->rowCount() > 0){
									$i=0;
									while($row = $stmt->fetch(PDO::FETCH_OBJ)){
										$sid = $row->subjectID; $sTitle = $row->subjectTitle;
										echo "<label>$sTitle :  <input type='checkbox' name='sb_$i' value='$sid' /></label> &nbsp &nbsp ";
										$i++;
									}
									echo "<input type='hidden' name='numrows' value='$rows' />";
								}
                            	

							?>
                        </div>
                        
                        
                       <br><hr><br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register Subjects" name="go" />
                        </div>
                     </form>   
                		
                      <?php 
						
						
						}//end of subID 1
					
						
					elseif ($_GET["subID"]=="2")
					  {
						  echo "<label>Optional Subjects Registration</label>";
						  //optional subjects registration
					  ?> 
                      
                      <form action="" method="post">	
                    
                        <div class="input-group">
                        	<select class="form-control" name="class">
                            <option value="">Select Class</option>
                           		 <?php
									$sql = 'select * from classes order by `classid` ASC';
									$stmt = $pdo->prepare($sql);
									$stmt->execute();
									if($stmt->rowCount() > 0){
										$i=1;
										while($row = $stmt->fetch(PDO::FETCH_OBJ)){
											$cid = $row->classid; $cTeacher = $row->classTeacher;
											echo "<option value='$cid'>$cid</option>";
											$i++;
										}
									}

                    			?>
                            
                            </select>
                            
                        </div>

                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Load Students" name="load" />
                        </div>
                     </form>
					
					<br><hr>
                      <?php
	
						if (isset($_POST["reg"])){
							
							$num = $_POST["rows"];
							$term = "SECOND";
							$session = "2018/2019";
							$recID1 = time();
							$recID2 = time() + 20;
							$oSubject = $_POST["oSubjects"];
							$tbl1 = strtolower("sc_".$oSubject);
							$flag1 = "";

							$recID3 = time() + rand(000, 9999);
							for($i=1; $i<=$num; $i++){
								$InsertStdntID = $_POST["sdt_$i"];
								if($InsertStdntID and $oSubject!=""){
									$sql = 'select * from reg_subject where studentID = :studentID and  subjectID = :subjectID and session = :session';
									$stmt = $pdo->prepare($sql);
									$stmt->execute([
										'studentID'=> $InsertStdntID,
										'subjectID'=> $oSubject,
										'session'=> $session
									]);

									if($stmt->rowCount() > 0){
										$flag="ignored";
									}else{
										$stmt = $pdo->prepare('insert into reg_subjects values(:recID, :studentID, :subjectID, :session, :remark)');
										$q = $stmt->execute(['recID'=>$recID1,
											'studentID'=>$InsertStdntID,
											'subjectID'=>$oSubject,
											'session'=>$session,
											'remark'=>''										
										]);
										$stmt = $pdo->prepare("insert into $tbl1 values(:recID,:ref, :studentID,:ca1,:ca2,:ca3,:ca4,:exam,:total,:term,:session)");
										$q31 = $stmt->execute([
											'recID'=>$recID3,
											'ref'=>$recID,
											'studentID'=>$studentID,
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => 'FIRST',
											'session'=> $session
											]);
										$stmt = $pdo->prepare("insert into $tbl1 values(:recID,:ref, :studentID,:ca1,:ca2,:ca3,:ca4,:exam,:total,:term,:session)");
										$q32 = $stmt->execute([
											'recID'=>$recID3,
											'ref'=>$recID,
											'studentID'=>$studentID,
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => '',
											'' => 'SECOND',
											'session'=> $session
											]);
											$recID3+= rand(0,99792);
											$stmt = $pdo->prepare("insert into $tbl1 values(:recID,:ref, :studentID,:ca1,:ca2,:ca3,:ca4,:exam,:total,:term,:session)");
											$q33 = $stmt->execute([
												'recID'=>$recID3,
												'ref'=>$recID,
												'studentID'=>$studentID,
												'' => '',
												'' => '',
												'' => '',
												'' => '',
												'' => '',
												'' => '',
												'' => 'SECOND',
												'session'=> $session
												]);
												$recID3+= rand(0,99792);
									}
									$recID1 += 23;
									if ($q and $q31 and $q32 and $q33){ $flag1 += $i;}
								}
								if ($flag=="ignored") {echo "<div class='alert alert-info'>Duplicate Subject for a student Ignored</div>"; }
								if ($flag1!="") {echo "<div class='alert alert-success'>Operation Success</div>";}
								
								else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
							}

						 //optional subjects registration
		 				
						// if ($_POST["reg"]=="Register Students")
						// {
						// 	$num = $_POST["rows"];
						// 	$term = $_SESSION["term"];
						// 	$session = $_SESSION["session"];
						// 	$recID1 = time();
						// 	$recID2 = time() + 20;
						// 	$oSubject = $_POST["oSubjects"];
						// 	$tbl1 = strtolower("sc_".$oSubject);
						// 	$flag1 = "";
							
						// 	$recID3 = time() + rand(000, 9999);
							
						// 	for ($i=1; $i<=$num; $i++)
						// 	{
						// 		$InsertStdntID = $_POST["sdt_$i"];
								
						// 		if ($InsertStdntID and $oSubject!="")
						// 		{
						// 			$chck = mysql_query("select * from reg_subjects where studentID='$InsertStdntID' and subjectID='$oSubject' and session='$session' ") or die (mysql_error());
						// 							if (@mysql_num_rows($chck)>0) {$flag="ignored";}
						// 							else
						// 							{
														
						// 			$q = mysql_query("insert into reg_subjects values('$recID1','$InsertStdntID','$oSubject','$session','')");
													
						// 			$q31 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
						// 						'FIRST','$session')");
						// 						$recID3+= rand(0,99592);
						// 						$q32 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
						// 						'SECOND','$session')");
						// 						$recID3+= rand(0,99792);
						// 						$q33 = mysql_query("insert into $tbl1 values('$recID3','$recID1','$InsertStdntID','','','','','','',
						// 						'THIRD','$session')");
						// 						$recID3+= rand(0,99792);
												
									
						// 							}
									
						// 			$recID1 += 23;
						// 			if ($q and $q31 and $q32 and $q33){ $flag1 += $i;}
						// 		}
						// 	}
							
									
						// 			if ($flag=="ignored") {echo "<div class='alert alert-info'>Duplicate Subject for a student Ignored</div>"; }
						// 			if ($flag1!="") {echo "<div class='alert alert-success'>Operation Success</div>";}
						// 			else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
							
							
						// }
		 					
						}
					  ?>
                      <form action="" method="post">
                      	
                        	<div class="input-group">
                            	<select class="form-control" name="oSubjects">
                            <option value="">Select Subjects</option>
                        	<?php
								$sp2 = substr($_POST["class"],0,1);
								if ($sp2=="S") {
									$stmt = $pdo->prepare("select * from subjects where category=:category and type=:type and status=:status order by `subjectID` ASC");
									$stmt->execute([
										'category'=>'POSTBASIC',
										'type'=>'OPTIONAL',
										'status'=> 'ACTIVE'
									]);
									if($stmt->rowCount() > 0){
										$i=1;
										while($row = $stmt->fetch(PDO::FETCH_OBJ)){
											$sid = $row->subjectID; $sTitle = $row->subjectTitle;
											echo "<option value='$sid'>$sTitle</option> ";
											$i++;
										}

									}
								}else if($sp2=="J" or $sp2=="P")
								{
									$stmt = $pdo->prepare("select * from subjects where category= :category and  type=:type and status=:status order by `subjectID` ASC");
									$stmt->execute(['category'=>'BASIC',
											'type'=>'OPTIONAL',
											'status'=> 'ACTIVE'
									]);

									if($stmt->rowCount() > 0){
										$i=1;
										while($row = $stmt->fetch(PDO::FETCH_OBJ)){
											$sid = $row->subjectID; $sTitle = $row->subjectTitle;
											echo "<option value='$sid'>$sTitle</option> ";
											$i++;
										}
									}
								}

								$sql = "select * from subjects where category=:category and type=:type and status=:status order by `subjectID` ASC";
								$stmt = $pdo->prepare($sql);
								$stmt->execute([
									'category'=>'BOTH',
									'type'=>'OPTIONAL',
									'status'=>'ACTIVE'
								]);
								if($stmt->rowCount() > 0)
								{
									$i=1;
									while($row = $stmt->fetch(PDO::FETCH_OBJ)){
										$sid = $row->subjectID; $sTitle= $row->subjectTitle;
										echo "<option value='$sid'>$sTitle</option> ";
									}$i++;
								}

								// $sp2 = substr($_POST["class"],0,1);
								// if ($sp2=="S")
								// {
                            	// $q = mysql_query("select * from subjects where category='POSTBASIC' and type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
								// 		if (@mysql_num_rows($q)>0)
								// 		{
											
								// 			for ($i=1; $i<=@mysql_num_rows($q); $i++)
								// 			{
								// 				$rec= mysql_fetch_array($q);
								// 				$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
												
								// 				echo "<option value='$sid'>$sTitle</option> ";
								// 			}
											
											
								// 		}
								// }
								// else if ($sp2=="J" or $sp2=="P")
								// {
                            	// $q = mysql_query("select * from subjects where category='BASIC' and  type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
								// 		if (@mysql_num_rows($q)>0)
								// 		{
								// 			$rows = mysql_num_rows($q);
								// 			for ($i=1; $i<=$rows; $i++)
								// 			{
								// 				$rec= mysql_fetch_array($q);
								// 				$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
												
								// 				echo "<option value='$sid'>$sTitle</option> ";
								// 			}
											
								// 		}
								// }
								
								
                            	// $qAll = mysql_query("select * from subjects where category='BOTH' and type='OPTIONAL' and status='ACTIVE' order by `subjectID` ASC");
								// if (@mysql_num_rows($qAll)>0)
								// {
									
								// 	for ($i=1; $i<=mysql_num_rows($qAll); $i++)
								// 	{
								// 		$rec= mysql_fetch_array($qAll);
								// 		$sid = $rec["subjectID"]; $sTitle= $rec["subjectTitle"];
										
								// 		echo "<option value='$sid'>$sTitle</option> ";
								// 	}
									
									
								// }
							?>
                            </select>
                            </div>
                            <br>
                            	<table class="table table-hover">
                                	<tr> <th>#</th> 
                                    <th><input type="checkbox" name="" value="" onClick="this.value=check(this.form.list)"></th> 
                                    <th>Student ID</th> <th>Student Name</th></tr>
                                    <?php
							if (isset($_POST["load"]))
							{
											if ($_POST["load"]=="Load Students")
											{
												$class = $_POST["class"];
												$split = explode("_",$class);

												$sql = "select * from students where class=:class and subClass=:subClass";
												$stmt = $pdo->prepare($sql);
												$stmt->execute([
													'class'=>$split[0],
													'subClass'=>$split[1]
												]);

												if($stmt->rowCount() > 0)
												{
													$i = 1;
													while($row = $stmt->fetch(PDO::FETCH_OBJ)){
														$stdntID = $row->studentID; $fullName = $row->lastName.' '.' '.$row->firstName.' '.$row->otherNames;
														echo "<tr> <td>$i</td> 
													<td> <input type='checkbox' id=list name='sdt_$i' value='$stdntID'> </td> 
													<td>$stdntID</td> <td>$fullName</td></tr>";
													$i++; 	
													}
													echo "<input type='hidden' name='rows' value='$stdntNum' />";
												}
											}
							}
										
									
									?>
                                </table>
                            <br>
                            
                            
                            <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Register Students" name="reg" />
                        	</div>
                      </form>
					
					
					
					<?php } //end of sub 2 
					
						}
					?>
					
                </div>
                
            </div>


<?php pageBodyFooterSection(); ?>

	<!--can right side bar here -->
<?php  endPage(); ?>
