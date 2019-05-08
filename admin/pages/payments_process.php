<?php include("../inc/html_controls.php");?>
<?php initializePage(); ?>
    <?php pageBodyTopSection();?>
    <!-- start -->
    <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Process Payments  [<?php  echo "Current Fees: N".getSchoolFees($_SESSION["term"], $_SESSION["session"]);?> ]
                    </h3>
                </div>
                
                <div class="box-body">
                		<form action="" method="get">
                        	<div class="input-group col-lg-5 margin">
                            <input type="hidden" name="id" value="21" />
                            <input type="text" name="param" placeholder="Enter name or ID" class="form-control" />
                            <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" name="search" value="go" type="submit">Go!</button></span>
                            </div>
                        </form>
                        <!--
                        <hr>
                        <form action="" method="get">
                        	<div class="input-group col-lg-7">
                            	<select class="form-control" name="class">
                            <option value="SELECT">Select Class</option>
                           		 <?php
								 /*
								echo "<option value=".$_GET["class"]." selected>".$_GET["class"]."</option>";
									$q = mysql_query("select * from classes order by `classid` ASC");
									$rows = mysql_num_rows($q);
									if ($rows>0)
									{
										for ($i=1; $i<=$rows; $i++)
										{
											$rec = mysql_fetch_array($q);
											$cid = $rec["classid"];
											
											echo "<option value='$cid'>$cid</option>";
										}
									}
									*/
                    			?>
                            
                            </select>
                            <input type="hidden" name="id" value="21" /> 
                            <span class="input-group-btn">
                            <button class="btn btn-info btn-flat" name="load" value="go" type="submit">Load>></button></a>
                            </span>
                            </div>
                        </form>
                        -->
                        <hr>
                        <?php
                        		// if (isset($_GET["param"]))
								// {
								// 	$id = trim($_GET["param"]);
									
								// 	$splt = explode(" ", $id);
								// 	$p1 = $splt[0];
								// 	$p2 = $splt[1];
								// 	$p3 = $splt[2];
									
								// 	$fetch1 = @mysql_query("select * from students where studentID='$id' and status='Active'");
									
								// 	$fetch2 = @mysql_query("select * from students where lastName='$p1' and firstName=
								// 	'$p2' and otherNames='$p3' and status='Active'");
									
								// 	if (@mysql_num_rows($fetch1)>0)
								// 	{
								// 		$fullName = mysql_result($fetch1, 0, "lastName") .", ".
								// 		  mysql_result($fetch1, 0, "firstName") ." ". mysql_result($fetch1, 0, "otherNames");
								// 		  $class = mysql_result($fetch1, 0, "class");
								// 		  $subClass = mysql_result($fetch1, 0, "subClass");
								// 		  $studentID = mysql_result($fetch1, 0, "studentID");
								// 	}
								// 	else if (@mysql_num_rows($fetch2)>0)
								// 	{
								// 		 $fullName = mysql_result($fetch2, 0, "lastName") .", ".
								// 		  mysql_result($fetch2, 0, "firstName") ." ". mysql_result($fetch2, 0, "otherNames");
								// 		  $class = mysql_result($fetch2, 0, "class");
								// 		  $subClass = mysql_result($fetch2, 0, "subClass");
								// 		  $studentID = mysql_result($fetch2, 0, "studentID");
								// 	}
								// 	else
								// 	{
								// 		echo "<div class='alert alert-danger'>No active student found with this record</div>";
								// 	}
                                // }

                                if(isset($_GET["param"]))
                                {
                                    $id = trim($_GET["param"]);
									
									$splt = explode(" ", $id);
									$p1 = $splt[0];
									$p2 = $splt[1];
                                    $p3 = $splt[2];
                                    
                                    $sql = "select * from students where studentID=? and status= ? ";
                                    $statement = $pdo->prepare($sql);
                                    $fetch1 = $statement->execute([
                                        $id,'Active' 
                                    ]);

                                    $sql = "select * from students where lastName=? and firstName=
                                        ? and otherNames=? and status=?";
                                    $statement = $pdo->prepare($sql);
                                    $fetch2 = $statement->execute([
                                        $p1,$p2, $p3,'Active'
                                    ]);

                                    $row = $fetch1->rowCount();
                                    $row1 = $fetch2->rowCount();
                                    if($row > 0)
                                    {
                                        $rec = $fetch1->fetch(PDO::FETCH_OBJ);
                                        $fullName = $rec->lastName.", ".$rec->firstName." ".$rec->otherNames;
                                        $class = $rec->class;
                                        $subClass = $rec->subClass;
                                        $studentID = $rec->studentID;

                                    }else if($row1 > 0){
                                        $rec = $fetch2->fetch(PDO::FETCH_OBJ);
                                        $fullName = $rec->lastName.", ".$rec->firstName." ".$rec->otherNames;
                                        $class = $rec->class;
                                        $subClass = $rec->subClass;
                                        $studentID = $rec->studentID;
                                    }
                                    else
									{
										echo "<div class='alert alert-danger'>No active student found with this record</div>";
									}
                                    
                                }
						?>
                        
                        
                        <?php
							//posting payments
							
							// if ($_POST["do"]=="Process")
							// {
							// 	$tm = $_POST["term"];  $ss = $_POST["session"];
							// 	$bank = mysql_real_escape_string(filter_var(strtoupper($_POST["bankName"]), FILTER_SANITIZE_STRING));
							// 	$tellerNum = mysql_real_escape_string(filter_var(strtoupper($_POST["tellerNum"]), FILTER_SANITIZE_STRING));
							// 	$depositDate = mysql_real_escape_string(filter_var(strtoupper($_POST["depositeDate"]), FILTER_SANITIZE_STRING));
							// 	$amount = mysql_real_escape_string(filter_var($_POST["amount"], FILTER_SANITIZE_STRING));
							// 	$ref  = time();
							// 	$recID = $ref + 323;
							// 	$date = date("d/m/Y");
							// 	$fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
							// 	$sid = $_POST["sid"];
							// 	$cashier = $_SESSION["user"];
								
								
								
							// 	if ($amount and $tm and $ss)
							// 	{
									
							// 		$chck = mysql_query("select * from transaction where studentID='$sid' and term='$tm' and session='$ss'");
									
							// 		if (@mysql_num_rows($chck)==0)
							// 		{
							// 			if ($amount < $fees) {$balance = $fees - $amount ;}
										
							// 		$q = mysql_query("insert into transaction values('$ref','$sid','$fees','$amount','$balance','$tm','$ss')");
									
							// 		$subQ = mysql_query("insert into payments values('$recID','$ref','$amount','$date',
							// 		'$cashier','$bank','$tellerNum','$depositDate')");
											
							// 				if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
							// 				else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
							// 		}	
							// 		else
							// 		{
							// 			$ref1 = mysql_result($chck, 0, "ref");
										
							// 			$q = mysql_query("update transaction set amountPaid= amountPaid + $amount, balance= balance - $amount where  ref='$ref1'");
							// 			$subQ = mysql_query("insert into payments values('$recID','$ref1','$amount',
							// 			'$date','$cashier','$bank','$tellerNum','$depositDate')");
										
							// 			if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
							// 				else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
							// 		}
									
							// 	}
                            // }
                            if(isset($_POST["do"]))
                            {
                                $tm = $_POST["term"];  $ss = $_POST["session"];
								$bank = $_POST["bankName"];
								$tellerNum = $_POST["tellerNum"];
								$depositDate = $_POST["depositeDate"];
								$amount = $_POST["amount"];
								$ref  = time();
								$recID = $ref + 323;
								$date = date("d/m/Y");
								$fees = getSchoolFees($_SESSION["term"], $_SESSION["session"]);
								$sid = $_POST["sid"];
                                $cashier = $_SESSION["user"];
                                
                                if($amount and $tm and $ss)
                                {
                                    $sql = "select * from transaction where studentID=? and term=? and session=? ";
                                    $statement = $pdo->prepare();
                                    $chck = $statement->execute([
                                        $sid,$tm, $ss 
                                    ]);
                                    $row =  $chck->rowCount();
                                    if($row == 0)
                                    {
                                        if ($amount < $fees) {$balance = $fees - $amount ;}

                                        $sql = "insert into transaction(ref, studentID, fees, amountPaid, balance, term, session) values(?,?,?,?,?,?,?)";
                                        $statement = $pdo->prepare($sql);
                                        $q = $statement->execute([ $ref, $sid, $fees, $amount, $balance, $tm, $ss]);

                                        $sql = "insert into payments(recID, ref, amount, date, cashier, bank, tellerNum, depositDate) values(?,?,?,?,
                                                ?,?,?,? )";
                                        $statement = $pdo->prepare($sql);

                                        $subQ = $statement->execute([
                                            $recID, $ref, $amount,$date,$cashier,$bank,$tellerNum,$depositDate     
                                        ]);

                                        if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
                                        else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
                                       

                                    }else
                                    {
                                        $rec = $chck->fetch(PDO::FETCH_OBJ);

                                        $ref1 = $rec->ref;

                                        $sql = "update transaction set amountPaid= amountPaid + ?, balance= balance - ?  where  ref= ?";
                                        $stmt = $pdo->prepare();
                                       $q =  $stmt->execute([
                                            $amount, $amount, $ref1
                                        ]);

                                        $sql = "insert into payments(recID, ref, amount, date, cashier, bank, tellerNum, depositDate) values(?,?,?,
                                                    ?,?,?,?,?)";
                                        $stmt = $pdo->prepare($sql);
                                        $subQ = $stmt->execute([
                                            $recID,$ref1,$amount,$date,$cashier,$bank,$tellerNum,$depositDate  
                                        ]);

                                        if ($q and $subQ) {echo "<div class='alert alert-success'>Operation Success</div>"; $bank=""; $depositDate=""; $tellerNum=""; $balance=""; $amount="";}
                                        else {echo "<div class='alert alert-danger'>Operation Failed</div>";}

                                    }
                                }

                            }
                        ?>
                        <form action="" method="post">
                        	
                            <table class="table table-stripled">
                            <tr>
                            	<td>Student ID</td> <td> <?php echo $studentID ?>
                                <input type="hidden" name="sid" value="<?php echo isset($studentID) ? $studentID : ""; ?>" />
                                </td> 
                            </tr>
                            <tr>
                            	<td>Full Name</td> <td> <?php echo isset($fullName) ? $fullName : "";  ?></td> <td>Class</td> <td> <?php echo $class . " " . $subClass ?></td>
                            </tr>
                            <tr>
                            	<td>Currently Paid</td> 
                                <td> <?php 
									 
									echo  "N".getSchoolFeesPaid($studentID, $_SESSION["term"], $_SESSION["session"]);
								?> </td>
                                <td> Balance</td> <td> <?php echo "N".getSchoolFeesBalance($studentID, $_SESSION["term"], $_SESSION["session"]); ?> </td>
                            </tr>
                            </table>
                            <hr>
                            
                            
                            
                            <table class="table">
                              <tr> 
                            	<td>
                                	<select class="form-control" name="term">
                                    <option value="<?php echo $_SESSION["term"]?>" selected><?php echo $_SESSION["term"]?></option>
                                    <option>FIRST</option> <option>SECOND</option> <option>THIRD</option>
                                    </select>
                                </td> 
                                <td>
                                	<select class="form-control" name="session">
                                     <option value="<?php echo $_SESSION["session"]?>" selected><?php echo $_SESSION["session"]?></option>
                                    <option>2014/2015</option> <option>2015/2016</option>
                                    </select>
                                </td> 
                              </tr>
                              <tr>
                              	<td>
                                	<input type="text" class="form-control" placeholder="Bank" name="bankName" value="<?php echo $bank ?>" />
                                </td>
                                <td>
                                	<input type="text" class="form-control" placeholder="Teller Number" name="tellerNum" value="<?php echo $tellerNum ?>" />
                                </td>
                              </tr>
                               <tr>
                              	<td>
                                	<input type="text" class="form-control" placeholder="Deposite Date" name="depositeDate" value="<?php echo $depositDate ?>" />
                                </td>
                                <td>
                                	<input type="text" class="form-control" placeholder="Amount" name="amount" value="<?php  echo $amount ?>" />
                                </td>
                              </tr>
                            </table>
                           	<div class="input-group pull-right">
                            	<input type="submit" name="do" value="Process" class="btn btn-info btn-lg" />
                            </div>
                        </form>
                </div>
           	</div>

    <!-- stop -->
    <?php pageBodyFooterSection();?>
<!--can right side bar here -->
<?php  endPage();?>