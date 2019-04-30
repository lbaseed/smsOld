<?php 
	ob_start(); 
	session_start(); 
	 date_default_timezone_set("Africa/Lagos");  
	 //require "config.php";
	 include('config.php');
	
	//auto logout function
	function autologout(){		
	if (isset( $_SESSION["ctime"]))
		{
			
			$_SESSION["timeN"]= time();
			$time_dif= $_SESSION["timeN"] - $_SESSION["ctime"];
			
		}else { $_SESSION["ctime"]= time();}
			
			if ($time_dif > 1800)
			{
			unset($_SESSION["ctime"]);
			header ("Location: .../login.php?id=lout");
			}
			else
			{	
				$_SESSION["ctime"]= time();
			}
	}
	
	//getting file extention function
	function getExtension($str) {
	$i = strrpos($str, ".");
	if (!$i) 
	return "";
	$l = strlen($str)-$i;
	$ext = substr($str, $i+1, $l);
	return $ext;
	}
	
	//picture upload function
	function upload($name, $fileName, $location, $asize)
	{
		$nm = $_FILES["$name"]["name"];
		$size = $_FILES["$name"]["size"];
		$tmp = $_FILES["$name"]["tmp_name"];
		$extn = getExtension($nm);
		
		if ($size < $asize)
		{
			if ($extn=="jpg" || $extn=="gif" ||$extn=="png" || $extn=="JPG" || $extn=="GIF" || $extn=="PNG" )
			{
				$dstName = $fileName.".".$extn;
				$copy = copy($tmp, "../files/$location/". $dstName);
		
				if ($copy) {return $dstName;}
		
			}	else {echo "<div class='alert alert-danger'>File format not accepted"; exit;}
		}	else {echo "<div class='alert alert-danger'>File size too big"; exit;}
	}
	
	//documents upload function
	function fileUpload($name, $fileName, $location, $asize)
	{
		$nm = $_FILES["$name"]["name"];
		$size = $_FILES["$name"]["size"];
		$tmp = $_FILES["$name"]["tmp_name"];
		$extn = getExtension($nm);
		
		if ($size < $asize)
		{
			if ($extn=="doc" || $extn=="docx" || $extn=="ppt" || $extn=="pptx" || $extn=="pdf" || $extn=="xlcx" || $extn=="xlc" )
			{
				$dstName = $fileName.".".$extn;
				$copy = copy($tmp, "files/$location/". $dstName);
		
				if ($copy) {return $dstName;}
		
			}	else {echo "<div class='alert alert-danger'>File format not accepted"; exit;}
		}	else {echo "<div class='alert laert-danger'>File size too big"; exit;}
	}
	
	function setAcademicSession()
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM sessions WHERE status = :status");
		$stmt->execute(['status' => 'CURRENT']);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);
			$session = $row->session;
			$term = $row->term;
			
			$_SESSION["session"] = $session; 
			$_SESSION["term"] = $term;
		}
	}

	//activate new term
	function activateTerm($term, $session)
	{	
		global $pdo;

		$cterm = $_SESSION["term"];  
		$csession = $_SESSION["session"];

		$stmt = $pdo->prepare("UPDATE sessions SET status = :status WHERE term = :cterm AND session = :csession ");
		$stmt->execute(['status' => 'PAST', 'cterm' => $cterm, 'csession' => $csession]);

		$stmt = $pdo->prepare("UPDATE sessions SET status = :status WHERE term = :term AND session = :session ");
		$stmt->execute(['status' => 'CURRENT', 'term' => $term, 'session' => $session]);

		setAcademicSession();
	}
	
	function getSubjectName($subjectID)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM subjects WHERE subjectID = :subjectID ");
		$stmt->execute(['subjectID' => $subjectID]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$subjectTitle = $row->subjectTitle;
			
		}
		return $subjectTitle;
	}
	
	function getGrade($stdntScore)
	{
		if ($stdntScore>=75) {return "A";}
		else if ($stdntScore>=60) {return "B";}
		else if ($stdntScore>=50) {return "C";}
		else if ($stdntScore>=45) {return "D";}
		else if ($stdntScore>=40) {return "E";} 
		else {return "F";}
	}

	function getRemark($grade)
	{
		if ($grade =="A") {return "EXCELLENT";}
		if ($grade =="B") {return "GOOD";}
		if ($grade =="C") {return "CREDIT";}
		if ($grade =="D") {return "PASS";}
		if ($grade =="E") {return "PASS";}
		if ($grade =="F") {return "FAILED";}
	}
	
	function getStaffName($staffID)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM staff WHERE staffID = :staffID ");
		$stmt->execute(['staffID' => $staffID]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$fullName = $row->LastName.', '.$row->firstName.' '.$row->otherNames;

			return $fullName;
		}

	}
	
	function getStaffLastName($staffID)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM staff WHERE staffID = :staffID");
		$stmt->execute(['staffID' => $staffID]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$lastName = $row->LastName;

			return $lastName;
		}

	}
	
	function getStudentName($studentID)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE studentID = :studentID");
		$stmt->execute(['studentID' => $studentID ]);

		$rows = $stmt->rowCount();

		if($rows > 0){

			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$fullName = $row->LastName.' , '.$row->firstName.' '.$row->otherNames;

			return $fullName;
		}

		
	}
	
	function getSchoolFees($term, $session)
	{
		global $pdo;

		$stmt  = $pdo->prepare("SELECT * FROM fees WHERE term =:term AND session =:session");
		$stmt->execute(['term'=> $term, 'session' => $session ]);

		while($row = $stmt->fetch(PDO::FETCH_OBJ)){

			 $fees = $row->fees;

			 return $fees;
		}
		
		
	}
	
	function getSchoolFeesPaid($sid, $term, $session)
	{
		global $pdo;

		$stmt  = $pdo->prepare("SELECT * FROM transaction WHERE studentID= :sid AND term = :term AND session= :session");
		$stmt->execute(['sid' => $sid, 'term' => $term, 'session' => $session ]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$amount = $row->amountPaid;

			return $amount;

		}
		else{
			return 0;
		}

	}
	
	function getSchoolFeesBalance($sid, $term, $session)
	{
		global $pdo;

		$stmt  = $pdo->prepare("SELECT * FROM transaction WHERE studentID= :sid AND term = :term AND session= :session");
		$stmt->execute(['sid' => $sid, 'term' => $term, 'session' => $session ]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$amount = $row->balance;

			return $amount;

		}else{
			return 0;
		}

	}

	function getSubjectRegID($stdntID, $subjectID)
	{
		global $pdo;
		//$term = $_SESSION["term"];
		$term = 'first';
		//$session = $_SESSION["session"];
		$session = '2017/2018';
		$recID = "";

		$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :stdntID AND subjectID = :subjectID AND session = :session");
		$stmt->execute(['stdntID' => $stdntID, 'subjectID' => $subjectID, 'session'=> $session]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$recID = $row->recID;
		}
		
		
		return $recID;
	}
	
	function getSubjectScore($recID, $tbl, $term)
	{

		$score = "";

		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM $tbl WHERE ref = :ref AND term = :term");
		$stmt->execute(['ref' => $recID, 'term' => $term]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$score = $row->total;
		}
		
		
		return $score;
		
	}

	//highest subject scorer
	function highestSubjectScore($subjectID, $class)
	{

		$split = explode ("_",$class);
		$mclass = $split[0]; 
		$subclass = $split[1];
		//$term = $_SESSION["term"];
		$term = 'FIRST';
		//$session = $_SESSION["session"];
		$session = '2018/2019';
		
		$studentList = array(array());

		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass");
		$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			for ($i=0; $i<$rows; $i++)
			{
				$row = $stmt->fetch(PDO::FETCH_OBJ); 

				$studentID = $row->studentID;

				$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :acsession");
				$stmt->execute(['studentID' => $studentID, 'subjectID' => $subjectID, 'acsession' => $session]);

				$rows = $stmt->rowCount();

				if ($rows>0)
				{
					$row = $stmt->fetch(PDO::FETCH_OBJ);

					$recID = $row->recID;
					$tbl = strtolower("sc_".$subjectID);

					$score = getSubjectScore($recID, $tbl, $term);

						//$newData = array('score'=>$score,'student'=>$studentID);
							
						$studentList[$i]['score'] = $score;
						$studentList[$i]['student']= $studentID;
									
							}//check record availability in registered subjects table
							
						}// end of loping students table
						

						
						foreach ($studentList as $key => $row) {
								$sscore[$key] = $row['score'];
							}
							
							array_multisort($sscore, SORT_DESC, $studentList);

						return $studentList;
					}


									
	}

	//lowest in class
	function lowestSubjectScore($subjectID, $class)
	{

								$split = explode ("_",$class);
								$mclass = $split[0]; $subclass = $split[1];
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];

								
								$studentList = array(array());

								global $pdo;
						
								$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass");
								$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);
						
								$rows = $stmt->rowCount();
						
								if ($rows>0)
								{
									for ($i=0; $i<$rows; $i++)
									{
										$row = $stmt->fetch(PDO::FETCH_OBJ); 
						
										$studentID = $row->studentID;
						
										$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :acsession");
										$stmt->execute(['studentID' => $studentID, 'subjectID' => $subjectID, 'acsession' => $session]);
						
										$rows = $stmt->rowCount();
						
										if ($rows>0)
										{
											$row = $stmt->fetch(PDO::FETCH_OBJ);
						
											$recID = $row->recID;
											$tbl = strtolower("sc_".$subjectID);
						
											$score = getSubjectScore($recID, $tbl, $term);
						
												//$newData = array('score'=>$score,'student'=>$studentID);
													
												$studentList[$i]['score'] = $score;
												$studentList[$i]['student']= $studentID;
															
										}//check record availability in registered subjects table
													
									}// end of loping students table
								
							
												
						
												
												foreach ($studentList as $key => $row) {
														$sscore[$key] = $row['score'];
													}
													
													array_multisort($sscore, SORT_ASC, $studentList);
						
												return $studentList;

	}


						// $q = mysql_query("select * from students where class='$mclass' and subclass='$subclass'") or die (mysql_error());
						// 			if (@mysql_num_rows($q)>0)
						// 			{
						// 				$rows = mysql_num_rows($q);
										
						// 				for ($i=0; $i<$rows; $i++)
						// 				{
						// 					$rec = mysql_fetch_array($q);
						// 					$studentID = $rec["studentID"];
											
						// 					$q2 = mysql_query("select * from reg_subjects where studentID='$studentID' and subjectID='$subjectID' and session='$session'");
						// 					if (@mysql_num_rows($q2)>0)
						// 					{
												
						// 						$recID = mysql_result($q2,0,"recID");
						// 						$tbl = strtolower("sc_".$subjectID);
												
												
						// 						$score = getSubjectScore($recID, $tbl, $term);
													
						// 							//$newData = array('score'=>$score,'student'=>$studentID);
													
						// 						$studentList[$i]['score'] = $score;
						// 						$studentList[$i]['student']= $studentID;
													
						// 					}//check record availability in registered subjects table
											
						// 				}// end of loping students table
										

										
						// 				foreach ($studentList as $key => $row) {
						// 						$sscore[$key] = $row['score'];
						// 					}
											
						// 					array_multisort($sscore, SORT_ASC, $studentList);
						
						// 				return $studentList;
						// 			}
//}
	
	//highest in class cumulative
	function highestSubjectScoreCumulative($subjectID, $class)
	{

								$split = explode ("_",$class);
								$mclass = $split[0]; $subclass = $split[1];
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];
								
								$studentList = array(array());


								global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass");
		$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			for ($i=0; $i<$rows; $i++)
			{
				$row = $stmt->fetch(PDO::FETCH_OBJ); 

				$studentID = $row->studentID;

				$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :acsession");
				$stmt->execute(['studentID' => $studentID, 'subjectID' => $subjectID, 'acsession' => $session]);

				$rows = $stmt->rowCount();

				if ($rows>0)
				{
					$row = $stmt->fetch(PDO::FETCH_OBJ);

					$recID = $row->recID;
					$tbl = strtolower("sc_".$subjectID);

					$fTerm = getSubjectScore($recID, $tbl, "FIRST");
					$sTerm = getSubjectScore($recID, $tbl, "SECOND");
					$tTerm = getSubjectScore($recID, $tbl, "THIRD");
					$score = round(($fTerm + $sTerm + $tTerm)/3,1);

						//$newData = array('score'=>$score,'student'=>$studentID);
							
						$studentList[$i]['score'] = $score;
						$studentList[$i]['student']= $studentID;
									
							}//check record availability in registered subjects table
							
						}// end of loping students table
						

						
						foreach ($studentList as $key => $row) {
								$sscore[$key] = $row['score'];
							}
							
							array_multisort($sscore, SORT_DESC, $studentList);

						return $studentList;
					}
	}	
						// $q = mysql_query("select * from students where class='$mclass' and subclass='$subclass'") or die (mysql_error());
						// 			if (@mysql_num_rows($q)>0)
						// 			{
						// 				$rows = mysql_num_rows($q);
										
						// 				for ($i=0; $i<$rows; $i++)
						// 				{
						// 					$rec = mysql_fetch_array($q);
						// 					$studentID = $rec["studentID"];
											
						// 					$q2 = mysql_query("select * from reg_subjects where studentID='$studentID' and subjectID='$subjectID' and session='$session'");
						// 					if (@mysql_num_rows($q2)>0)
						// 					{
												
						// 						$recID = mysql_result($q2,0,"recID");
						// 						$tbl = strtolower("sc_".$subjectID);
												
												
						// 						$fTerm = getSubjectScore($recID, $tbl, "FIRST");
						// 						$sTerm = getSubjectScore($recID, $tbl, "SECOND");
						// 						$tTerm = getSubjectScore($recID, $tbl, "THIRD");
						// 						$score = round(($fTerm + $sTerm + $tTerm)/3,1);
													
						// 							//$newData = array('score'=>$score,'student'=>$studentID);
													
						// 						$studentList[$i]['score'] = $score;
						// 						$studentList[$i]['student']= $studentID;
													
						// 					}//check record availability in registered subjects table
											
						// 				}// end of loping students table
										

										
						// 				foreach ($studentList as $key => $row) {
						// 						$sscore[$key] = $row['score'];
						// 					}
											
						// 					array_multisort($sscore, SORT_DESC, $studentList);
						
						// 				return $studentList;
						// 			}
	
	//lowest in class cumulative
	function lowestSubjectScoreCumulative($subjectID, $class)
	{

								$split = explode ("_",$class);
								$mclass = $split[0]; $subclass = $split[1];
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];
								
								$studentList = array(array());

								global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass");
		$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			for ($i=0; $i<$rows; $i++)
			{
				$row = $stmt->fetch(PDO::FETCH_OBJ); 

				$studentID = $row->studentID;

				$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :acsession");
				$stmt->execute(['studentID' => $studentID, 'subjectID' => $subjectID, 'acsession' => $session]);

				$rows = $stmt->rowCount();

				if ($rows>0)
				{
					$row = $stmt->fetch(PDO::FETCH_OBJ);

					$recID = $row->recID;
					$tbl = strtolower("sc_".$subjectID);

					$fTerm = getSubjectScore($recID, $tbl, "FIRST");
					$sTerm = getSubjectScore($recID, $tbl, "SECOND");
					$tTerm = getSubjectScore($recID, $tbl, "THIRD");
					$score = round(($fTerm + $sTerm + $tTerm)/3,1);

						//$newData = array('score'=>$score,'student'=>$studentID);
							
						$studentList[$i]['score'] = $score;
						$studentList[$i]['student']= $studentID;
									
							}//check record availability in registered subjects table
							
						}// end of loping students table
						

						
						foreach ($studentList as $key => $row) {
								$sscore[$key] = $row['score'];
							}
							
							array_multisort($sscore, SORT_ASC, $studentList);

						return $studentList;
					}
	}							
	// 					$q = mysql_query("select * from students where class='$mclass' and subclass='$subclass'") or die (mysql_error());
	// 								if (@mysql_num_rows($q)>0)
	// 								{
	// 									$rows = mysql_num_rows($q);
										
	// 									for ($i=0; $i<$rows; $i++)
	// 									{
	// 										$rec = mysql_fetch_array($q);
	// 										$studentID = $rec["studentID"];
											
	// 										$q2 = mysql_query("select * from reg_subjects where studentID='$studentID' and subjectID='$subjectID' and session='$session'");
	// 										if (@mysql_num_rows($q2)>0)
	// 										{
												
	// 											$recID = mysql_result($q2,0,"recID");
	// 											$tbl = strtolower("sc_".$subjectID);
												
	// 											$fTerm = getSubjectScore($recID, $tbl, "FIRST");
	// 											$sTerm = getSubjectScore($recID, $tbl, "SECOND");
	// 											$tTerm = getSubjectScore($recID, $tbl, "THIRD");
	// 											$score = round(($fTerm + $sTerm + $tTerm)/3,1);
													
	// 											$studentList[$i]['score'] = $score;
	// 											$studentList[$i]['student']= $studentID;
													
	// 										}//check record availability in registered subjects table
											
	// 									}// end of loping students table
										

										
	// 									foreach ($studentList as $key => $row) {
	// 											$sscore[$key] = $row['score'];
	// 										}
											
	// 										array_multisort($sscore, SORT_ASC, $studentList);
						
	// 									return $studentList;
	// 								}
	// }
	
	function getSchAttr($col)
	{
		global $pdo;

		$value = "";
		$recID = "10001";

		$stmt = $pdo->prepare("SELECT * FROM school WHERE recID = :recID");
		$stmt->execute(['recID' => $recID]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$value = $row->$col;

			return $value;
		}

		//$q = mysql_query("select * from school where recID='10001'") or die(mysql_error());
		//if (@mysql_num_rows($q)>0) { $value = mysql_result($q, 0, "$col"); 	}
		//return $value;
	}
	
	function getResumptionDate()
	{
		global $pdo;
		$value = "";

		$stmt = $pdo->prepare("SELECT * FROM sessions WHERE status = :status");
		$stmt->execute(['status' => 'NEXT']);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$value = $row->resumptionDate;

			return $value;

		}

	}
	
	//class boradsheet
	function classBroadSheet($currClass)
	{
		global $pdo;
		$theader = '
		
				<center><img src="../files/school/'.getSchAttr("logo").'" width="100" height="100" /><br>
					<b>'.getSchAttr("longName").'</b><br>
					<b>Broad Sheet for '.$currClass.'</b><br><br>
				</center>
				
				
			<table width=1200>
            		<tr style="background-color:#DEDEDE"><th>#</th><th>Student ID</th>
						';	
							//basic subjects
							
							$subjectList = "";
							if (substr($currClass,0,1)=="J" or substr($currClass,0,1)=="P")
							{
								$stmt = $pdo->prepare("SELECT * FROM subjects WHERE category = :category ORDER BY `subjectID` ");
								$stmt->execute(['category' => 'BASIC']);
								
								$rows = $stmt->rowCount();

								if ($rows > 0)
								{
									for ($i=0; $i < $rows; $i++ )
									{
										$row = $stmt->fetch(PDO::FETCH_OBJ);

										$subjectID = $row->subjectID;
										$sTitle = $row->subjectTitle;

										//echo "<th>$subjectID</th>";
										$subjectList = $subjectList . ",". $subjectID;
									}
								}
							}

							//post basic subjects
							else if (substr($currClass,0,1)=="S")
							{
								$stmt = $pdo->prepare("SELECT * FROM subjects WHERE category = :category ORDER BY `subjectID` ");
								$stmt->execute(['category' => 'POSTBASIC']);
									
								$rows = $stmt->rowCount();

								if ($rows > 0)
								{
									for ($i=0; $i < $rows; $i++ )
									{
										$row = $stmt->fetch(PDO::FETCH_OBJ);

										$subjectID = $row->subjectID; 
										$sTitle = $row->subjectTitle;
										//echo "<th>$subjectID</th>";
										$subjectList = $subjectList . ",". $subjectID;
									}
								}
							}
							
							//both basic abd postBasic
								$stmt = $pdo->prepare("SELECT * FROM subjects WHERE category = :category ORDER BY `subjectID` ");
								$stmt->execute(['category' => 'BOTH']);
								
								$rows = $stmt->rowCount();

								if ($rows > 0)
								{
									for ($i=0; $i<$rows; $i++ )
									{
										$row = $stmt->fetch(PDO::FETCH_OBJ);

										$subjectID = $row->subjectID;
										$sTitle = $row->subjectTitle;
										//echo "<th>$subjectID</th>";
										$subjectList = $subjectList . ",". $subjectID;
									}
								}
									
							$lst = explode(",", $subjectList);
							sort($lst);
							unset($lst[0]);
							$lst = array_values($lst);
							for ($k=0; $k<sizeof($lst); $k++)
							{
								$theader = $theader . "<th>$lst[$k]</th>";
							}
                    	
					$theader = $theader . '<th>Total Score</th></tr>';
					
					//tables rows
					
							$split = explode("_",$currClass);
							$mclass= $split[0]; $sclass= $split[1];

							$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subClass= :sclass ");
							$stmt->execute(['mclass' => $mclass, 'subClass' => $sclass]);
								
							$rows = $stmt->rowCount();

							$trow = '';
							$totalScore = "";
							$classList = array(array());
							
							if ($rows > 0)
							{
								$sn = 1;
								for ($i=0; $i<$rows; $i++)
								{
									$row = $stmt->fetch(PDO::FETCH_OBJ);

									$stdntID = $row->studentID;
									
										if ($sn%2==0)
										{
										
										$trow = $trow . '<tr  style="background-color:#DEDEDE"> <td>'.$sn .'</td> <td>'.$stdntID.'</td>';
										
										
										
											for ($j=0; $j<count($lst); $j++ )
											{
												
												$subjectID = $lst[$j];
												$tbl = strtolower("sc_".$subjectID);
												
												//get record ID of student\'s subject score
												$recID = getSubjectRegID($stdntID, $subjectID);
												
												$score = getSubjectScore($recID, $tbl, $_SESSION["term"]);
												$trow = $trow . '<td style="padding-left:10px;">' .$score. '</td>';
												$totalScore+=$score;
												
											}
										$trow = $trow . '<td style="padding-left:10px;"><b>'.$totalScore.'</b></td></tr>';
												$classList[$i][0]=$totalScore;
												$classList[$i][1]=$stdntID;
												
												$sn+=1;	
										}
										else
										{
										
										$trow = $trow . '<tr> <td>'.$sn.'</td> <td>'.$stdntID.'</td>';
										
										
										
											for ($j=0; $j<count($lst); $j++ )
											{
												
												$subjectID = $lst[$j];
												$tbl = strtolower("sc_".$subjectID);
												
												//get record ID of student\'s subject score
												$recID = getSubjectRegID($stdntID, $subjectID);
												
												$score = getSubjectScore($recID, $tbl, $_SESSION["term"]);
												$trow = $trow . '<td style="padding-left:10px;">' .$score. '</td>';
												$totalScore+=$score;
												
											}
										$trow = $trow . '<td style="padding-left:10px;"><b>'.$totalScore.'</b></td></tr>';
										
										$classList[$i][0]=$totalScore;
												$classList[$i][1]=$stdntID;
											
											$sn+=1;
									}
									
										
									
								}//end of for loop
									
									array_multisort($classList, SORT_DESC, SORT_NUMERIC);
						}
							
								
		$tFooter = '</table><br><br>';
		
		$summary = '<table><tr> <td>Highest in Class: </td> <td><b>'.$classList[0][1].' - '.getStudentName($classList[0][1]).'</b> with a score of: <b>'.$classList[0][0].'</b></td> </tr></table>';
		
		$tFooter = $tFooter . $summary;
		
		return $theader . $trow . $tFooter;	
	}
	
	function population($class, $subClass)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :class AND subClass = :subClass");
		$stmt->execute(['class' => $class, 'subClass' => $subClass]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			return $rows;
		}

	}


	function reportSheet($stndtID,$term, $session)
	{
		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM students WHERE studentID = :stndtID");
		$stmt->execute(['stndtID' => $stndtID]);

		$rows = $stmt->rowCount();
	
		if ($rows > 0)
		{
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			$fullName = $row->lastName . ", ". $row->firstName . " ".$row->otherNames;

			$class = $row->class." ".$row->subClass;  
			$pic = $row->pic;
			$population = population($row->class, $row->subClass);
		}
            
$header='
    
    <style>
	@page {margin: 20px;}
	table {
color: #333;  Lighten up font color 
font-family: Helvetica, Arial, sans-serif;  Nicer font 
border-collapse:
collapse; border-spacing: 0;
font-size:13px;
}

td, th { border: 1px solid #000; height: 20px; }  Make cells a bit taller 

th {
background: #F3F3F3;   
font-weight: bold;  
border-spacing: 0;
}

td {
background: #fff;  Lighter grey background 
text-align: left;  Center our text 
}
.recTbl { border:0px solid #000;}
	</style>
<!--Container Div-->
<div class="" style="width:820px; border:0px solid #000; padding:3px;" >
		
        <!-- header div -->
		<div>
			
			<table style="border:0px solid #FFF; width:810px">
			<tr></tr>
				<tr><td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/coa.png" width="100" height="100" /></td>
				
				<td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:28" >'.getSchAttr("longName").'</td>
				
				<td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/'.getSchAttr("logo").'" width="100" height="100" /></td>
				</tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("address").'</td></tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("pobox").'</td></tr>
				
			</table>
			
		</div>
        
        <div style="text-align:center;">STUDENT\'S TERMLY CONTINUOUS ASSESSMENT REPORT SHEET </div>
        <!--biodata box-->
        <div>
        <table width="810">
        	<tr><td width="470">EXAMINATION RESULT FOR: <u><b>'.$term.'</b></u> TERM </td><td>ACADEMIC SESSION:  <b><u>'.$session.'</u></b>   </td></tr>
            <tr>
            	<td>
                
                    <table width="453">
                        <tr><td style="border:0px solid #fff; height:30px;">STUDENT ID: <b>'.$stndtID.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px;">NAME: <b>'.$fullName.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px;">CLASS: <b>'.$class.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px;">NEXT TERM BEGINS:  <u><b>'.getResumptionDate().'</b></u></td></tr>
                    </table>
            	</td> 
            		
                <td>
                    <table width="350" >
						
                        <tr><td style="border:0px solid #fff; width:200px"> Times School Opened : --
						<br> Times Present : --
						<br> Times Absent : --
						<br><br> Class Population : '.$population.'</td>
						<td style="border:0px solid #fff;" rowspan="4">
						<img class="img img-circle pull-right"  width="150" height="150" src="../files/students/'.$pic.'" />
						</td>
						</tr>
						<tr><td style="border:0px solid #fff;"></td> <td style="border:0px solid #fff;"></td></tr>
						<tr><td style="border:0px solid #fff;"></td> <td style="border:0px solid #fff;"></td></tr>
						<tr><td style="border:0px solid #fff;"></td> <td style="border:0px solid #fff;"></td></tr>
						
                        
                    </table>
                </td>
            </tr>
        </table>
        </div>
       	
        <!--academic records-->
        <div>
        <table width="811" style="text-align: center;">
        	<tr>
            <th width="30" style="border-top:0px solid #000;">#</th> 
            <th width="190" style="border-top:0px solid #000;">Subjects</th> 
            <th width="180" colspan="3" style="border-top:0px solid #000;">Continous Assessment
				<table width="180"> 
					<tr> 
						<td style="border:0px solid #000; text-align:center; pdding-left:20px;" width="57">10</td> 
						<td style="border:0px solid #000; text-align:center; pdding-left:20px;" width="57">10</td> 
						<td style="border:0px solid #000; text-align:center; pdding-left:20px;" width="57">10</td>
					</tr>
				</table>
			</th> 
            <th width="55" style="border-top:0px solid #000;">Exams</th> 
            <th width="55" style="border-top:0px solid #000;">Total</th> 
            <th width="55" style="border-top:0px solid #000;">Grade</th> 
			<th width="50" style="border-top:0px solid #000;">Highest<br>in Class</th> 
			<th width="50" style="border-top:0px solid #000;">Lowest<br>in Class</th> 
            <th width="100" style="border-top:0px solid #000;">Remark</th> 
            </tr>
   ';
   				
                //php query of subjects and scores
                $stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :stdntID AND session = :session ORDER BY `subjectID`");
				$stmt->execute(['stdntID' => $stdntID, 'session'=> $session]);

				$rows = $stmt->rowCount();

                $totalScore = 0;
				$subjectsList = '';
				 
                if ($rows > 0)
                {                   
                    for ($j=1; $j<=$rows; $j++)
                    {
						$row = $stmt->fetch(PDO::FETCH_OBJ);
						
						$recID = $row->recID;  
						$subjectID = $row->subjectID;
						
						$tbl = strtolower("sc_".$subjectID);

						$stmt = $pdo->prepare("SELECT * FROM $tbl WHERE ref = :recID AND term = :term ");
						$stmt->execute(['recID' => $recID, 'term'=> $term]);
						
						$rows = $stmt->rowCount();

						if ($rows > 0)
						{
							$row = $stmt->fetch(PDO::FETCH_OBJ);

							$subjectName = getSubjectName($subjectID);
							$ca1 = $row->ca1; 
							$ca2 = $row->ca2;
							$ca3 = $row->ca3; 
							$ca4  = $row->ca4;
							$exm = $row->exam;
							$total = $row->total;
							$grade = getGrade($total);
							$remark = getRemark($grade);
							//highest score
							$class = str_replace(" ","_",$class);
							
							$hList = highestSubjectScore($subjectID, $class);
							
							$highestScore = $hList[0]['score'];
							
							//lowestscore
							$lList = lowestSubjectScore($subjectID, $class);
							
							$lowestScore= $lList[0]['score'];
							
							$subjectsList = $subjectsList . '<tr> <td>'.$j.'</td> <td style="text-align: left;">'.$subjectName.'</td> <td width=57>'.$ca1.'</td> 
							<td width=57>'.$ca2.'</td> <td width=57>'.$ca3.'</td> <td width=57>'.$exm.'</td> <td>'.$total.'</td> <td>'.$grade.'</td>
							<td>'.$highestScore.'</td> <td>'.$lowestScore.'</td>
							<td>'.$remark.'</td>
							</tr>';
							$totalScore += $total;
							
						}
                    }
                }
                
   $footer='
        </table>
        </div>
        
        <!--grades interpretation-->
        
  
  
        <!--Total Scores and average-->
        <div>
        	<table width="811">
            <tr> 
            <td width="50" style="border-top:0px solid #000;">Total </td> 
            <td width="100" style="border-top:0px solid #000;"> '.$totalScore.' </td> 
            <td width="70" style="border-top:0px solid #000;">Average: </td> 
            <td width="100" style="border-top:0px solid #000;"> '.round($totalScore/$rows,2).' </td> 
            <td width="130" style="border-top:0px solid #000;"> Subjects Offered: </td> 
            <td width="100" style="border-top:0px solid #000;"> '.$rows.' </td> 
            <td width="90" style="border-top:0px solid #000;">Position: </td> 
            <td width="100" style="border-top:0px solid #000;"> ## </td></tr>
            </table>
        </div>
		<div style="width:500px; height:15px; margin-top:5px;">
			Grading Scale: 70-100 : A, 60-69: B, 50-59: C, 45-49 D, 40-44 E, 0-39 F.
		</div>
		 <!--Affective domain section-->
		 <br>
		 <div style="float:left; width:310">
        	<table width=300>
				<tr> <th>PSYCOMOTOR</th> <th>RATING</th> </tr>
				<tr> <td>Punctuality</td> <td></td> </tr>
				<tr> <td>Attentivenes in Class</td> <td></td> </tr>
				<tr> <td>Reliability</td> <td></td> </tr>
				<tr> <td>Initiative</td> <td></td> </tr>
				<tr> <td>Class Attendance</td> <td></td> </tr>
				<tr> <td>Neatness</td> <td></td> </tr>
				<tr> <td>Self Control</td> <td></td> </tr>
				<tr> <td>Relationship with Others</td> <td></td> </tr>
			</table>
			
			
        </div>
		<div style="width:260px; float:left;">
			<table width="250">
				<tr> <th>PRACTICAL SKILLS</th> <th>RATING</th></tr>
				<tr> <td>Handwriting</td> <td></td></tr>
				<tr> <td>Fluency</td> <td></td></tr>
				<tr> <td>Dependency</td> <td></td></tr>
				<tr> <td>Games and Sports</td> <td></td></tr>
				<tr> <td>Drwaing and Painting</td> <td></td></tr>
			</table>
			
			
		</div>
		<div style="">
			<table>
				<tr><td>Key</td> </tr>
				<tr><td>5 - Excellent Degree of Observable Traits </td> </tr>
				<tr><td>4 - Good Degree of Observable Traits </td> </tr>
				<tr><td>3 - Fair Degree of Observable Traits </td> </tr>
				<tr><td>2 - Poor Degree of Observable Traits </td> </tr>
				<tr><td>1 - No Degree of Observable Traits </td> </tr>
			</table>
		</div>
		
        <!--footer comments of principal and form master-->
        <br>
		<div style="width:500px; height:50px;"></div>
        <div>
        	<table width="810">
            	<tr><td width="250" colspan="2">Form Master\'s Comment: </td></tr>
                <tr><td width="550">  </td> <td>Sign/Date:  </td> </tr>
            </table>
            
            <table width="810">
                <tr><td width="250" colspan="2" style="border-top:0px solid #000;">Principal\'s Comment: </td></tr>
                <tr><td width="450">  </td> <td>Sign/Date/Stamp:  </td> </tr>
            </table>
        </div>

</div>

';

	return $header. $subjectsList . $footer;
	}
	
	function reportSheetAverage($stndtID, $session)
	{
		global $pdo;

			$term = "THIRD";

			$stmt = $pdo->prepare("SELECT * FROM students WHERE studentID = :stdntID ");
			$stmt->execute(['stdntID' => $stdntID ]);

			$rows = $stmt->rowCount();
			
			if ($rows > 0)
			{
				$fullName = $row->lastName . ", ". $row->firstName ." ". $row->otherNames;
				$class = $row->class." ".$row->subClass;  
				$pic = $row->pic;
				
			}
            
$header='
    
    <style>
	@page {margin:4px;}
	table {
color: #333;  Lighten up font color 
font-family: Helvetica, Arial, sans-serif;  Nicer font 
border-collapse:
collapse; border-spacing: 0;
}

td, th { border: 1px solid #000; height: 20px; padding-left:10px; }  Make cells a bit taller 

th {
background: #F3F3F3;   
font-weight: bold;  
border-spacing: 0;
}

td {
background: #fff;  Lighter grey background 
text-align: left;  Center our text 
}
.recTbl { border:0px solid #000;}
	</style>
<!--Container Div-->
<div class="" style="width:820px; border:0px solid #000; padding:3px;" >
		
        <!-- header div -->
		<div>
			
			<table style="border:0px solid #FFF; width:820px">
			<tr></tr>
				<tr><td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/coa.png" width="100" height="100" /></td>
				
				<td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:28" >'.getSchAttr("longName").'</td>
				
				<td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/'.getSchAttr("logo").'" width="100" height="100" /></td>
				</tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("address").'</td></tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("pobox").'</td></tr>
				
			</table>
			
		</div>
        
        <div style="text-align:center;">STUDENT\'S TERMLY CONTINUOUS ASSESSMENT REPORT SHEET </div>
        <!--biodata box-->
        <div>
        <table width="820">
        	<tr><td width="470">EXAMINATION RESULT FOR: <u><b>CUMULATIVE</b></u> TERMS </td><td>ACADEMIC SESSION:  <b><u>'.$session.'</u></b>   </td></tr>
            <tr>
            	<td>
                
                    <table width="444">
                        <tr><td style="border:0px solid #fff; height:30px;">STUDENT ID: <b>'.$stndtID.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px;">NAME: <b>'.$fullName.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px; ">CLASS: <b>'.$class.'</b></td></tr>
                        <tr><td style="border:0px solid #fff; height:30px;">NEXT TERM BEGINS:  <u><b>'.getResumptionDate().'</b></u></td></tr>
                    </table>
            	</td> 
            		
                <td>
                    <table width="350" >
                        <tr>
						<td style="border:0px solid #fff; width:200px"> </td>
						<td style="border:0px solid #fff;">
						<img class="img img-circle pull-right"  width="150" height="150" src="../files/students/'.$pic.'" />
						</td></tr>
                        
                    </table>
                </td>
            </tr>
        </table>
        </div>
       	
        <!--academic records-->
        <div>
        <table width="820">
        	<tr>
            <th width="30" style="border-top:0px solid #000;">#</th> 
            <th width="200" style="border-top:0px solid #000;">Subjects</th> 
            <th width="180" colspan="3" style="border-top:0px solid #000;">Annual Assessment
				<table width="100%"> 
					<tr> 
						<td style="border:0px solid #000; text-align:left; padding-left:10px;" width="33%">1st term</td> 
						<td style="border:0px solid #000; text-align:left; padding-left:10px;" width="33%">2nd term</td> 
						<td style="border:0px solid #000; text-align:left; padding-left:10px;" width="33%">3rd term</td> 
					</tr>
				</table>
			</th> 
            <th width="70" style="border-top:0px solid #000;">Average<br>100%</th>  
            <th width="55" style="border-top:0px solid #000;">Grade</th> 
			<th width="60" style="border-top:0px solid #000;">Highest<br>in Class</th> 
			<th width="60" style="border-top:0px solid #000;">Lowest<br>in Class</th> 
            <th width="100" style="border-top:0px solid #000;">Remark</th> 
            </tr>
   ';
   				
                //php query of subjects and scores
				
				$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :stdntID AND session = :session ORDER BY  `subjectID` ASC");
				$stmt->execute(['stdntID' => $stdntID, 'session'=> $session]);

				$rows = $stmt->rowCount();

                $totalScore = 0;
				$subjectsList = '';
			
				 
                if ($rows > 0)
                {
                    
                    for ($j=1; $j<=$rows; $j++)
                    {
						$row = $stmt->fetch(PDO::FETCH_OBJ);

						$recID = $ow->recID;  
						$subjectID = $row->subjectID;
						$tbl = "sc_".$subjectID;
						$subjectName = getSubjectName($subjectID);
						$firstTerm = getSubjectScore($recID, $tbl,"FIRST");
						$scndTerm = getSubjectScore($recID, $tbl,"SECOND");
						$thirdTerm = getSubjectScore($recID, $tbl,"THIRD");
						
						$total = round(($firstTerm + $scndTerm + $thirdTerm)/3, 1);
						$grade = getGrade($total);
						$remark = getRemark($grade);
						
						$class = str_replace(" ","_",$class);
						
						$hList = highestSubjectScoreCumulative($subjectID, $class);
						$highestScore = $hList[0]['score'];
						$lList = lowestSubjectScoreCumulative($subjectID, $class);
						$lowestScore= $lList[0]['score'];
						
							

							$subjectsList = $subjectsList . '<tr> <td>'.$j.'</td> <td>'.$subjectName.'</td> <td>'.$firstTerm.'</td> 
							<td>'.$scndTerm.'</td> <td>'.$thirdTerm.'</td> <td>'.$total.'</td> <td>'.$grade.'</td>
							<td>'.$highestScore.'</td> <td>'.$lowestScore.'</td>
							<td>'.$remark.'</td>
							</tr>';
							$totalScore += $total;
						
                    }//end of loop
                }
                
				
		
				
   $footer='
        </table>
        </div>
        
        <!--grades interpretation-->
        <div>
        	
        </div>
  
  
        <!--Total Scores and average-->
        <div>
        	<table width="820">
            <tr> 
            <td width="50" style="border-top:0px solid #000;">Total </td> 
            <td width="100" style="border-top:0px solid #000;"> '.$totalScore.' </td> 
            <td width="70" style="border-top:0px solid #000;">Average: </td> 
            <td width="100" style="border-top:0px solid #000;"> '.round($totalScore/$rows,2).' </td> 
            <td width="130" style="border-top:0px solid #000;"> Subjects Offered: </td> 
            <td width="100" style="border-top:0px solid #000;"> '.$rows.' </td> 
            <td width="90" style="border-top:0px solid #000;">Position: </td> 
            <td width="100" style="border-top:0px solid #000;"> ## </td></tr>
            </table>
        </div>
		<!-- //affective domain section -->
		
		
        <!--footer comments of principal and form master-->
        <br>
        <div>
        	<table width="820">
            	<tr><td width="250" colspan="2">Form Master\'s Comment: </td></tr>
                <tr><td width="550">  </td> <td>Sign/Date:  </td> </tr>
            </table>
            
            <table width="820">
                <tr><td width="250" colspan="2" style="border-top:0px solid #000;">Principal\'s Comment: </td></tr>
                <tr><td width="450">  </td> <td>Sign/Date/Stamp:  </td> </tr>
            </table>
        </div>

</div>

';

	return $header. $subjectsList . $footer;
	}
	
	//number of credits
	function numCredits($studentID)
	{
		//$session = $_SESSION["session"];
		$session = '2018/2019';

		global $pdo;

		$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND session = :session ORDER BY `subjectID` ASC ");
		$stmt->execute(['studentID' => $studentID, 'session' => $session]);

		$rows = $stmt->rowCount();
		$credits = 0;

		if ($rows>0)
		{
			for ($i=0; $i<=$rows; $i++)
			{
				$row = $stmt->fetch(PDO::FETCH_OBJ);

				$recID = $row->recID;
				$subjectID =  $row->subjectID;
				$tbl = "sc_".$subjectID;
		
				$subjectName = getSubjectName($subjectID);
				$firstTerm = getSubjectScore($recID, $tbl,"FIRST");
				$scndTerm = getSubjectScore($recID, $tbl,"SECOND");
				$thirdTerm = getSubjectScore($recID, $tbl,"THIRD");
                   
				$total = round(($firstTerm + $scndTerm + $thirdTerm)/3, 1);
				$grade = getGrade($total);
				$remark = getRemark($grade);
				
				if ($total>=50)
				{
					$credits +=1;
				}
					$totalScore += $total;		
						
			}	
		}		
		
		return $credits;
	}
	
	//promotion function
	function processPromotion($class, $proClass, $criteria)
	{	//previous class
		global $pdo;

		$split = explode("_",$class);
		$mclass = $split[0];
		$subClass = $split[1];
		
		
		//promotion class
		$split1 = explode("_",$proClass);
		$mclassPro = $split1[0];
		$subClassPro = $split1[1];
		
		//number of promoted
		$numPromoted = 0;
		$numNotPromoted = 0;


		$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass and status='ACTIVE' ");
		$stmt->execute(['mclass' => $mclass, 'subclass' => $subclass]);

		$rows = $stmt->rowCount();

		if ($rows>0)
		{
			for ($i=0; $i<$rows; $i++)
			{
				$row = $stmt->fetch(PDO::FETCH_OBJ);

				$studentID = $row->studentID;

				$numCredits = numCredits($studentID);

				if ($numCredits >= $criteria)
				{
					//update student's class

					$stmt = $pdo->prepare("UPDATE students SET class='$mclassPro', subClass='$subClassPro' WHERE studentID = :studentID ");
					$stmt->execute(['studentID' => $studentID]);

					$numPromoted+=1;
				}
				else
				{
					$numNotPromoted+=1;
				}
				
			}
		}else{ echo "<div class='alert alert-danger'>No Record Found</div>";}
		
		return $numPromoted."-".$numNotPromoted;
	}
	
	function scoreSheet($subjectID, $class)
	{
		global $pdo;
		$header='
    
    <style>
	@page {margin:7px;}
	table {
color: #333;  Lighten up font color 
font-family: Helvetica, Arial, sans-serif;  Nicer font 
border-collapse:
collapse; border-spacing: 0;
}

td, th { border: 0px solid #000; height: 20px; padding-left:10px; }  Make cells a bit taller 

th {
background: #F3F3F3;   
font-weight: bold;  
border-spacing: 0;
}

td {
background: #fff;  Lighter grey background 
text-align: left;  Center our text 
}
.recTbl { border:0px solid #000;}
	</style>
<!--Container Div-->
<div class="" style="width:820px; border:0px solid #000; padding:3px;" >
		
        <!-- header div -->
		<div>
			
			<table style="border:0px solid #FFF; width:820px">
			<tr></tr>
				<tr><td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/coa.png" width="100" height="100" /></td>
				
				<td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:28" >'.getSchAttr("longName").'</td>
				
				<td rowspan="3" style="border:0px solid #FFF; width:110px;"><img src="../files/school/'.getSchAttr("logo").'" width="100" height="100" /></td>
				</tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("address").'</td></tr>
				
				<tr><td style="border:0px solid #FFF; width:600px; text-align:center; font-weight:bold; font-size:18">'.getSchAttr("pobox").'</td></tr>
				
			</table>
			
		</div>
        
        <div style="text-align:center;">'.getSubjectName($subjectID).' of '.$class.' Score Sheet </div>
        <!--biodata box-->
        <div>
        <br>
			<table align="center">
                    	<tr><th>#</th><td><b>Full Name</b></td><th>Student ID</th><th>CA1</th><th>CA2</th><th>CA3</th><th>CA4</th><th>EXAM</th></tr>
                        
						';
						?>
						<?php
							
								
								
								$split = explode ("_",$class);
								$mclass = $split[0]; $subclass = $split[1];
								
								$term = $_SESSION["term"];
								$session = $_SESSION["session"];
								
								if ($subjectID and $_GET["class"])
								{
									$stmt = $pdo->prepare("SELECT * FROM students WHERE class = :mclass AND subclass = :subclass");
									$stmt->execute(['mclass' => $mclass, 'subclass'=> $subclass]);

									$rows = $stmt->rowCount();

									if ($rows > 0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$row = $stmt->fetch(PDO::FETCH_OBJ);
											$studentID = $row->studentID;

											$stmt = $pdo->prepare("SELECT * FROM reg_subjects WHERE studentID = :studentID AND subjectID = :subjectID AND session = :session ");
											$stmt->execute(['studentID' => $studentID, 'subjectID'=> $subjectID, 'session' => $session]);

											$rows = $stmt->rowCount();
											
											if ($rows > 0)
											{
												$row = $stmt->fetch(PDO::FETCH_OBJ);

												$recID = $row->recID;
												$tbl = "sc_".$subjectID;
												
												$stmt = $pdo->prepare("SELECT * FROM $tbl WHERE ref = :recID AND term = :term ");
												$stmt->execute(['recID' => $recID, 'term'=> $term ]);

												$rows = $stmt->rowCount();

												if ($rows > 0)
												{
													$row = $stmt->fetch(PDO::FETCH_OBJ);

													$sid = $row->studentID;
													$scoreRec = $row->recID;

													$ca1 = $row->ca1; 
													$ca2 = $row->ca2;
													$ca3 = $row->ca3; 
													$ca4  = $row->ca4;
													$exam = $row->exam;
													$total = $row->total;
													
												$header = $header . "<tr> <td>$i</td> <td> ".getStudentName($sid)."</td>
											<td><input type='hidden' name='rec_$i' value='$scoreRec'>$sid</td> 
											<td><input type='text' name='ca1_$i' class='form-control' style='width:50px;' value='$ca1' /></td> 
											<td><input type='text' name='ca2_$i' class='form-control' style='width:50px;' value='$ca2' /></td> 
											<td><input type='text' name='ca3_$i' class='form-control' style='width:50px;' value='$ca3' /></td>
											<td><input type='text' name='ca4_$i' class='form-control' style='width:50px;' value='$ca4' /></td> 
											<td><input type='text' name='exam_$i' class='form-control' style='width:50px;' value='$exam' /></td> 
											
												</tr>";	
												}
												
											}//check record availability in registered subjects table
											
										}// end of loping students table
									}
									else { //use header redirection for appropriate location of error msg 
									}
								}
							
						?>
                    
		<?php
	$header = $header . '</table>';
	
	return $header;
	}
}
?>

<script type="text/javascript">
var checkflag = "false";
function check(field) {
  if (checkflag == "false") {
    for (i = 0; i < field.length; i++) {
      field[i].checked = true;
    }
    checkflag = "true";
    return "Uncheck All";
  } else {
    for (i = 0; i < field.length; i++) {
      field[i].checked = false;
    }
    checkflag = "false";
    return "Check All";
  }
}

</script>