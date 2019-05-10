<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

      <div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">School Calender</h3>
                </div>
                
                <div class="box-body">
                
                	<?php 
                    	if ($_GET["action"]!="")
						{
							activateTerm($_GET["term"], $_GET["session"]);
						}
						if ($_POST["go"]=="OK")
						{
							$fDate = mysql_real_escape_string(filter_var(strtoupper($_POST["finishDate"]),FILTER_SANITIZE_STRING));
							$beginDate = mysql_real_escape_string(filter_var(strtoupper($_POST["beginDate"]),FILTER_SANITIZE_STRING));
							$term = $_POST["term"];
							$session = mysql_real_escape_string(filter_var(strtoupper($_POST["session"]),FILTER_SANITIZE_STRING));
							$recID = rand(000, 99999);
							$st = $_POST["status"];
							if ($session and $term)
							{
								$chck = mysql_query("select * from sessions where session='$session' and term='$term'");
                if (@mysql_num_rows($chck)>0)
                
                // $stmt = $pdo->query("SELECT * FROM classes ORDER BY `classid` ASC");

								// 	$rows = $stmt->rowCount();
								// 	if ($rows>0)
								{
									$rec = mysql_result($chck, 0, "recID");
									$q = mysql_query("update sessions set resumptionDate='$beginDate' and closingDate='$fDate' where recID='$recID'");
									if ($q) {echo "<div class='alert alert-success'>Operation Success</div>";}
									else  {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								}
								else
								{
									$q = mysql_query("insert into sessions values('$recID','$session','$term','$beginDate','$fDate','$st')");
									
									if ($q) {echo "<div class='alert alert-success'>Operation Success</div>";}
									else  {echo "<div class='alert alert-danger'>Operation Failed</div>";}
								}
							}
						}
					?>
                		<form action="" method="post">
                        	<div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="session" placeholder="Academic Session" />
                            </div>
                            <br>
                            <div class="input-group">
                            	<select class="form-control" name="term">
                                <option>FIRST</option> <option>SECOND</option> <option>THIRD</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="beginDate" placeholder="Term Begining Date" />
                            </div>
                            <br>
                            <div class="input-group col-lg-7">
                            	<input type="text" class="form-control" name="finishDate" placeholder="Term Finishing Date" />
                            </div>
                            <div class="input-group col-lg-3 pull-right">
                            	<input type="submit" class="btn btn-info" name="go" value="OK" />
                            </div>
                            <br>
                            <div class="input-group">
                            	<select class="form-control" name="status">
                                <option aelected value="CURRENT">CURRENT</option> <option value="NEXT">NEXT</option>
                                <option value="PAST">PAST</option> 
                                </select>
                            </div>
                        </form>
                        <hr>
                        <table class="table table-striped">
                        	<tr> <th>#</th> <th>Session</th> <th>Term</th> <th>Beginning Date</th> <th>End Date</th> <th>Status</th> </tr>
                            <?php
                            	$q = mysql_query("select * from sessions order by `session` DESC");
								if (@mysql_num_rows($q)>0)
								{
									for ($i=1; $i<=mysql_num_rows($q); $i++)
									{
										$rec = mysql_fetch_array($q);
										$fSession = $rec["session"]; $fTerm = $rec["term"]; $fBeginDate = $rec["resumptionDate"];
										$fEndDate = $rec["closingDate"]; $fst = $rec["status"];
										echo "
										<tr> <td>$i</td> <td>$fSession</td> <td>$fTerm</td> <td>$fBeginDate</td> <td>$fEndDate</td> 
										";
										if ($fst=="NEXT")
										{
											echo "<td><a href='index.php?id=91&action=act&session=$fSession&term=$fTerm'><button class='btn btn-info' type='button'>Activate</button></a></td>";
										}
										else {echo "<td>$fst</td>";}
										"
										 </tr>
										";
									}
								}
								
							?>
                        </table>
                        
                </div>
             </div>
		
            
          </a>
          <?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>