<?php include("../inc/html_controls.php");?>


<?php initializePage(); ?>

  		<?php pageBodyTopSection();?>

<!-- open -->
<div class="box box-info">
            	<div class="box-header with-border">
                	<h3 class="box-title">Create Class</h3>
                </div>
                
                <div class="box-body">
                <?php
                    
                    if(isset($_POST["go"]) =="Create")
                    {
                        $mclass = filter_var(strtoupper($_POST['mclass']), FILTER_SANITIZE_STRING);
						$subclass = filter_var(strtoupper($_POST['subclass']), FILTER_SANITIZE_STRING);
                        $cTeacher = filter_var($_POST['cTeacher'], FILTER_SANITIZE_STRING);
                        if($mclass and $subclass)
                        {
                            $classid = $mclass."_".$subclass;
                            $sql = "insert into classes(classid, classTeacher) values(:classid, :classTeacher)";
                            $stmt = $pdo->prepare($sql);
                            if($stmt->execute([':classid' => $classid, ':classTeacher' => $cTeacher]))
                            {
                                echo "<div class='alert alert-success'>Operation Success </div>";
                            } else
                            {
                                echo "<div class='alert alert-danger'>Operation Failed</div>";
                            }
                        }
                    }
					// if ($_POST["go"]=="Create")
					// {
					// 	$mclass = mysql_real_escape_string(filter_var(strtoupper($_POST['mclass']), FILTER_SANITIZE_STRING));
					// 	$subclass = mysql_real_escape_string(filter_var(strtoupper($_POST['subclass']), FILTER_SANITIZE_STRING));
					// 	$cTeacher = mysql_real_escape_string(filter_var($_POST['cTeacher'], FILTER_SANITIZE_STRING));
						
					// 	if ($mclass and $subclass )
					// 	{
					// 		$classid = $mclass."_".$subclass;
							
					// 		$q = mysql_query("insert into classes values('$classid','$cTeacher')") or die (mysql_error());
							
					// 		if ($q) { echo "<div class='alert alert-success'>Operation Success </div>";}
					// 		else {echo "<div class='alert alert-danger'>Operation Failed</div>";}
					// 	}
					// }
				
				?>
                	<form action="" method="post" enctype="multipart/form-data">
                    
                    	<div class="input-group col-lg-10">
                        	<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input type="text" class="form-control " placeholder="Main Class" name="mclass"/>
                        </div>
                    	
                        
                        <br>
                         <div class="input-group">
                        	<select class="form-control" name="subclass">
                            <option vale="SELECT">Select Sub Class</option>
                           `<option>A</option> <option>B</option> <option>C</option> <option>D</option> <option>E</option> <option>F</option> <option>G</option> <option>H</option> <option>I</option> <option>J</option> <option>K</option> <option>L</option> <option>M</option>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                        	<select class="form-control" name="cTeacher">
                            <option value="">Select Class Teacher</option>
                           `<?php 

						   		// $q = @mysql_query("select * from staff order by `staffID`");
								
								// if (@mysql_num_rows($q)>0)
								// {
								// 	for ($i=0; $i<@mysql_num_rows($q);$i++)
								// 	{
								// 		$rec = mysql_fetch_array($q);
								// 		$staffID = $rec["staffID"];  $fullName = $rec["lastName"] ." ". $rec["firstName"] ." ". $rec["otherNames"];
										
								// 		$chck = mysql_query("select * from classes where classTeacher='$staffID'");
											
								// 			if (@mysql_num_rows($chck)==0)
								// 			{
								// 				echo "<option value='$staffID'>$fullName :: $staffID</option>";
								// 			}
										
								// 	}
                                // }
                                $sql = "select * from staff order by `staffID`";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                
                                $rows = $stmt->rowCount();
                                if($rows > 0)
                                {
                                    for ($i=0; $i < $rows; $i++) 
                                    { 
                                        $rec = $stmt->fetch(PDO::FETCH_OBJ);
                                        $staffID = $rec->staffID; $fullName = $rec->lastName;
                                        
                                        $sql = "select * from classes where classTeacher =:classTeacher";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute([':classTeacher'=> $staffID ]);

                                        if($stmt->rowCount() > 0)
                                        {
                                            echo "<option value='$staffID'>$fullName :: $staffID</option>";
                                        }
                                    }
                                }
						   ?>
                            
                            </select>
                        </div>
                        <br>
                        <div class="input-group pull-right col-lg-4">
                            <input type="submit" class="btn btn-info" value="Create" name="go" />
                        </div>
                         	
                    </form>
                </div>
            </div>

<!-- closed -->
<?php pageBodyFooterSection();?>

	<!--can right side bar here -->

   
<?php  endPage();?>
