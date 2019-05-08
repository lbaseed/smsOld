<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
    <?php pageBodyTopSection();?>
    <!-- start -->
    <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Students Fees Payment Status [<?php echo $_GET["class"];?>]
                    </h3>
                </div>
                
                <div class="box-body" style="overflow:scroll;">
                	
                    <form action="" method="get">
                    		<input type="hidden" name="id" value="22" />
                            
                            <div class="input-group">
                            	<select class="form-control" name="class">
                            		<option value="SELECT">Select Class</option>
                            
                           		 <?php
							        echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									// $q = mysql_query("select * from classes order by `classid` ASC");
									// $rows = mysql_num_rows($q);
									// if ($rows>0)
									// {
									// 	for ($i=1; $i<=$rows; $i++)
									// 	{
									// 		$rec = mysql_fetch_array($q);
									// 		$cid = $rec["classid"];
											
									// 		echo "<option value='$cid'>$cid</option>";
									// 	}
                                    // }
                                    $sql = "select * from classes order by `classid` ASC";
                                    $statement = $pdo-prepare($sql);
                                    $statement->execute();
                                    $row = $statement->rowCount();
                                    if($row > 0)
                                    {
                                        for ($i=1; $i < $row; $i++) 
                                        { 
                                            $rec = $statement->fetch(PDO::FETCH_OBJ);
                                            $cid = $rec->classid;
                                            echo "<option value='$cid'>$cid</option>";
                                        }
                                    }

                                    
                    			?>
                            
                            </select>
                            </div>
                            <div class="input-group col-lg-8 pull-right">
                            	<input type="submit" name="do" value="Load" class="btn btn-info" />
                            </div>
                    </form>
                
                		<table class="table table-striped">
                        	<tr> <th>#</th> <th>Student ID</th> <th>Full Name</th> <th>Paid Amount</th> <th>Balance</th> <th>Status</th></tr>
                            	<?php
                                	// if ($_GET["do"]=="Load")
									// {
									// 	$split = explode("_",$_GET["class"]);
									// 	$class = $split[0];  $subClass = $split[1];
										
									// 	$q= mysql_query("select * from students where class='$class' and subClass='$subClass' order by `studentID` ASC");
										
									// 	if (@mysql_num_rows($q)>0)
									// 	{
									// 		for ($i=1; $i<=@mysql_num_rows($q); $i++)
									// 		{
									// 			$rec = mysql_fetch_array($q);
									// 			$studentID = $rec["studentID"];  $fullname = getStudentName($studentID);
									// 			$aPaid = getSchoolFeesPaid($studentID, $_SESSION["term"], $_SESSION["session"]);
									// 			$bal = getSchoolFeesBalance($studentID, $_SESSION["term"], $_SESSION["session"]);
									// 			$fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
												
									// 			if ($bal > 0)	  {	$status = "UNPAID";  }  else { $status = "PAID Fully";}
									// 			if ($aPaid==$fees or $aPaid > $fees) { $status = "PAID Fully";}
									// 			else {	$status = "UNPAID";  }
												
									// 			if ($bal>0)		{$BG = "background-color:#F9B494";}	
									// 			else { $BG = "background-color:#B1F2C6";	} 
									// 			if ($aPaid==$fees)	{ $BG = "background-color:#B1F2C6";	} 
									// 			else {$BG = "background-color:#F9B494";}
												
									// 			echo "<tr style='$BG'> <td>$i</td> <td>$studentID</td> <td>$fullname</td> 
									// 					<td>$aPaid</td> <td>$bal</td> <td>$status</td></tr>";
												
									// 		}
									// 	}
                                    // }
                                    
                                    if(isset($_GET["do"]))
                                    {
                                        $split = explode("_",$_GET["class"]);
                                        $class = $split[0];  $subClass = $split[1];
                                        $sql = "select * from students where class=? and subClass=? order by `studentID` ASC";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array(
                                            $class,$subClass 
                                        ));

                                        $row = $statement->rowCount();
                                        if($row > 0)
                                        {
                                            for($i=1; $i < $row; $i++) 
                                            {                      
                                                $rec = $statement->fetch(PDO::FETCH_OBJ);
                                                $studentID = $rec->studentID;  $fullname = getStudentName($studentID);
                                                $aPaid = getSchoolFeesPaid($studentID, $_SESSION["term"], $_SESSION["session"]);
												$bal = getSchoolFeesBalance($studentID, $_SESSION["term"], $_SESSION["session"]);
                                                $fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
                                                
                                                if ($bal > 0)	  {	$status = "UNPAID";  }  else { $status = "PAID Fully";}
												if ($aPaid==$fees or $aPaid > $fees) { $status = "PAID Fully";}
												else {	$status = "UNPAID";  }
												
												if ($bal>0)		{$BG = "background-color:#F9B494";}	
												else { $BG = "background-color:#B1F2C6";	} 
												if ($aPaid==$fees)	{ $BG = "background-color:#B1F2C6";	} 
												else {$BG = "background-color:#F9B494";}
												
												echo "<tr style='$BG'> <td>$i</td> <td>$studentID</td> <td>$fullname</td> 
														<td>$aPaid</td> <td>$bal</td> <td>$status</td></tr>";


                                            }
                                        }
                                        
                                    }
								?>
                        </table> 
                </div>
                
         </div>
		
    <!-- stop -->
    <?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>